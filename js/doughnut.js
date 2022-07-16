if (!datas) {
  var datas = [];
}

var inputValue = Number(document.currentScript.attributes.getNamedItem("value").value);
var inputColor = document.currentScript.attributes.getNamedItem("color").value;
var where = document.currentScript.attributes.getNamedItem("where").value;

datas.push(
{
  datasets:
  [{
    data: [inputValue, 100-inputValue],
    backgroundColor: [inputColor,"#FFFFFF00"],
  }],
  where: where,   // custom field: where to place the chart on the DOM
});

var LFStatsChartsVisible = false;

function drawChart(){
  if(isInViewport($('#lpi-statistics'), true)){
    if(LFStatsChartsVisible) return;
    LFStatsChartsVisible = true;

    for(i=0; i < datas.length; i++){
      var promisedDeliveryChart = new Chart(document.getElementById(datas[i].where), {
        type: 'doughnut',
        data: datas[i],
        options: {
          elements: {arc: {borderWidth: 0}},
          cutoutPercentage: 80,
          tooltips: {enabled: false},
          hover: {mode: null},
          responsive: true,
          legend: {display: false}
        }
      });
  
      Chart.plugins.register({
        id: where,
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
    }
  }
}

$(window).scroll(function(){
  drawChart();
});
$(document).ready(drawChart());
