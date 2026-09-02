// I grafici a ciambella di "Sbocchi occupazionali" prendono i colori dalla
// tavolozza del sito invece di tre tinte cablate: l'arco pieno è l'accento
// della pagina (a tre intensità decrescenti, come i tre valori), il resto
// dell'anello è la hairline. Entrambi seguono il tema chiaro/scuro.
var lfCharts = [];

function tokenColor(name, fallback) {
  var v = getComputedStyle(document.body).getPropertyValue(name).trim();
  return v || fallback;
}

// Chart.js disegna su canvas: le funzioni CSS (var(), color-mix()) lì non
// esistono, quindi la velatura va calcolata a mano in rgba.
function withAlpha(color, alpha) {
  if (alpha === null || alpha === '' || +alpha >= 1) return color;
  var hex = color.replace('#', '');
  if (hex.length === 3) hex = hex[0]+hex[0] + hex[1]+hex[1] + hex[2]+hex[2];
  if (hex.length !== 6) return color;
  return 'rgba(' + parseInt(hex.slice(0,2),16) + ',' +
                   parseInt(hex.slice(2,4),16) + ',' +
                   parseInt(hex.slice(4,6),16) + ',' + (+alpha) + ')';
}

function isDarkTheme() {
  var root = document.documentElement;
  if (root.classList.contains('theme-dark')) return true;
  if (root.classList.contains('theme-light')) return false;
  return window.matchMedia &&
         window.matchMedia('(prefers-color-scheme: dark)').matches;
}

function chartColors(el) {
  var token = el.getAttribute('color') || '--accent';
  var color = token.indexOf('--') === 0 ? tokenColor(token, '#ff651c') : token;
  var tint = el.getAttribute('tint');

  // Su fondo scuro la velatura non schiarisce: smorza. Portata sotto una certa
  // soglia l'arancio diventa marrone, quindi lì la scala si comprime.
  if (tint !== null && isDarkTheme()) tint = 1 - (1 - (+tint)) * 0.45;

  return [ withAlpha(color, tint),
           tokenColor('--hairline', '#e3e6ea') ];
}

// Il testo al centro non è un elemento del DOM: lo scrive questo plugin.
// Va registrato una volta sola, e non prima che Chart.js sia stato caricato
// (index.php lo include dopo questo file).
var doughnutPluginReady = false;

function registerDoughnutPlugin() {
  if (doughnutPluginReady) return;
  doughnutPluginReady = true;

  Chart.plugins.register({
    id: 'doughnut-value',
    beforeDraw: function(chart) {
      if (!chart.canvas || !chart.canvas.classList.contains('doughnut-canvas')) return;
      var width = chart.chart.width,
          height = chart.chart.height,
          ctx = chart.chart.ctx;
      ctx.restore();
      var fontSize = (height / 114).toFixed(2);
      ctx.font = fontSize + "em sans-serif";
      ctx.textBaseline = "middle";
      // senza fillStyle il canvas scrive in nero: invisibile in tema scuro
      ctx.fillStyle = tokenColor('--ink', '#000');
      var text = chart.data.datasets[0]["data"][0] + "%",
          textX = Math.round((width - ctx.measureText(text).width) / 2),
          textY = height / 2;
      ctx.fillText(text, textX, textY);
      ctx.save();
    }
  });
}

function drawChart(){
  // create and animate charts only when they become visible
  if(!isInViewport($('#lf-statistics'), 2)) return;

  registerDoughnutPlugin();

  // loop over all html-defined doughnut charts
  var charts = document.getElementsByClassName("doughnut");
  for (var i = 0; i < charts.length; i++) {
    // drawChart() è chiamata sia al ready sia allo scroll: senza questa
    // guardia la stessa ciambella verrebbe disegnata più volte.
    if (charts[i].querySelector('canvas')) continue;

    var canva = document.createElement("canvas");
    canva.className = "doughnut-canvas";
    var desc = charts[i].getAttribute("desc");
    var inputValue = charts[i].getAttribute("value");
    charts[i].appendChild(canva);

    // set data
    var data = {
      datasets:
      [{
        data: [inputValue, 100-inputValue],
        backgroundColor: chartColors(charts[i]),
      }],
    }

    // create chart
    lfCharts.push({
      el: charts[i],
      chart: new Chart(canva, {
        type: 'doughnut',
        data: data,
        options: {
          elements: {arc: {borderWidth: 0}},
          cutoutPercentage: 80,
          tooltips: {enabled: false},
          hover: {mode: null},
          responsive: true,
          legend: {display: false}
        }
      })
    });

    // append the chart to the DOM
    var description = document.createElement("p");
    var spacer = document.createElement("br");
    var h5 = document.createElement("h5");
    description.appendChild(spacer);
    description.appendChild(h5);
    h5.innerHTML = desc;
    charts[i].appendChild(description);
  }
}

// I colori sono già stati "cotti" nel canvas al momento del disegno: al
// cambio di tema vanno riletti dalla tavolozza e ridisegnati.
document.addEventListener('themechange', function() {
  for (var i = 0; i < lfCharts.length; i++) {
    lfCharts[i].chart.data.datasets[0].backgroundColor = chartColors(lfCharts[i].el);
    lfCharts[i].chart.update();
  }
});

var recensioniVisible = false;
var testimonianzeVisible = false;
var percorsoVisible = false;
var comparaVisible = false;
var LFStatsChartsVisible = false;
var countersVisible = false;

// Ogni sezione ha il suo controllo indipendente: prima ciascun ramo faceva
// "return", quindi bastava che una sezione più in alto fosse ancora anche solo
// parzialmente a schermo per non arrivare mai a quelle sotto. I contatori, che
// stanno in fondo alla catena, partivano così con parecchio ritardo.
function track_scroll(){
  if(!LFStatsChartsVisible && isInViewport($('#lf-statistics'), 2)){
    LFStatsChartsVisible = true;
    drawChart();
    umami.track('scroll_doughnut-chart');
  }

  if(!recensioniVisible && isInViewport($('#recensioni'), 1)){
    recensioniVisible = true;
    umami.track('scroll_recensioni');
  }

  if(!countersVisible && isInViewport($('#counters'), 1)){
    countersVisible = true;
    increment();
    umami.track('scroll_counters');
  }

  if(!testimonianzeVisible && isInViewport($('#testimonianze'), 1)){
    testimonianzeVisible = true;
    umami.track('scroll_testimonianze');
  }

  if(!percorsoVisible && isInViewport($('#percorso'), 1)){
    percorsoVisible = true;
    umami.track('scroll_percorso');
  }

  if(!comparaVisible && isInViewport($('#compara'), 1)){
    comparaVisible = true;
    umami.track('scroll_compara');
  }
}


$('.yt_video').fitVids();


$(window).scroll(function(){
  track_scroll();
});

$(document).ready(function(){
  track_scroll();
  // increment();
  drawChart();
});
