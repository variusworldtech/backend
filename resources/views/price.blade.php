@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<div class="container">
  <div class="container">
      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="page-profile.html#">Home</a></li>
              <li class="breadcrumb-item"><a href="page-profile.html#">Prices</a></li>
              <li class="breadcrumb-item active" aria-current="page">History</li>
            </ol>
            <h6 class="slim-pagetitle">Price History</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper mg-t-20">
            <label class="section-title">Line Chart</label>
            <p class="mg-b-20 mg-sm-b-40">Below is the basic line chart example.</p>

            <div class="row">
              <div class="col-xl-12">
                <div class="bd pd-t-30 pd-b-20 pd-x-20">
                  <canvas id="myChart" width="400" height="400"></canvas>
                  <script>
                  var ctx = document.getElementById("myChart").getContext('2d');
                  var myChart = new Chart(ctx, {
                      type: 'bar',
                      data: {
                          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                          datasets: [{
                              label: '# of Votes',
                              data: [12, 19, 3, 5, 2, 3],
                              backgroundColor: [
                                  'rgba(255, 99, 132, 0.2)',
                                  'rgba(54, 162, 235, 0.2)',
                                  'rgba(255, 206, 86, 0.2)',
                                  'rgba(75, 192, 192, 0.2)',
                                  'rgba(153, 102, 255, 0.2)',
                                  'rgba(255, 159, 64, 0.2)'
                              ],
                              borderColor: [
                                  'rgba(255,99,132,1)',
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
                          scales: {
                              yAxes: [{
                                  ticks: {
                                      beginAtZero:true
                                  }
                              }]
                          }
                      }
                  });
                  </script>
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- section-wrapper -->

        </div><!-- container -->
      </div><!-- slim-mainpanel -->

      <div class="slim-footer">
        <div class="container">
          <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
          <p>Designed by: <a href="">ThemePixels</a></p>
        </div><!-- container -->
      </div><!-- slim-footer -->
  </div>
</div>
@endsection
