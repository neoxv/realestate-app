@props(['userData'])
@php
    print_r($userData->pluck('count')->first());
@endphp
<script src="{{asset('admin-assets/js/plugins/chartjs.min.js')}}"></script>
 <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var data = [0,0,0,0,0,0];
    @foreach($userData as $user)
        data[{{$user->month}}-1] = {{$user->count}};
    @endforeach
    var currentMonth = (new Date()).getMonth();
    var sliced;
    if(currentMonth - 5 < 0) {
        var secondHalf = months.slice(0, currentMonth + 1);
        var firstHalf = months.slice(currentMonth - 5);
        sliced = firstHalf.concat(secondHalf);
    } else {
        sliced = months.slice(currentMonth - 5, currentMonth + 1);
    }

    new Chart(ctx1, {
      type: "line",
      data: {
        labels: sliced,
        datasets: [{
          label: "Joined Users",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: data,
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
