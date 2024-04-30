
/*=========================================================================================
    File Name: Flot.js
    Description: Chart.js Flot chart
    ----------------------------------------------------------------------------------------
    Item Name: Foxi - Responsive Admin Template
    Version: 1.0
    Author: Crazycafe
    Author URL: http://www.themeforest.net/user/crazycafe
==========================================================================================*/

$(function ($) {
  'use strict';

/*====  Start Bar chart > chart js =====*/
var ctx = document.getElementById("bar2");
var data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: "Unique Visits",
        fill: true,
        backgroundColor: "#4880f3",
        borderColor: "#4880f3",
        pointBorderColor: "#4880f3",
        pointBackgroundColor: "#fff",
        pointHoverBackgroundColor: "#4880f3",
        barBorderRadius: 10,
        pointHoverBorderColor: "#4880f3",
        data: [500, 350, 900, 770, 1000, 600, 250, 700, 360, 550, 480, 970]
    }]
};

var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }],
            xAxes: [{
                // Change here
              barPercentage: 0.2
            }]
        }
    }
});
/*====  End Bar chart =====*/

/*====  Line chart for home > Home =====*/
var liNe_flot = document.getElementById("flotChart_line");
var lineChart = new Chart(liNe_flot, {
  type: 'line',
  data: {
    labels: ["Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri"],
      datasets: [
          {
              label: "My First dataset",
              textAlign: 'right',
              fill: false,
              lineTension: 0.4,
              fill: false,
              borderColor: '#67bd34',
              backgroundColor: '#67bd34',
              pointBorderColor: '#fff',
              pointBackgroundColor: '#67bd34',
              pointRadius: 5,
              pointHoverRadius: 5,
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: [1000, 3000, 3200, 1000, 4000, 3500, 1000, 2200, 3000, 4500, 2000, 1000],
            },
          {
              label: "My Second dataset",
              fill: false,
              lineTension: 0.4,
              borderColor: '#4880f3',
              backgroundColor: '#4880f3',
              pointBorderColor: '#fff',
              pointBackgroundColor: '#4880f3',
              pointRadius: 5,
              pointHoverRadius: 5,
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: [2000, 3600, 1500, 4000, 2500, 2000, 5000, 3500, 3000, 2500, 2000, 4000],
          }
      ]
    },
    options: {
      // showLines: false,
      scales: {
        yAxes: [{
          ticks: {
            // reverse: true,
            beginAtZero: true,
            legend: {
              position: 'right',
            }
          }
        }]
      },
      responsive: true,
        animation:{
        animateScale: true
      }
    },
});
/*====  End line chart =====*/

/*====  Line chart for home > Home =====*/
var liNeFill = document.getElementById("flotChart_fill");
var line_Fills = new Chart(liNeFill, {
  type: 'line',
  data: {
    labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
      datasets: [
          {
            label: "Series One",
            lineTension: 0.5,
            fill: true,
            borderColor: "rgba(102,189,51,.0)",
            backgroundColor: "rgba(102,189,51,.6)",
            pointBorderColor: '#66bd33',
            pointBackgroundColor: "rgba(102,189,51,.5)",
            pointRadius: 0,
            pointHoverRadius: 7,
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [100, 400, 200, 370, 190, 350, 200, 500, 600],
          },
          {
            label: "Series Two",
            fill: true,
            lineTension: 0.5,
            borderColor: "rgba(178,201,250,.0)",
            backgroundColor: "rgba(178,201,250,.7)",
            pointBorderColor: '#4880f3',
            pointBackgroundColor: "rgba(178,201,250,.5)",
            pointRadius: 0,
            pointHoverRadius: 7,
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [100, 250, 360, 170, 390, 220, 200, 600, 600],
          }
      ]
    },
    options: {
      // showLines: false,
      scales: {
        yAxes: [{
          ticks: {
            // reverse: true,
            beginAtZero: false,
            legend: {
              position: 'right',
            }
          }
        }]
      },
      responsive: true,
        animation:{
        animateScale: true
      }
    },
});
/*====  End line chart =====*/

/*====  Start doughnut chart >  Home =====*/
   //Get the context of the Chart canvas element we want to select
    var ctx = $("#polar-chart");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
        legend: {
            position: 'top',
        },
        title: {
            display: false,
            text: 'Chart.js Polar Area Chart'
        },
        scale: {
          ticks: {
            beginAtZero: true
          },
          reverse: false
        },
        animation: {
            animateRotate: false
        }
    };

    // Chart Data
    var chartData = {
        labels: ["Best sales", "Standard Plans", "Services", "Begining", "Others"],
        datasets: [{
            data: [85, 59, 50, 76, 36],
            backgroundColor: [
                '#4880f3', '#66bd33', '#efdc35','#FF4558', '#28D094'
            ],
            label: 'My dataset' // for legend
        }],
    };

    var config = {
        type: 'polarArea',

        // Chart Options
        options : chartOptions,

        data : chartData
    };
    // Create the chart
    var polarChart = new Chart(ctx, config);


/*====  start radar chart =====*/
    var ctx = $("#radar-chart");
    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
        legend: {
            position: 'top',
        },
        // title: {
        //     display: true,
        //     text: 'Chart.js Radar Chart'
        // },
        scale: {
          reverse: false,
          ticks: {
            beginAtZero: true
          }
        }
    };
    // Chart Data
    var chartData = {
        labels: ["Google plus", "Facebook", "Behance", "Linkdin", "Drbbble", "Twitter", "Coding"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: "rgba(245,0,87,.3)",
            borderColor: "transparent",
            pointBorderColor: "#F50057",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
            data: [65, 59, 80, 81, 56, 55, 40],
        }, {
            label: 'Hidden dataset',
            hidden: true,
            data: [45, 25, 16, 36, 67, 18, 76],
        }, {
            label: "My Second dataset",
            backgroundColor: "rgba(29,233,182,.6)",
            borderColor: "transparent",
            pointBorderColor: "#1DE9B6",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
            data: [28, 48, 40, 19, 86, 27, 78],
        },]
    };
    var config = {
        type: 'radar',

        // Chart Options
        options : chartOptions,

        data : chartData
    };
    // Create the chart
    var polarChart = new Chart(ctx, config);

});