$(document).ready(function(){$("img").on("click",function(){var a=$(this).attr("src");$("#myModal").on("show.bs.modal",function(){$(".pic").attr("src",a)})})});
