/*=========================================================================================
    File Name: chart.js
    Description: Chart.js chart
    ----------------------------------------------------------------------------------------
    Item Name: Foxi-Admin - HTML5 Admin Template
    Version: 1.0
    Author: Crazycafe
    Author URL: http://www.themeforest.net/user/crazycafe
==========================================================================================*/

$(function ($) {
  'use strict';
/*====  Line chart for home > chart page =====*/
var chartLine1 = document.getElementById("lineChart2");
var lineChart = new Chart(chartLine1, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
          {
            label: "My First dataset",
            fill: false,
            lineTension: 0.4,
            borderColor: '#4880f3',
            backgroundColor: '#4880f3',
            pointBorderColor: '#fff',
            pointBackgroundColor: '#4880f3',
            pointRadius: 0,
            pointHoverRadius: 5,
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [100, 450, 500, 200, 550, 350, 1000],
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

/*====  Line chart for home > Home =====*/
var chartLine2 = document.getElementById("lineChart3");
var lineCharts = new Chart(chartLine2, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
            {
              label: "My Second dataset",
              fill: true,
              lineTension: 0.4,
              backgroundColor: "rgba(72,128,243,.1)",
              borderColor: "#4880f3",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "#4880f3",
              pointBackgroundColor: "#fff",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "#4880f3",
              pointHoverBorderColor: "#4880f3",
              pointHoverBorderWidth: 2,
              pointRadius: 1,
              pointHitRadius: 10,
              data: [100, 450, 500, 200, 550, 350, 1000],
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

/*====  Start Bar chart > chart js =====*/
var chartPageBar = document.getElementById("ChartPageBar");
Chart.defaults.global.animation.duration = 800;
var barChart = new Chart(chartPageBar, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
      datasets: [
          {
              label: "Unique Visits",
              fill: false,
              lineTension: 0.3,
              backgroundColor: "#4880f3",
              borderColor: "#4880f3",
              pointBorderColor: "#4880f3",
              pointBackgroundColor: "#fff",
              pointHoverBackgroundColor: "#4880f3",
              pointHoverBorderColor: "#4880f3",
              data: [400, 320, 575, 400, 440, 140],
          },
          {
              label: "Page Views",
              fill: false,
              lineTension: 0.3,
              backgroundColor: "#f5f5f5",
              borderColor: "#f5f5f5",
              pointBorderColor: "#f5f5f5",
              pointBackgroundColor: "#fff",
              pointHoverBackgroundColor: "#f5f5f5",
              pointHoverBorderColor: "#f5f5f5",
              data: [300, 280, 500, 650, 540, 280],
          }
      ]
    },
    options: {
      legend: {
        labels: {
          usePointStyle: true
        }
      }
    }
});

/*====  End Bar chart =====*/

/*====  Start Pie chart >  Home =====*/
var chartPies = document.getElementById("chartpie");
Chart.defaults.global.animation.duration = 1800;
var Homepie = new Chart(chartPies, {
  type: 'pie',
  data: {
    labels: ["Unsubscribe", "Open", "Bounce"],
      datasets: [
          {
            label: "Points",
            backgroundColor: ['#4880f3', '#ee8b23', '#344853'],
            borderWidth: [0, 0, 0],
            hoverBorderWidth: [2, 2, 2],
            hoverBorderColor: ['#4880f3', '#ee8b23', '#344853'],
            data: [200, 320, 775]
          }
      ]
    },
    options: {
     legend: {
        labels: {
           usePointStyle: true,
        }
     },
    responsive: true,
    rotation: 580,
    animation:{
      animateScale: true
    }
  }
});
/*====  End Pie chart =====*/

/*====  Start doughnut chart >  Home =====*/
var doughChart = document.getElementById("doughnut");
Chart.defaults.global.animation.duration = 1800;
var doughnut_Chart = new Chart(doughChart, {
  type: 'doughnut',
  data: {
    labels: ["Red", "Green", "Yellow", "Blue", "gray"],
      datasets: [
          {
            label: "Points",
            backgroundColor: ['#cc1d23', '#24cb7b', '#fd8e40', '#4880f3', '#969ecf'],
            borderWidth: [2, 2, 2, 2, 2],
            hoverBorderWidth: [3, 3, 3, 3, 3],
            hoverBorderColor: ['#cc4d23', '#44cb7b', '#fd3e40', '#7880f3', '#969ecf'],
            data: [170, 370, 270, 220, 230]
          }
      ]
    },
    options: {
      cutoutPercentage: 65,
      legend: {
        labels: {
           usePointStyle: true,
        }
     },
    responsive: true,
    rotation: 180,
    animation:{
      animateScale: true
    }
  }
});
/*====  End Pie chart =====*/

});