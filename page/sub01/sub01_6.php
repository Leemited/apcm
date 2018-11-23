<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>회사소개</h2>
		<h3 class="mobile_menu">오시는길</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_1.php">회사소개</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_2.php">CEO 인사말</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_3.php">VISION</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_4.php">조직도</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_5.php">주요연혁</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php">오시는길</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub01/sub01_1.php"; ?>">회사소개</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php" class="red">오시는길</a>
			</p>
			<h2>오시는길</h2>
		</div>
		<div class="sub01_6_wrap">
			<div id="sub01_6_map"></div>
			<div class="table_02 text-left">
				<table>
					<colgroup>
						<col width="150px" />
						<col width="*" />
					</colgroup>
					<tr>
						<th><img src="<?php echo G5_IMG_URL; ?>/sub01_6_adrr.jpg" alt="ADRESS" /></th>
						<td>충북 청주시 청원구 무심동로 634 (내덕동, 한양빌딩 3층)</td>
					</tr>
					<tr>
						<th><img src="<?php echo G5_IMG_URL; ?>/sub01_6_tel.jpg" alt="TEL" /></th>
						<td>043 - 259 - 0404~6</td>
					</tr>
					<tr>
						<th><img src="<?php echo G5_IMG_URL; ?>/sub01_6_fax.jpg" alt="FAX" /></th>
						<td>043 - 259 - 0407</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOYbSx78wi9WUoX_0cj7-uG6Jy06U4CCk&callback=initMap"></script>
<script>
	function initMap() {
		var myLatLng = {lat: 36.6555673, lng: 127.475887};
		// Create a map object and specify the DOM element for display.
		var map = new google.maps.Map(document.getElementById('sub01_6_map'), {
				center: myLatLng,
				scrollwheel: false,
				zoom:17
		});
		// Create a marker and set its position.
		var marker = new google.maps.Marker({
			map: map,
			position: myLatLng,
			title: 'Hello World!'
		});
	}
</script>
<?php
	include_once(G5_PATH.'/_tail.php');
?>