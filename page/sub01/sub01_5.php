<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub01/sub01_5.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>

<div class="mb120">
    <div class="sub_visual overview">
        <!-- <h2>About <span>APCM</span></h2>-->
    </div>
    <div id="sub_top">
        <div class="width-fixed">
            <ul>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_1.php">회사개요</a></li>
                <li class="active"><a href="<?php echo G5_URL; ?>/page/sub01/sub01_5.php">연혁</a></li>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_2.php">특허 보유현황</a></li>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php">찾아오시는 길</a></li>
            </ul>
        </div>
    </div>
    <div id="sub_title">
        <div class="width-fixed">
            <h2>연혁<span>History</span></h2>
        </div>
    </div>
    <div class="sub01_5_wrap text-center">
        <div class="width-fixed">
            <img src="<?php echo G5_IMG_URL."/history_img.png"; ?>" alt="주요연혁" />
        </div>
    </div>
</div>

<?php
	include_once(G5_PATH.'/_tail.php');
?>