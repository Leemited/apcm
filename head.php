<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

// 상단 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_head'] && is_file(G5_PATH.'/'.$config['cf_include_head'])) {
    include_once(G5_PATH.'/'.$config['cf_include_head']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}
$main_menu =
array(
	array(
		'text' => '회사소개',
		'url'=>G5_URL."/page/sub01/sub01_1.php",
		'sub_menu'=>array(
			array(
				'text'=>'회사개요',
				'url'=>G5_URL."/page/sub01/sub01_1.php"
			),
			array(
				'text'=>'연혁',
				'url'=>G5_URL."/page/sub01/sub01_5.php"
			),
            array(
                'text'=>'특허 보유현황',
                'url'=>G5_URL."/page/sub01/sub01_5.php"
            ),
			array(
				'text'=>'찾아오시는 길',
				'url'=>G5_URL."/page/sub01/sub01_6.php"
			)
		)
	),
	array('text' => '제품소개',
		'url'=>G5_URL."/page/sub02/sub02_1.php",
		'width' => "113",
		'sub_menu'=>array(
			array(
				'text'=>'익스펜션 조인트',
				'url'=>G5_URL."/page/sub02/sub02_1.php"
			),
			array(
				'text'=>'보온-단열 제품',
				'url'=>G5_URL."/page/sub02/sub02_2.php"
			),
			array(
				'text'=>'재봉사',
				'url'=>G5_URL."/page/sub02/sub02_3.php"
			),
			array(
				'text'=>'카본-카본 복합체',
				'url'=>G5_BBS_URL."/board.php?bo_table=siljuk"
			),
			array(
                'text'=>'CFRP',
                'url'=>G5_BBS_URL."/board.php?bo_table=siljuk"
            )
		)
	),
	array('text' => '고객지원',
		'url'=>G5_URL."/page/sub05/sub05_1.php",
		'width' => "114",
		'sub_menu'=>array(
            array(
                'text'=>'공지사항',
                'url'=>G5_BBS_URL."/board.php?bo_table=notice"
            ),
			array(
				'text'=>'기술 문의',
				'url'=>G5_URL."/page/sub05/sub05_1.php"
			),
			array(
				'text'=>'제품 문의',
				'url'=>G5_BBS_URL."/board.php?bo_table=faq"
			)
		)
	)
);
	if(defined('_INDEX_')) { // index에서만 실행
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
?>

<div>
	<header id="header">
        <div id="main_header">
            <h1>
                <a href="<?php echo G5_URL; ?>"><img src="<?php echo G5_IMG_URL."/logo.png"; ?>" alt="주식회사 에이피씨엠" /></a>
            </h1>
             <a href="#menu" class="mobile_menu_btn"><span class="sound_only">메뉴</span></a>
            <ul id="main_menu">
                <?php
                for($i=0;$i<count($main_menu);$i++){
                ?>
                    <li>
                        <a href="<?php echo $main_menu[$i]['url']?>">
                            <?php echo $main_menu[$i]['text']; ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
            <ul id="right_menu">
                 <li>
                     <a href="<?php echo G5_URL."/page/sub05/sub05_1.php"; ?>"><img src="<?php echo G5_IMG_URL."/search_icon.png"; ?>" alt="검색" />검색</a>
                 </li>
                 <li>
                     <img src="<?php echo G5_IMG_URL."/top_line.png"; ?>" alt="line" />
                 </li>
                 <li>
                     <a href="<?php echo $is_member?G5_URL."/bbs/logout.php":G5_URL."/bbs/login.php"; ?>"><?php echo $is_member?"로그아웃":"로그인"; ?></a>
                 </li>
                 <li>
                     <img src="<?php echo G5_IMG_URL."/top_line.png"; ?>" alt="line" />
                 </li>
                 <li>
                     <ul class="list-language" >
                         <li><a href="#n">KOR</a></li>
                         <li><a href="#n" style="display: none;">ENG</a></li>
                     </ul>
                 </li>
            </ul>
        </div>

        <div id="main_menu_over">
            <div class="width-fixed">
                <div>
                    <?php
                    for($k=0;$k<count($main_menu);$k++){
                    ?>
                        <ul style="/*width:<?php echo $main_menu[$k]['width']?$main_menu[$k]['width']:"110"; ?>px*/">
                            <?php
                            for($j=0;$j<count($main_menu[$k]['sub_menu']);$j++){
                            ?>
                                <li>
                                    <a href="<?php echo $main_menu[$k]['sub_menu'][$j]['url']; ?>"><?php echo $main_menu[$k]['sub_menu'][$j]['text']; ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
</div>
<nav id="menu">
    <ul>
        <?php
        for($i=0;$i<count($main_menu);$i++){
            ?>
            <li>
                <a href="<?php echo $main_menu[$i]['url']?>"><?php echo $main_menu[$i]['text']; ?></a>
                <ul>
                    <?php
                    for($j=0;$j<count($main_menu[$i]['sub_menu']);$j++){
                        ?>
                        <li>
                            <a href="<?php echo $main_menu[$i]['sub_menu'][$j]['url']; ?>"><?php echo $main_menu[$i]['sub_menu'][$j]['text']; ?></a>
                            </li>
                        <?php
                        }
                    ?>
                </ul>
            </li>
            <?php
            }
        ?>
    </ul>
</nav>

<script type="text/javascript">

    $("#main_menu > li").hover(
        function(){
            var over = $(this).find("img").attr("data-over");
            $(this).find("img").attr("src",over);
        },

        function(){
            var src = $(this).find("img").attr("data-src");
            $(this).find("img").attr("src",src);
        }
    );

    $("#main_menu, #main_menu_over").hover(
        function(){
            $("#main_menu_over").show();
        },
        function(){
            $("#main_menu_over").hide();
        }
    );

    $('nav#menu').mmenu({
        offCanvas: {
            position: "right"
        },
        navbar : {
            title: '&nbsp;'
        },
        extensions: ["theme-white","border-full","pagedim-black","effect-menu-fade"]
    });

</script>

<?php
    if($main){
        ?>
            <div class="main">
        <?php
    }else{
        ?>
            <div class="sub">
        <?php
    }
?>