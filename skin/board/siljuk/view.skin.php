<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<div class="width-fixed">
	<div id="sub_left">
		<h2>사업분야</h2>
		<h3 class="mobile_menu">주요실적</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_1.php">주요사업안내</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_2.php">토목사업</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub02/sub02_3.php">건축사업</a></li>
			<li class="active"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=siljuk">주요실적</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub02/sub02_1.php"; ?>">주요사업실적</a> &gt; 
				<a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=siljuk" class="red">주요실적</a>
			</p>
			<h2>주요실적</h2>
		</div>
		<div class="board_title">
			<div class="board_title_info">
				<h1>
					<?php
					if ($category_name) echo $view['ca_name'].' | '; // 분류 출력 끝
					echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
					?>
				</h1>
				작성자 <span class="black"><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;등록일<?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?>
			</div>
		</div>
		<div class="board_file">
			<span class="font_size14 text-bold grid_10" style="min-width:60px">
				도급액
			</span>
			<span>
				<?php echo $view['wr_1']?$view['wr_1']:"-"; ?>
			</span>
		</div>
		<div class="board_file">
			<span class="font_size14 text-bold grid_10" style="min-width:60px">
				발주처
			</span>
			<span>
				<?php echo $view['wr_2']?$view['wr_2']:"-"; ?>
			</span>
		</div>
		<div class="board_file">
			<span class="font_size14 text-bold grid_10" style="padding-right:0;min-width:60px">
				착공일
			</span>
			<span>
				<?php echo $view['wr_3']?date("y.m.d",strtotime($view['wr_3'])):"-"; ?>
			</span>
		</div>
		<div class="board_file">
			<span class="font_size14 text-bold grid_10" style="padding-right:0;min-width:60px">
				준공일
			</span>
			<span>
				<?php echo $view['wr_4']?date("y.m.d",strtotime($view['wr_4'])):"-"; ?>
			</span>
		</div>
		<div class="board_file">
			<span class="font_size14 text-bold grid_10" style="padding-right:0;min-width:60px">
				비고
			</span>
			<span>
				<?php echo $view['wr_5']?$view['wr_5']:"-"; ?>
			</span>
		</div>
		<?php
		if ($view['file']['count']) {
			$cnt = 0;
			for ($i=0; $i<count($view['file']); $i++) {
				if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
					$cnt++;
			}
		}
		 ?>
		<?php if($cnt) { ?>
		<!-- 첨부파일 시작 { -->
		<div class="board_file">
			<span class="font_size14 text-bold grid_10">
				첨부파일
			</span>
			<?php
			// 가변 파일
			for ($i=0; $i<count($view['file']); $i++) {
				if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
			 ?>
				<span>
					<a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
						<strong><?php echo $view['file'][$i]['source'] ?></strong>
						<?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
					</a>
				</span>
			<?php
				}
			}
			 ?>
		</div>
		<!-- } 첨부파일 끝 -->
		<?php } ?>
		<?php
		if (implode('', $view['link'])) {
		 ?>
		 <!-- 관련링크 시작 { -->
		<div class="board_file">
			<span class="font_size14 text-bold grid_10">
				관련링크
			</span>
			<?php
			// 링크
			$cnt = 0;
			for ($i=1; $i<=count($view['link']); $i++) {
				if ($view['link'][$i]) {
					$cnt++;
					$link = cut_str($view['link'][$i], 70);
			 ?>
				<span class="grid_90 pull-right">
					<a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
						<strong><?php echo $link ?></strong>
					</a>
				</span>
			<?php
				}
			}
			 ?>
		</div>
		<?php } ?>
		<!-- } 관련링크 끝 -->
		
		<div class="board_view">
			<?php
			// 파일 출력
			$v_img_count = count($view['file']);
			if($v_img_count) {
				echo "<div id=\"bo_v_img\">\n";

				for ($i=0; $i<=count($view['file']); $i++) {
					if ($view['file'][$i]['view']) {
						//echo $view['file'][$i]['view'];
						echo get_view_thumbnail($view['file'][$i]['view']);
					}
				}

				echo "</div>\n";
			}
			 ?>
			 <?php echo get_view_thumbnail($view['content']); ?>
		</div>
		<div class="board_btn">
			<a href="<?php echo $list_href ?>" class="btn bg_white bd_gray btn_sm pull-left">목록</a>
			<ul class="bo_v_com">
				<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn bg_lightgray white btn_sm">수정</a></li><?php } ?>
				<?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn bg_red white btn_sm" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
				<?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn bg_black white btn_sm" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
				<?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn bg_black white btn_sm" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
				<!-- 
					<?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn bg_lightgray white btn_sm">답변</a></li><?php } ?>
					<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn bg_lightgray white btn_sm">글쓰기</a></li><?php } ?>
				-->
			</ul>
		</div>
	</div>
</div>

    <!-- } 게시물 상단 버튼 끝 -->
    <?php
		// 코멘트 입출력
		//include_once('./view_comment.php');
     ?>
<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->