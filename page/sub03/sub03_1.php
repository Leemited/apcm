<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub03/sub03_1.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>지속가능경영</h2>
		<h3 class="mobile_menu">기술경영</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub03/sub03_0.php">윤리경영</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub03/sub03_1.php">기술경영</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub03/sub03_2.php">협력업체</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=contribute">사회공헌</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub03/sub03_1.php"; ?>">지속가능경영</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub03/sub03_1.php" class="red">기술경영</a>
			</p>
			<h2>기술경영</h2>
		</div>
		<div class="sub03_1_wrap">
			<div style="padding-bottom:80px;">
				<h2 class="lst_head01">기술경영을 위한 <span class="red">3가지</span> 원칙</h2>
				<div>
					<img src="<?php echo G5_IMG_URL?>/sub03_1_img.jpg" alt="기술경영을 위한 3가지 원칙" />
				</div>
			</div>
			<div style="padding-top:75px; border-top:1px solid #ccc;">
				<h2 class="lst_head01">인허가 및 인증서</h2>
				<ul>
					<li>
						<div>
							<img src="<?php echo G5_IMG_URL?>/sub03_1_1.jpg" alt="특허증" />
						</div>
						<p>
							특허증<br />
							<span>(긴장력 계측 시험체 및 그 계측방법)</span>
						</p>
					</li>
					<li>
						<div>
							<img src="<?php echo G5_IMG_URL?>/sub03_1_2.jpg" alt="청원군수 표창장" />
						</div>
						<p>
							청원군수 표창장<br />
							<span>(강외하수관거정비공사)</span>
						</p>
					</li>
					<li>
						<div>
							<p>이미지<br />준비중</p>
						</div>
						<p>
							토목·건축공사업 면허 12-0070
						</p>
					</li>
					<li>
						<div>
							<p>이미지<br />준비중</p>
						</div>
						<p>
							해외건설업 면허 제 1100호<br />
							<span>(토목건축공사업)</span>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
	include_once(G5_PATH.'/_tail.php');
?>