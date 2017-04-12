</div>
</div>
</div>
<script type="text/javascript" src="//cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.7.4/dist/progressbar.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script type="text/javascript">
$( document ).ready(function() {
  $("#anket_tipi").prop("selectedIndex", -1);
  $( ".button" ).click(function() {
      if($("#anket_tipi").prop("selectedIndex")!=-1){
        $(".soru").show();
        $(".first").hide();
      }
      else
        confirm("Lütfen Anket Seçiniz!");
    });
    $( "#secenek" ).click(function() {
        $(".soru-text").show();
        $(".soru").hide();
        var count=$('#count').val();
        var type=$( "#options" ).val();
        if(type=='1'){
            for (var i = 0; i < count; i++) {
              $(".cevap-view").append("<p>Radio Buton Value:</p><input type='text' name='values["+i+"]'required/> <br>")
            }
        }
        else if(type=='2'){
          for (var i = 0; i < count; i++) {
            $(".cevap-view").append("<p>Checkbox Buton Value:</p><input type='text' name='values["+i+"]'required/> <br>")
          }
        }
    });
    var salesData = {
    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    datasets: [
      {
        label: "Front",
        fillColor: "rgba(247, 80, 90, 0.0)",
        strokeColor: "#F7505A",
        pointColor: "#F7505A",
        pointStrokeColor: "rgba(0,0,0,0.2)",
        pointHighlightStroke: "rgba(225,225,225,0.75)",
        data: [3400, 3000, 2500, 4500, 2500, 3400, 3000]
      },
      {
        label: "Middle",
        fillColor: "rgba(255, 172, 100, 0.0)",
        strokeColor: "rgba(255, 172, 100, 1)",
        pointColor: "rgba(255, 172, 100, 1)",
        pointStrokeColor: "rgba(0,0,0,0.2)",
        pointHighlightStroke: "rgba(225,225,225,0.75)",
        data: [1900, 1700, 2100, 3600, 2200, 2500, 2000]
      },
      {
        label: "Back",
        fillColor: "rgba(19, 71, 34, 0.0)",
        strokeColor: "rgba(88, 188, 116, 1)",
        pointColor: "rgba(88, 188, 116, 1)",
        pointStrokeColor: "rgba(0,0,0,0.2)",
        pointHighlightStroke: "rgba(225,225,225,0.75)",
        data: [1000, 1400, 1100, 2600, 2000, 900, 1400]
      }
    ]
    };
    var ctx = document.getElementById("salesData").getContext("2d");
    window.myLineChart = new Chart(ctx).Line(salesData, {
    pointDotRadius : 6,
    pointDotStrokeWidth : 2,
    datasetStrokeWidth : 3,
    scaleShowVerticalLines: false,
    scaleGridLineWidth : 2,
    scaleShowGridLines : true,
    scaleGridLineColor : "rgba(225, 255, 255, 0.015)",
    scaleOverride: true,
    scaleSteps: 9,
    scaleStepWidth: 500,
    scaleStartValue: 0,

    responsive: true

    });

    var creditSales = new ProgressBar.Circle('#creditSales', {
    color: '#F7505A',
    strokeWidth: 5,
    trailWidth: 3,
    duration: 1000,
    text: {
      value: '0%'
    },
    step: function(state, bar) {
      bar.setText((bar.value() * 100).toFixed(0) + "%");
    }
    });
    var channelSales = new ProgressBar.Circle('#channelSales', {
    color: '#e88e3c',
    strokeWidth: 5,
    trailWidth: 3,
    duration: 1000,
    text: {
      value: '0%'
    },
    step: function(state, bar) {
      bar.setText((bar.value() * 100).toFixed(0) + "%");
    }
    });
    var directSales = new ProgressBar.Circle('#directSales', {
    color: '#2bab51',
    strokeWidth: 5,
    trailWidth: 3,
    duration: 1000,
    text: {
      value: '0%'
    },
    step: function(state, bar) {
      bar.setText((bar.value() * 100).toFixed(0) + "%");
    }
    });
    creditSales.animate(0.8);
    channelSales.animate(0.64);
    directSales.animate(0.34);
  });
</script>
</body>
</html>
