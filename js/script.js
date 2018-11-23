$(document).ready(function(){
	$(".table_03 table tr th:last-child,.table_03 table tr td:last-child").css("border-right","0");
	$(".sub03_1_wrap ul li:nth-child(4n)").css("margin-right","0");
});
$('.mobile_menu').die('click').live('click', function () {
	var ul = $("#sub_left ul");
	ul.slideToggle();
});