// Uncomment the next line if you want to use bootstrap, don't forget uncomment jQuery defination in webpack.common.js line 93
import 'bootstrap';
import "slick-carousel";
import $ from 'jquery';
import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
import './search';
import './tabs';
import './scroll';
import './popup';
import './table';
import './slide';
import './dropdown';
import './ajax';

$(function () {
    $(".vi").click(function() {
      $(this).css('outline-color', "lightblue");
      $(this).css('outline-style', "outset");
      $(this).css('padding', '1px');  
    });
    $('body').click(function(){
        $('.vi').css('outline', "none");
        $('.vi').css('padding', "0");
    });
  });