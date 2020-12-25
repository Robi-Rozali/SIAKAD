@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <div class="container-fluid mb-5">
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        NIM :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                        {{ Auth::guard('mahasiswa')->user()->nim }}
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Nama :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                        {{ Auth::guard('mahasiswa')->user()->nama }}
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Program Studi / Jenjang :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       {{ Auth::guard('mahasiswa')->user()->jurusan }}
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Tahun Akademik
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       {{ Auth::guard('mahasiswa')->user()->tahun }}
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        IPK
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       3.77
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Capaian</h6>
                      <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        
                      </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-bar">
                        <canvas id="myBar"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        </div>
      <!-- End of Main Content -->
@endsection

@section('script')
<script>
 var ctx = document.getElementById("myBar");
var myBar = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["smst 1", "smst 2", "smst 3", "smst 4", "smst 5", "smst 6", "smst 7", "smst 8"],
    datasets: [{

      backgroundColor:[
                'rgba(255, 0, 0, 0.2)',
                'rgba(0, 255, 0, 0.2)',
                'rgba(0, 0, 255, 0.2)',
                'rgba(251, 127, 80, 0.2)',
                'rgba(251, 140, 1, 0.2)',
                'rgba(172, 255, 48, 0.2)',
                'rgba(253, 215, 3, 0.2)',
                'rgba(218, 112, 214, 0.2)',
               
            ],
      hoverBackgroundColor:[
                'rgba(255, 0, 0, 0.2)',
                'rgba(0, 255, 0, 0.2)',
                'rgba(0, 0, 255, 0.2)',
                'rgba(251, 127, 80, 0.2)',
                'rgba(251, 140, 1, 0.2)',
                'rgba(172, 255, 48, 0.2)',
                'rgba(253, 215, 3, 0.2)',
                'rgba(218, 112, 214, 0.2)',
               
            ],
      borderColor: [
                'rgba(255, 0, 0, 0.2)',
                'rgba(0, 255, 0, 0.2)',
                'rgba(0, 0, 255, 0.2)',
                'rgba(251, 127, 80, 0.2)',
                'rgba(251, 140, 1, 0.2)',
                'rgba(172, 255, 48, 0.2)',
                'rgba(253, 215, 3, 0.2)',
                'rgba(218, 112, 214, 0.2)',
               
            ],
      data: [3, 3, 4, 4, 3, 4, 4, 2],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'labels'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 8
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 4,
          maxTicksLimit: 8,
          padding: 10,
          // Include a dollar sign in the ticks
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
  }
});

</script>
@endsection