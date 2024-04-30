/*=========================================================================================
    File Name: dashboard.js
    ----------------------------------------------------------------------------------------
    Item Name: Foxy-Admin - Responsive Admin Template
    Version: 1.0
    Author: Crazycafe
    Author URL: http://www.themeforest.net/user/crazycafe
==========================================================================================*/

$(function ($) {
  'use strict';
/*====  Line chart for home > Home =====*/
var home_line = document.getElementById("lineChart");
var lineChart = new Chart(home_line, {
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
      // labels: "right",
        legend: {
            display: true
        },
      // showLines: false,
      scales: {
        yAxes: [{
          ticks: {
            // reverse: true,
            beginAtZero: true
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

/*====  Start Bar chart > Home =====*/
var homeBar = document.getElementById("barChart");
var barChart = new Chart(homeBar, {
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
              data: [800, 320, 875, 700, 1440, 140, 900, 1000, 1110, 1200, 1300, 1400, 1500, 1600],
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
              data: [700, 280, 1000, 850, 840, 280, 700, 900, 1000, 1110, 1200, 1300, 1400, 1500],
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
var homepieChart = document.getElementById("Homepie");
Chart.defaults.global.animation.duration = 1800;
var homepie = new Chart(homepieChart, {
  type: 'pie',
  data: {
    labels: ["Usa", "Uk", "Gm"],
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

});