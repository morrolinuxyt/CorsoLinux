if (!LFStatsChartsVisible) {
  var LFStatsChartsVisible = false;
}

function drawChart(){
  // create and animate charts only when they become visible
  if(!isInViewport($('#lf-statistics'), 2)) return;
  if(LFStatsChartsVisible) return;
  LFStatsChartsVisible = true;

  umami.track('scroll_doughnut-chart');

  // loop over all html-defined doughnut charts
  var charts = document.getElementsByClassName("doughnut");
  for (var i = 0; i < charts.length; i++) {
    var canva = document.createElement("canvas");
    var desc = charts[i].getAttribute("desc");
    var inputColor = charts[i].getAttribute("color");
    var inputValue = charts[i].getAttribute("value");
    charts[i].appendChild(canva);

    // set data
    data = {
      datasets:
      [{
        data: [inputValue, 100-inputValue],
        backgroundColor: [inputColor,"#FFFFFF00"],
      }],
    }
  
    // create chart
    var promisedDeliveryChart = new Chart(canva, {
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
    });

    // override chart with percentage value
    Chart.plugins.register({
      id: desc,
      beforeDraw: function(chart) {
        var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;
        ctx.restore();
        var fontSize = (height / 114).toFixed(2);
        ctx.font = fontSize + "em sans-serif";
        ctx.textBaseline = "middle";
        var text = chart.data.datasets[0]["data"][0] + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;
        ctx.fillText(text, textX, textY);
        ctx.save();
      }
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

$(window).scroll(function(){
  drawChart();
});
$(document).ready(drawChart());
