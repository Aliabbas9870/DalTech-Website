//[Vector map Js]

//Project:  Foxi-Admin - HTML5 Admin Template

$(function ($) {
  'use strict';

/*====  Config map for > vector map =====*/
  // jvectormap data
    var visitorsData = {
      US: 398, // USA
      SA: 400, // Saudi Arabia
      CA: 1000, // Canada
      DE: 500, // Germany
      FR: 760, // France
      CN: 300, // China
      AU: 700, // Australia
      BR: 600, // Brazil
      IN: 800, // India
      GB: 320, // Great Britain
      RU: 3000 // Russia
    };
    // World map by jvectormap
        $('#world-map').vectorMap({
          map              : 'world_mill_en',
          backgroundColor  : 'transparent',
          zoomOnScroll: false,
          regionStyle      : {
            initial: {
              fill            : '#828282',
              'fill-opacity'  : 0.7,
              stroke          : 'none',
              'stroke-width'  : 0,
              'stroke-opacity': 0
            }
          },
          series           : {
            regions: [
              {
                values           : visitorsData,
                scale            : ['#828282'],
                normalizeFunction: 'polynomial'
              }
            ]
          }
        });
    /*====  End map =====*/

    // World map by jvectormap
        $('#world-map2').vectorMap({
          map              : 'world_mill_en',
          backgroundColor  : 'transparent',
          zoomOnScroll: false,
          regionStyle      : {
            initial: {
              fill            : '#2092cd',
              'fill-opacity'  : 0.9,
              stroke          : 'none',
              'stroke-width'  : 0,
              'stroke-opacity': 0
            }
          },
          series           : {
            regions: [
              {
                values           : visitorsData,
                scale            : ['#2092cd'],
                normalizeFunction: 'polynomial'
              }
            ]
          }
        });
    /*====  End map =====*/   
    // World map by jvectormap
        $('#world-map3').vectorMap({
          map              : 'world_mill_en',
          backgroundColor  : 'transparent',
          zoomOnScroll: false,
          regionStyle      : {
            initial: {
              fill            : '#000000',
              'fill-opacity'  : .9,
              stroke          : 'none',
              'stroke-width'  : 0,
              'stroke-opacity': 0
            }
          },
          series           : {
            regions: [
              {
                values           : visitorsData,
                scale            : ['#000000'],
                normalizeFunction: 'polynomial'
              }
            ]
          }
        });
    /*====  End map =====*/



});