
/*=========================================================================================
    File Name: custom-theme.js
    Description: change theme color and background..
    ----------------------------------------------------------------------------------------
    Item Name: Foxi-Admin - HTML5 Admin Template
    Version: 1.0
    Author: Crazycafe
    Author URL: http://www.themeforest.net/user/crazycafe
==========================================================================================*/
(function ($) {
"use strict";
    
jQuery(document).ready(function($) {

      // variable for body class
      var bodyActive = $('body');

      var menuCollapsed = $('.custom-theme .slider');
        menuCollapsed.on('click', function() {
           bodyActive.toggleClass('bg_none');
        });

      var expantTheme = $('.theme-icon');
        expantTheme.on('click', function() {
            bodyActive.toggleClass('expantTheme');
        });

        // Navigation background change
			$(".theme_img1").on('click', function(){
               bodyActive.addClass('theme_bg1').removeClass('theme_bg2 theme_bg3'); 
            });
            
         $(".theme_img2").on('click', function(){
               bodyActive.addClass('theme_bg2').removeClass('theme_bg1 theme_bg3'); 
            });       

      $(".theme_img3").on('click', function(){
               bodyActive.addClass('theme_bg3').removeClass('theme_bg1 theme_bg2'); 
            });

      // Navigation background color change
		  $(".color_green").on('click', function(){
               bodyActive.addClass('color1').removeClass('color2 color3 color4'); 
            });

     $(".color_blue").on('click', function(){
               bodyActive.addClass('color2').removeClass('color1 color3 color4'); 
            });

	   $(".color_black").on('click', function(){
              bodyActive.addClass('color4').removeClass('color1 color2 color3'); 
            });

});

 }(jQuery));