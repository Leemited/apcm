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
		<h3 class="mobile_menu">인재채용</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub06/sub06_1.php">인재상</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub06/sub06_2.php">채용안내</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=wanted">채용공고</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=job_faq">채용 FAQ</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title" style="margin-bottom:70px;">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub06/sub06_1.php"; ?>">인재채용</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub06/sub06_2.php" class="red">채용안내</a>
			</p>
			<h2>인재상</h2>
		</div>
		<div class="sub06_2_wrap">
			<div>
				<img src="<?php echo G5_IMG_URL."/sub06_2_head.jpg"; ?>" alt="입사지원에서 입사까지의 채용절차를 안내해드립니다." />
			</div>
			<div class="bd_gray mt30">
				<img src="<?php echo G5_IMG_URL."/sub06_2_img.jpg"; ?>" alt="채용안내" />
			</div>
			<div style="margin-top:60px;">
				<ul>
					<li>
						<h3 class="red">STEP01.</h3>
						<h3>입사지원</h3>
						<p>직무수행에 필요한 지식 및 학력사항을 이력서에 기재해 온라인 혹은 우편 및 방문접수합니다.</p>
					</li>
					<li>
						<h3 class="red">STEP02.</h3>
						<h3>서류심사</h3>
						<p>이력서를 토대로 지원자의 역량 및 직무에 대한 관심도 등을 파악합니다.</p>
					</li>
					<li>
						<h3 class="red">STEP03.</h3>
						<h3>최종면접</h3>
						<p>서류전형에 통과한 지원자의 면접을 거쳐 최종합격자를 엄격히 선발합니다.</p>
					</li>
					<li>
						<h3 class="red">STEP04.</h3>
						<h3>최종합격</h3>
						<p>최종합격결과를  면접에  합격한 지원자에게 통보합니다.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
	include_once(G5_PATH.'/_tail.php');
?>