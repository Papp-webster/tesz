$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>100?$("#Btn").fadeIn():$("#Btn").fadeOut()}),$("#Btn").click(function(){return $("html, body").animate({scrollTop:0},100),!1})});
