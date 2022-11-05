@props(['userData','data'])

<script src="{{asset('admin-assets/js/plugins/chartjs.min.js')}}"></script>
 <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var data = [0,0,0,0,0,0,0,0,0,0,0,0];
    @foreach($userData as $user)
        data[{{$user->month}}-1] = {{$user->count}};
    @endforeach
    var currentMonth = (new Date()).getMonth();
    var slicedLabel;
    var slicedData;
    if(currentMonth - 5 < 0) {
        var secondHalfData = data.slice(0, currentMonth + 1);
        var firstHalfData = data.slice(currentMonth - 5);
        slicedData = firstHalfLabel.concat(secondHalfLabel);
        var secondHalfLabel = months.slice(0, currentMonth + 1);
        var firstHalfLabel = months.slice(currentMonth - 5);
        sliced = firstHalfLabel.concat(secondHalfLabel);
    } else {
        slicedLabel = months.slice(currentMonth - 5, currentMonth + 1);
        slicedData = data.slice(currentMonth - 5, currentMonth + 1);
    }

    new Chart(ctx1, {
      type: "line",
      data: {
        labels: slicedLabel,
        datasets: [{
          label: "Joined Users",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: slicedData,
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#808080',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
var doughnutLabels = ['House', 'Land', 'Apartment', 'Building', 'Shop','Warehouse'];
var salesData=[];
var stockData=[];

@foreach ($data as $item )
    salesData.push({{$item->sale_count}});
    stockData.push({{$item->stock_count}});
@endforeach

doughnutChartMaker( salesData,doughnutLabels,'doughnut-chart1')
doughnutChartMaker( stockData,doughnutLabels,'doughnut-chart2')
// doughnutChartMaker()
function doughnutChartMaker( data, labels,element) {
    const ctx = document.getElementById(element).getContext('2d');
    const chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of Votes',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                            intersect: false,
                            mode: 'index',
                            },
                }
            });
return chart;
}
  </script>
