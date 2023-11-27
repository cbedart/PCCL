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

    <script type="text/javascript" src="data.js"></script>

</head>

<body>

<?php $path = $_SERVER['DOCUMENT_ROOT']; include_once($path."/header.html"); ?>

<div class="container">
    <h1 class="text-center" style="font-variant: small-caps;">Global statistics</h1>
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

const data_hac_R1 = hac_x.map((k, i) => ({x: k, y: hac_y_R1[i]}));
const data_clogP_R1 = clogp_x.map((k, i) => ({x: k, y: clogp_y_R1[i]}));
const data_mw_R1 = mw_x.map((k, i) => ({x: k, y: mw_y_R1[i]}));
const data_hba_R1 = hba_x.map((k, i) => ({x: k, y: hba_y_R1[i]}));
const data_hbd_R1 = hbd_x.map((k, i) => ({x: k, y: hbd_y_R1[i]}));
const data_rotb_R1 = hbd_x.map((k, i) => ({x: k, y: rotb_y_R1[i]}));
const data_tpsa_R1 = hbd_x.map((k, i) => ({x: k, y: tpsa_y_R1[i]}));
const data_fsp3_R1 = hbd_x.map((k, i) => ({x: k, y: fsp3_y_R1[i]}));
const data_qed_R1 = hbd_x.map((k, i) => ({x: k, y: qed_y_R1[i]}));

/////

const data_hac_R2 = hac_x.map((k, i) => ({x: k, y: hac_y_R2[i]}));
const data_clogP_R2 = clogp_x.map((k, i) => ({x: k, y: clogp_y_R2[i]}));
const data_mw_R2 = mw_x.map((k, i) => ({x: k, y: mw_y_R2[i]}));
const data_hba_R2 = hba_x.map((k, i) => ({x: k, y: hba_y_R2[i]}));
const data_hbd_R2 = hbd_x.map((k, i) => ({x: k, y: hbd_y_R2[i]}));
const data_rotb_R2 = hbd_x.map((k, i) => ({x: k, y: rotb_y_R2[i]}));
const data_tpsa_R2 = hbd_x.map((k, i) => ({x: k, y: tpsa_y_R2[i]}));
const data_fsp3_R2 = hbd_x.map((k, i) => ({x: k, y: fsp3_y_R2[i]}));
const data_qed_R2 = hbd_x.map((k, i) => ({x: k, y: qed_y_R2[i]}));

/////

const data_hac_R4 = hac_x.map((k, i) => ({x: k, y: hac_y_R4[i]}));
const data_clogP_R4 = clogp_x.map((k, i) => ({x: k, y: clogp_y_R4[i]}));
const data_mw_R4 = mw_x.map((k, i) => ({x: k, y: mw_y_R4[i]}));
const data_hba_R4 = hba_x.map((k, i) => ({x: k, y: hba_y_R4[i]}));
const data_hbd_R4 = hbd_x.map((k, i) => ({x: k, y: hbd_y_R4[i]}));
const data_rotb_R4 = hbd_x.map((k, i) => ({x: k, y: rotb_y_R4[i]}));
const data_tpsa_R4 = hbd_x.map((k, i) => ({x: k, y: tpsa_y_R4[i]}));
const data_fsp3_R4 = hbd_x.map((k, i) => ({x: k, y: fsp3_y_R4[i]}));
const data_qed_R4 = hbd_x.map((k, i) => ({x: k, y: qed_y_R4[i]}));

/////

const data_hac_R5 = hac_x.map((k, i) => ({x: k, y: hac_y_R5[i]}));
const data_clogP_R5 = clogp_x.map((k, i) => ({x: k, y: clogp_y_R5[i]}));
const data_mw_R5 = mw_x.map((k, i) => ({x: k, y: mw_y_R5[i]}));
const data_hba_R5 = hba_x.map((k, i) => ({x: k, y: hba_y_R5[i]}));
const data_hbd_R5 = hbd_x.map((k, i) => ({x: k, y: hbd_y_R5[i]}));
const data_rotb_R5 = hbd_x.map((k, i) => ({x: k, y: rotb_y_R5[i]}));
const data_tpsa_R5 = hbd_x.map((k, i) => ({x: k, y: tpsa_y_R5[i]}));
const data_fsp3_R5 = hbd_x.map((k, i) => ({x: k, y: fsp3_y_R5[i]}));
const data_qed_R5 = hbd_x.map((k, i) => ({x: k, y: qed_y_R5[i]}));

/////

const data_hac_R6 = hac_x.map((k, i) => ({x: k, y: hac_y_R6[i]}));
const data_clogP_R6 = clogp_x.map((k, i) => ({x: k, y: clogp_y_R6[i]}));
const data_mw_R6 = mw_x.map((k, i) => ({x: k, y: mw_y_R6[i]}));
const data_hba_R6 = hba_x.map((k, i) => ({x: k, y: hba_y_R6[i]}));
const data_hbd_R6 = hbd_x.map((k, i) => ({x: k, y: hbd_y_R6[i]}));
const data_rotb_R6 = hbd_x.map((k, i) => ({x: k, y: rotb_y_R6[i]}));
const data_tpsa_R6 = hbd_x.map((k, i) => ({x: k, y: tpsa_y_R6[i]}));
const data_fsp3_R6 = hbd_x.map((k, i) => ({x: k, y: fsp3_y_R6[i]}));
const data_qed_R6 = hbd_x.map((k, i) => ({x: k, y: qed_y_R6[i]}));

/////

const data_hac_R8 = hac_x.map((k, i) => ({x: k, y: hac_y_R8[i]}));
const data_clogP_R8 = clogp_x.map((k, i) => ({x: k, y: clogp_y_R8[i]}));
const data_mw_R8 = mw_x.map((k, i) => ({x: k, y: mw_y_R8[i]}));
const data_hba_R8 = hba_x.map((k, i) => ({x: k, y: hba_y_R8[i]}));
const data_hbd_R8 = hbd_x.map((k, i) => ({x: k, y: hbd_y_R8[i]}));
const data_rotb_R8 = hbd_x.map((k, i) => ({x: k, y: rotb_y_R8[i]}));
const data_tpsa_R8 = hbd_x.map((k, i) => ({x: k, y: tpsa_y_R8[i]}));
const data_fsp3_R8 = hbd_x.map((k, i) => ({x: k, y: fsp3_y_R8[i]}));
const data_qed_R8 = hbd_x.map((k, i) => ({x: k, y: qed_y_R8[i]}));

////////////////////////////////////////////////////////////////////

const chart_MW = document.getElementById('chart_MW');
const chart_cLogP = document.getElementById('chart_cLogP');

const chart_HAC = document.getElementById('chart_HAC');
const chart_HBA = document.getElementById('chart_HBA');
const chart_HBD = document.getElementById('chart_HBD');

////////////////////////////////////////////////////////////////////

const chart_MW_chartjs = new Chart(chart_MW, {
  type: 'bar',
  data: {
     labels: mw_x,
      datasets: [{
          label: 'Imides',
          data: mw_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: mw_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: mw_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: mw_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: mw_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: mw_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
              type: 'linear',
              offset: false,
              min: 0,
              max: 500,
              grid: {offset: false},
              ticks: {stepSize: 20},
              title: {display: true, text: 'Molecular weight (Da)', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,},
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
     labels: clogp_x,
      datasets: [{
          label: 'Imides',
          data: clogp_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: clogp_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: clogp_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: clogp_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: clogp_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: clogp_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
              type: 'linear',
              offset: false,
              min: -3,
              max:5,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'cLogP', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,},
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
     labels: hac_x,
      datasets: [{
          label: 'Imides',
          data: hac_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: hac_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: hac_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: hac_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: hac_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: hac_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
              type: 'linear',
              offset: false,
              min: 0,
              max: 40,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'Heavy atom count', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

/////

const chart_HBA_chartjs = new Chart(chart_HBA, {
  type: 'bar',
  data: {
     labels: hba_x,
      datasets: [{
          label: 'Imides',
          data: hba_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: hba_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: hba_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: hba_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: hba_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: hba_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
              type: 'linear',
              offset: false,
              min: -1,
              max: 11,
              grid: {offset: false},
              ticks: {stepSize: 1},
              title: {display: true, text: 'Hydrogen bond acceptors', font: {size: 14}}
          }, 
          y: {
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

/////

const chart_HBD_chartjs = new Chart(chart_HBD, {
  type: 'bar',
  data: {
     labels: hbd_x,
      datasets: [{
          label: 'Imides',
          data: hbd_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: hbd_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: hbd_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: hbd_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: hbd_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: hbd_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
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
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

/////

const chart_ROTB_chartjs = new Chart(chart_ROTB, {
  type: 'bar',
  data: {
     labels: rotb_x,
      datasets: [{
          label: 'Imides',
          data: rotb_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: rotb_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: rotb_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: rotb_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: rotb_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: rotb_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
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
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

/////

const chart_TPSA_chartjs = new Chart(chart_TPSA, {
  type: 'bar',
  data: {
     labels: tpsa_x,
      datasets: [{
          label: 'Imides',
          data: tpsa_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: tpsa_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: tpsa_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: tpsa_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: tpsa_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: tpsa_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
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
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

/////

const chart_FSP3_chartjs = new Chart(chart_FSP3, {
  type: 'bar',
  data: {
     labels: fsp3_x,
      datasets: [{
          label: 'Imides',
          data: fsp3_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: fsp3_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: fsp3_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: fsp3_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: fsp3_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: fsp3_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
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
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

/////

const chart_QED_chartjs = new Chart(chart_QED, {
  type: 'bar',
  data: {
     labels: qed_x,
      datasets: [{
          label: 'Imides',
          data: qed_y_R1,
          backgroundColor: color1,
          borderColor: color1,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminothiatriazoles',
          data: qed_y_R2,
          backgroundColor: color2,
          borderColor: color2,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Aminotetrazoles',
          data: qed_y_R4,
          backgroundColor: color3,
          borderColor: color3,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: 'Truce-Smiles',
          data: qed_y_R5,
          backgroundColor: color4,
          borderColor: color4,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[2+2]-cycloaddition',
          data: qed_y_R6,
          backgroundColor: color5,
          borderColor: color5,
          borderWidth: 1,
          barPercentage: 1,
          categoryPercentage: 1,
          borderRadius: 5,
      },
      {
          label: '[4+2]-cycloaddition',
          data: qed_y_R8,
          backgroundColor: color6,
          borderColor: color6,
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
              stacked:true,
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
              title: {display: true,text: 'Percentage of compounds',font: {size: 14}}
          }
      },
      plugins: {
        legend: {display: true,}
      }
  }
});

</script>


</body>
