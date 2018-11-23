<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub02/sub02_2.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>사업분야</h2>
		<h3 class="mobile_menu">토목사업</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_1.php">주요사업안내</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub02/sub02_2.php">토목사업</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_3.php">건축사업</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=siljuk">주요실적</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub02/sub02_1.php"; ?>">사업분야</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub02/sub02_2.php" class="red">토목사업</a>
			</p>
			<h2>토목사업</h2>
		</div>
		<div class="sub02_2_wrap">
			<img src="<?php echo G5_IMG_URL."/sub02_1_infras.jpg"; ?>" alt="" />
			<div>
				<div class="sub02_2_left grid_50 p_grid_100">
					<h2><img src="<?php echo G5_IMG_URL."/sub02_1_ihead.png"; ?>" alt="토목" /></h2>
					<h3>CIVIL Infrastructure</h3>
					<h4>우수한 시공기술과 역량으로 <br /><span class="red text-bold">대한민국의 국토발전</span>에 기여합니다.</h4>
				</div>
				<div class="sub02_2_right grid_50 p_grid_100">
					<div>
						<p>(주)한양종합건설은 오랜기간 축적된 경험과 혁신기술을 바탕으로 최고의 품질,하자없는 완벽한 시공과 무재해현장을 실현해왔습니다.<br />도로,교량,수처리 산업 등 각 분야에 걸친 토목공사를 수행하며 국토발전을 이루어 더욱 아름다운 대한민국을 만들기위해 끊임없이 노력하겠습니다.</p>
						<a href="<?php echo G5_BBS_URL."/board.php?bo_table=siljuk"; ?>">▶&nbsp;&nbsp;주요사업실적 보러가기</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include_once(G5_PATH.'/_tail.php');
?>