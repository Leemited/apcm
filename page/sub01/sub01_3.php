<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub01/sub01_3.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>회사소개</h2>
		<h3 class="mobile_menu">VISION</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_1.php">회사소개</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_2.php">CEO 인사말</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub01/sub01_3.php">VISION</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_4.php">조직도</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_5.php">주요연혁</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php">찾아오시는길</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub01/sub01_1.php"; ?>">회사소개</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub01/sub01_3.php" class="red">VISION</a>
			</p>
			<h2>VISION</h2>
		</div>
		<div class="sub01_3_wrap">
			<div class="grid_100 bdb bdt bg_whiteline">
				<div class="grid_33 pl25 pr25 pt40 pb40 p_bdb p_grid_100">
					<h2 class="lst_head01">CORE<br />VALUE<br /><span>핵심가치</span></h2>
				</div>
				<div class="grid_66 p_grid_100 text-center pl25 pr25 pt40 pb40 bg_white bdl_dash p_bdn">
					<img src="<?php echo G5_IMG_URL; ?>/sub01_3_img1.png" alt="VISION" />
				</div>
			</div>
			<div class="grid_100 bdb p_grid_100 bg_whiteline">
				<div class="grid_33 pl25 pr25 pt40 pb40 p_bdb p_grid_100">
					<h2 class="lst_head01">VISON<br /><span>미래상</span></h2>
				</div>
				<div class="grid_66 pl25 pr25 pt40 pb40 p_grid_100 bg_white bdl_dash p_bdn">
					<div class="text-center mt20 mb30">
						<img src="<?php echo G5_IMG_URL; ?>/sub01_3_img2.png" alt="VISION" />
					</div>
					<div class="text-left pl30">
						<div class="mt20">
							<h3 class="font_size24 mb10">기술력확보</h3>
							<p>지속적 투자를 통한  첨단 기술력 확보<br />신기술 도입을 위한  끊임없는 노력으로 대한민국 건설업을 선도</p>
						</div>
						<div class="mt20">
							<h3 class="font_size24 mb10">인재중심</h3>
							<p>(주)한양종합건설의 핵심가치를 기반으로<br />미래지향적이고  유능한 기술인재  육성</p>
						</div>
						<div class="mt20">
							<h3 class="font_size24 mb10">사회공헌</h3>
							<p>국가의 발전과 지역경제 활성화를 위한 사회공헌 이바지</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include_once(G5_PATH.'/_tail.php');
?>