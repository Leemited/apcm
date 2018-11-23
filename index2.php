<?php
define('_INDEX_', true);
include_once('./_common.php');

// 초기화면 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_index'] && is_file(G5_PATH.'/'.$config['cf_include_index'])) {
    include_once(G5_PATH.'/'.$config['cf_include_index']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}
$main=true;
include_once('./_head.php');
?>



<div id="main_ani">
    <div class="owl-carousel">
        <div class="item" style="background:url('/img/main_img.jpg') no-repeat center;"></div>
        <div class="item" style="background:url('/img/main_img.jpg') no-repeat center;"></div>
        <div class="item" style="background:url('/img/main_img.jpg') no-repeat center;"></div>
    </div>

    <div class="width-fixed">
        <?php
        if(count($notice_list)>0){
        ?>
        <div id="main_notice">
            <h3>공지::</h3>
            <ul>
                <?php
                for($i=0;$i<count($notice_list);$i++){
                    ?>
                    <li><a href="<?php echo G5_BBS_URL."/board.php?bo_table=notice&wr_id=".$notice_list[$i]['wr_id']; ?>"><span><?php echo date("Y.m.d",strtotime($notice_list[$i]['wr_datetime'])); ?></span><?php echo $notice_list[$i]['wr_subject']; ?></a></li>
                <?php } ?>
            </ul>
            <span><a href="<?php echo G5_BBS_URL."/board.php?bo_table=notice"; ?>"></a></span>
        </div>
    </div>

    <!--<div class="prev btn"><img src="<?php echo G5_IMG_URL."/main_ani_pre.png"; ?>" alt="이전" /></div>
	<div class="next btn"><img src="<?php echo G5_IMG_URL."/main_ani_nxt.png"; ?>" alt="다음" /></div>-->
</div>
<div class="width-fixed">
    <div id="main_content">
        <div class="main_icon">
            <div class="grid_20">
                <a href="<?php echo G5_URL."/page/sub01/sub01_6.php"; ?>">
                    <img src="<?php echo G5_IMG_URL."/main_icon01.png"; ?>" data-over="<?php echo G5_IMG_URL."/main_icon_over01.png"; ?>" data-src="<?php echo G5_IMG_URL."/main_icon01.png"; ?>" alt="오시는길" />
                </a>
            </div>
            <div class="grid_20">
                <a href="<?php echo G5_URL."/page/sub05/sub05_1.php"; ?>">
                    <img src="<?php echo G5_IMG_URL."/main_icon02.png"; ?>" data-over="<?php echo G5_IMG_URL."/main_icon_over02.png"; ?>" data-src="<?php echo G5_IMG_URL."/main_icon02.png"; ?>" alt="고객문의하기" />
                </a>
            </div>
            <div class="grid_20">
                <a href="<?php echo G5_URL."/page/sub03/sub03_2.php"; ?>">
                    <img src="<?php echo G5_IMG_URL."/main_icon03.png"; ?>" data-over="<?php echo G5_IMG_URL."/main_icon_over03.png"; ?>" data-src="<?php echo G5_IMG_URL."/main_icon03.png"; ?>" alt="협력업체등록" />
                </a>
            </div>
            <div class="grid_20">
                <a href="<?php echo G5_URL."/page/sub05/sub05_2.php"; ?>">
                    <img src="<?php echo G5_IMG_URL."/main_icon04.png"; ?>" data-over="<?php echo G5_IMG_URL."/main_icon_over04.png"; ?>" data-src="<?php echo G5_IMG_URL."/main_icon04.png"; ?>" alt="사이버감사팀" />
                </a>
            </div>
            <div class="grid_20">
                <a href="<?php echo G5_BBS_URL."/board.php?bo_table=wanted"; ?>">
                    <img src="<?php echo G5_IMG_URL."/main_icon05.png"; ?>" data-over="<?php echo G5_IMG_URL."/main_icon_over05.png"; ?>" data-src="<?php echo G5_IMG_URL."/main_icon05.png"; ?>" alt="채용공고" />
                </a>
            </div>
        </div>
        <div id="main_job" class="grid_60 t_grid_100">
            <div class="grid_50">
                <a href="<?php echo G5_URL."/page/sub02/sub02_3.php"; ?>">
                    <img src="<?php echo G5_IMG_URL ?>/main_right1.jpg" alt="건축" />
                    <div>
                        <h2>건축</h2>
                        <p>READ MORE</p>
                    </div>
                </a>
            </div>
            <div class="grid_50">
                <a href="<?php echo G5_URL."/page/sub02/sub02_2.php"; ?>">
                    <img src="<?php echo G5_IMG_URL ?>/main_right2.jpg" alt="토목" />
                    <div>
                        <h2>토목</h2>
                        <p>READ MORE</p>
                    </div>
                </a>
            </div>
        </div>
        <div id="main_notice" class="grid_40 t_grid_100">
            <h2 class="font_size18">공지사항</h2>
            <div>
                <ul>
                    <?php
                    $sql="select * from g5_write_notice where wr_is_comment='0' order by wr_datetime desc limit 0,4";
                    $query=sql_query($sql);
                    while($data=sql_fetch_array($query)){
                        $bodo[]=$data;
                    }
                    for($i=0;$i<4;$i++){
                        ?>
                        <li><a href="<?php echo G5_BBS_URL."/board.php?bo_table=notice&amp;wr_id=".$bodo[$i]['wr_id']; ?>"><p><?php echo $bodo[$i]['wr_subject']; ?></p><span><?php echo $bodo[$i]['wr_datetime']?date("Y.m.d",strtotime($bodo[$i]['wr_datetime'])):""; ?></span></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(function () {
        $(".tab_content").hide();
        $(".tab_content:first").show();
        $("#main_left_top > ul > li").click(function () {
            $("#main_left_top ul li").removeClass("active");
            //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
            $(this).addClass("active");
            $(".tab_content").hide()
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn();
        });
    });
    $(".main_icon div a").hover(
        function(){
            var over = $(this).find("img").attr("data-over");
            $(this).find("img").attr("src",over);
        },
        function(){
            var src = $(this).find("img").attr("data-src");
            $(this).find("img").attr("src",src);
        }
    );

    setTimeout(function(){main_notice_slide()},3000);
    var n=0;
    var main_notice_len=$("#main_notice li").length;
    /* 메인배너 슬라이드 */
    function main_notice_slide(act,roop){
        n++;
        if(n>=main_notice_len){
            n=0;
        }
        go=n * -46;
        $("#main_notice ul").animate(
            {'margin-top': go+'px'}
        );
        setTimeout(function(){main_notice_slide()},3000);
    };



</script>
<?php
include_once('./_tail.php');
?>
