<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/ccl.css">

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript" language="javascript" src="https://jsme-editor.github.io/dist/jsme/jsme.nocache.js"></script>

    <script type="text/javascript" src="data5.js"></script>

</head>

<body>

<?php $path = $_SERVER['DOCUMENT_ROOT']; include_once($path."/header.html"); ?>

<div class="container">
    <h1 class="text-center" style="font-variant: small-caps;">Truce-Smiles - Statistics</h1>
    <br />
      <div class="row">
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Molecular weight</div></p>
                <canvas id="chart_MW"></canvas>
              </div>
          </div>
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">cLogP</div></p>
                <canvas id="chart_cLogP"></canvas>
              </div>
          </div>
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Heavy atom count</div></p>
                <canvas id="chart_HAC"></canvas>
              </div>
          </div>
      </div>
      
      <div class="row"> 
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Hydrogen bond acceptors</div></p>
                <canvas id="chart_HBA"></canvas>
              </div>
          </div>
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Hydrogen bond donors</div></p>
                <canvas id="chart_HBD"></canvas>
              </div>
          </div>
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Rotatable bonds</div></p>
                <canvas id="chart_ROTB"></canvas>
              </div>
          </div>
      </div>
      <div class="row"> 
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Polar surface area</div></p>
                <canvas id="chart_TPSA"></canvas>
              </div>
          </div>
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">Fraction of sp3 carbons</div></p>
                <canvas id="chart_FSP3"></canvas>
              </div>
          </div>
          <div class="col-4 stats-col">
              <div class="border stats">
                <p><div class="text-center h5">QED score</div></p>
                <canvas id="chart_QED"></canvas>
              </div>
          </div>
      </div>
  </div>

<script>

const alpha = "0.7";
const color1 = "rgba(217, 50, 94, " + alpha + ")";  
const color2 = "rgba(99, 121, 242, " + alpha + ")";
const color3 = "rgba(242, 180, 64, " + alpha + ")";
const color4 = "rgba(27, 191, 161, " + alpha + ")";
const color5 = "rgba(68, 56, 80 , " + alpha + ")";
const color6 = "rgba(238, 129, 167, " + alpha + ")";

////////////////////////////////////////////////////////////////////

const data_hac = hac_x.map((k, i) => ({x: k, y: hac_y_R5[i]}));
const data_clogP = clogp_x.map((k, i) => ({x: k, y: clogp_y_R5[i]}));
const data_mw = mw_x.map((k, i) => ({x: k, y: mw_y_R5[i]}));
const data_hba = hba_x.map((k, i) => ({x: k, y: hba_y_R5[i]}));
const data_hbd = hbd_x.map((k, i) => ({x: k, y: hbd_y_R5[i]}));

const data_rotb = rotb_x.map((k, i) => ({x: k, y: rotb_y_R5[i]}));
const data_tpsa = tpsa_x.map((k, i) => ({x: k, y: tpsa_y_R5[i]}));
const data_fsp3 = fsp3_x.map((k, i) => ({x: k, y: fsp3_y_R5[i]}));
const data_qed = qed_x.map((k, i) => ({x: k, y: qed_y_R5[i]}));

////////////////////////////////////////////////////////////////////

const chart_MW = document.getElementById('chart_MW');
const chart_cLogP = document.getElementById('chart_cLogP');

const chart_HAC = document.getElementById('chart_HAC');
const chart_HBA = document.getElementById('chart_HBA');
const chart_HBD = document.getElementById('chart_HBD');

const chart_ROTB = document.getElementById('chart_ROTB');
const chart_TPSA = document.getElementById('chart_TPSA');
const chart_FSP3 = document.getElementById('chart_FSP3');
const chart_QED = document.getElementById('chart_QED');

////////////////////////////////////////////////////////////////////

const chart_MW_chartjs = new Chart(chart_MW, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_mw,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: 0,
              max: 500,
              grid: {offset: false},
              ticks: {stepSize: 20},
              title: {display: true, text: 'Molecular weight (Da)', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,},
        tooltip: {
          callbacks: {
            title: (items) => {
              if (!items.length) {
                return '';
              }
              const item = items[0];
              const x = item.parsed.x;
              const min = x-5;
              const max = x+5;
              return `${min} - ${max}`;
            }
          }
        }
      }
  }
});

/////

const chart_cLogP_chartjs = new Chart(chart_cLogP, {
  type: 'bar',
  
  data: {
      datasets: [{
          label: 'Count',
          data: data_clogP,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: -3,
              max:5,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'cLogP', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,},
        tooltip: {
          callbacks: {
            title: (items) => {
              if (!items.length) {
                return '';
              }
              const item = items[0];
              const x = item.parsed.x;
              const min = (x*10 - 1)/10;
              const max = (x*10 + 1)/10;
              return `${min} - ${max}`;
            }
          }
        }
      }
  }
});

/////

const chart_HAC_chartjs = new Chart(chart_HAC, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_hac,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
      aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: 0,
              max: 40,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'Heavy atom count', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

/////

const chart_HBA_chartjs = new Chart(chart_HBA, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_hba,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: -1,
              max: 11,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'Hydrogen bond acceptors', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

/////

const chart_HBD_chartjs = new Chart(chart_HBD, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_hbd,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: -1,
              max: 6,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'Hydrogen bond donors', font: {size: 14}}
          }, 
          y: {
            // type: 'logarithmic',
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

/////

const chart_ROTB_chartjs = new Chart(chart_ROTB, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_rotb,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: -1,
              max: 11,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'Rotatable bonds', font: {size: 14}}
          }, 
          y: {
            // type: 'logarithmic',
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

/////

const chart_TPSA_chartjs = new Chart(chart_TPSA, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_tpsa,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: 0,
              max: 145,
              grid: {offset: false},
              ticks: {stepSize: 10},
              title: {display: true, text: 'Total Polar Surface Area (A2)', font: {size: 14}}
          }, 
          y: {
            // type: 'logarithmic',
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

/////

const chart_FSP3_chartjs = new Chart(chart_FSP3, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_fsp3,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: 0,
              max: 1,
              grid: {offset: false},
              ticks: {stepSize: 0.1},
              title: {display: true, text: 'Fraction of sp3 carbons', font: {size: 14}}
          }, 
          y: {
            // type: 'logarithmic',
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

/////

const chart_QED_chartjs = new Chart(chart_QED, {
  type: 'bar',
  data: {
      datasets: [{
          label: 'Count',
          data: data_qed,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      }]
  },
  options: {
    aspectRatio:1.3,
      scales: {
          x: {
              type: 'linear',
              offset: false,
              min: 0,
              max: 1,
              grid: {offset: false},
              ticks: {stepSize: 0.1},
              title: {display: true, text: 'QED score', font: {size: 14}}
          }, 
          y: {
            // type: 'logarithmic',
              title: {display: true,text: 'Number of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: false,}
      }
  }
});

</script>

</body>
