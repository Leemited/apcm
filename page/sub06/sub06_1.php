<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub06/sub06_1.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>인재채용</h2>
		<h3 class="mobile_menu">인재상</h3>
		<ul>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub06/sub06_1.php">인재상</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub06/sub06_2.php">채용안내</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=wanted">채용공고</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=job_faq">채용 FAQ</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title" style="margin-bottom:85px;">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub06/sub06_1.php"; ?>">인재채용</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub06/sub06_1.php" class="red">인재상</a>
			</p>
			<h2>인재상</h2>
		</div>
		<div>
			<img src="<?php echo G5_IMG_URL."/sub06_1_img.jpg"; ?>" alt="인재상" />
		</div>
	</div>
</div>
<?php
	include_once(G5_PATH.'/_tail.php');
?>