<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub02/sub02_3.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>사업분야</h2>
		<h3 class="mobile_menu">건축사업</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_1.php">주요사업안내</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_2.php">토목사업</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub02/sub02_3.php">건축사업</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=siljuk">주요실적</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub02/sub02_1.php"; ?>">사업분야</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub02/sub02_2.php" class="red">건축사업</a>
			</p>
			<h2>건축사업</h2>
		</div>
		<div class="sub02_2_wrap">
			<img src="<?php echo G5_IMG_URL."/sub02_1_building.jpg"; ?>" alt="" />
			<div>
				<div class="sub02_2_left grid_50 p_grid_100">
					<h2><img src="<?php echo G5_IMG_URL."/sub02_1_bhead.png"; ?>" alt="건축" /></h2>
					<h3>BUILDING</h3>
					<h4 style="letter-spacing:-0.12em;">오랜기간 쌓아온 월등한 노하우로<br /><span class="red text-bold">고품격 주거공간문화 창조</span>에 앞장섭니다.</h4>
				</div>
				<div class="sub02_2_right grid_50 p_grid_100">
					<div>
						<p>(주)한양종합건설은  최고의 기술을 갖춘 인재와<br />기술역량을 보유하고 이를 토대로<br />관공서,학교,공장,법무연수원등의 다양한 용도의 <br />건물을 건설하며 보다 효율적이고 쾌적한 <br />공간창조를 위해 노력하고 있습니다.</p>
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