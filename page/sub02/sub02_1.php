<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub02/sub02_21php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>사업분야</h2>
		<h3 class="mobile_menu" style="letter-spacing:-0.1em;">주요사업안내</h3>
		<ul>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub02/sub02_1.php" style="letter-spacing:-0.1em;">주요사업안내</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_2.php">토목사업</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_3.php">건축사업</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=siljuk">주요실적</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub02/sub02_1.php"; ?>">사업분야</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub02/sub02_1.php" class="red">주요사업안내</a>
			</p>
			<h2 style="letter-spacing:-0.1em;">주요사업안내</h2>
		</div>
		<div class="sub02_1_wrap">
			<div>
				<div style="background:url(<?php echo G5_IMG_URL."/sub02_1_building.jpg"; ?>) no-repeat center top;">
					<div>
						<p>한양종합건설의 건축사업에 대해<br />안내해드립니다.</p>
						<a href="<?php echo G5_URL."/page/sub02/sub02_3.php"; ?>" class="bg_red">분야소개</a><br />
						<a href="<?php echo G5_BBS_URL."/board.php?bo_table=siljuk"; ?>" class="bg_gray">사업실적</a>
					</div>
				</div>
				<a href="<?php echo G5_URL."/page/sub02/sub02_3.php"; ?>" class="text-right">
					<h2><img src="<?php echo G5_IMG_URL."/sub02_1_bhead.png"; ?>" alt="건축" /></h2>
					<h3>BUILDING</h3>
				</a>
			</div>
			<div>
				<div style="background:url(<?php echo G5_IMG_URL."/sub02_1_infras.jpg"; ?>) no-repeat center top;">
					<div>
						<p>한양종합건설의 토목사업에 대해<br />안내해드립니다.</p>
						<a href="<?php echo G5_URL."/page/sub02/sub02_2.php"; ?>" class="bg_red">분야소개</a><br />
						<a href="<?php echo G5_BBS_URL."/board.php?bo_table=siljuk"; ?>" class="bg_gray">사업실적</a>
					</div>
				</div>
				<a href="<?php echo G5_URL."/page/sub02/sub02_2.php"; ?>" class="text-left t_text-right">
					<h2><img src="<?php echo G5_IMG_URL."/sub02_1_ihead.png"; ?>" alt="토목" /></h2>
					<h3>CIVIL Infrastructure</h3>
				</a>
			</div>
		</div>
	</div>
</div>
<?php
	include_once(G5_PATH.'/_tail.php');
?>