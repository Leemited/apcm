<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub01/sub01_4.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>회사소개</h2>
		<h3 class="mobile_menu">조직도</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_1.php">회사소개</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_2.php">CEO 인사말</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_3.php">VISION</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub01/sub01_4.php">조직도</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_5.php">주요연혁</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php">찾아오시는길</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub01/sub01_1.php"; ?>">회사소개</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub01/sub01_4.php" class="red">조직도</a>
			</p>
			<h2>조직도</h2>
		</div>
		<div class="sub01_4_wrap" style="margin-top:-30px;">
			<ul>
				<li rel="sub01_bonsa" class="active text-center">본사기구조직도</li>
				<li rel="sub01_heonjang" class="text-center">현장기구조직도</li>
			</ul>
			<div class="tab_content" id="sub01_bonsa">
				<h2><img src="<?php echo G5_IMG_URL?>/sub01_bonsa_head.png" alt="(주)한양종합건설의 본사 조직구성현황입니다." /></h2>
				<div><img src="<?php echo G5_IMG_URL?>/sub01_bonsa.jpg" alt="본사기구조직도" /></div>
			</div>
			<div class="tab_content" id="sub01_heonjang">
				<h2><img src="<?php echo G5_IMG_URL?>/sub01_heonjang_head.png" alt="(주)한양종합건설의 현장 조직구성현황입니다." /></h2>
				<div><img src="<?php echo G5_IMG_URL?>/sub01_heonjang.jpg" alt="현장기구조직도" /></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
		$(".tab_content").hide();
		$(".tab_content:first").show();
		$(".sub01_4_wrap ul li").click(function () {
			$(".sub01_4_wrap ul li").removeClass("active");
			//$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
			$(this).addClass("active");
			$(".tab_content").hide()
			var activeTab = $(this).attr("rel");
			$("#" + activeTab).fadeIn();
		});
	});
</script>
<?php
	include_once(G5_PATH.'/_tail.php');
?>