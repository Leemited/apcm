<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 4;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
if($board['gr_id']=="siber"){
	$main_href=G5_BBS_URL."/board.php?bo_table=report";
	$menu_no=3;
	if($bo_table=="prize"){
		$lst_th="받은날짜";
	}else{
		$lst_th="출처";
	}
	$lst_td="wr_1";
}else if($board['gr_id']=="guest"){
	$main_href=G5_URL."/page/sub05/sub05_1.php";
	$menu_no=4;
	$lst_th="글쓴이";
	$lst_td="wr_name";
}else if($board['gr_id']=="wanted"){
	$main_href=G5_URL."/page/sub06/sub06_1.php";
	$menu_no=5;
	$lst_th="글쓴이";
	$lst_td="wr_name";
}else{
	$main_href=G5_BBS_URL."/board.php?bo_table=".$bo_table;
	$menu_no="admin";
	$lst_th="글쓴이";
	$lst_td="wr_name";
}
if($menu_no=="admin"){
	$main_menu['admin']['text']="자료실";
	$main_menu[$menu_no]['sub_menu'][0]['text']="자료실";
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2><?php echo $main_menu[$menu_no]['text']; ?></h2>
		<h3 class="mobile_menu"><?php echo $board['bo_subject']; ?></h3>
		<ul>
		<?php
			for($i=0;$i<count($main_menu[$menu_no]['sub_menu']);$i++){
		?>
			<li class="<?php echo $main_menu[$menu_no]['sub_menu'][$i]['text']==$board['bo_subject']?"active":""; ?>"><a href="<?php echo $main_menu[$menu_no]['sub_menu'][$i]['url']; ?>"><?php echo $main_menu[$menu_no]['sub_menu'][$i]['text']; ?></a></li>
		<?php
			}
		?>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo $main_href; ?>"><?php echo $main_menu[$menu_no]['text']; ?></a> &gt; 
				<a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table ?>" class="red"><?php echo $board['bo_subject']; ?></a>
			</p>
			<h2><?php echo $board['bo_subject']; ?></h2>
		</div>
		<div id="board_search01">
			<form name="fsearch" method="get">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sop" value="and">
				<input type="hidden" name="sfl" value="wr_subject||wr_content" />
				<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="input_01" maxlength="20" placeholder="검색어를 입력하세요">
				<input type="submit" value="SEARCH" class="btn bg_black white btn_sm ml5">
			</form>
		</div>
		<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
			<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
			<input type="hidden" name="stx" value="<?php echo $stx ?>">
			<input type="hidden" name="spt" value="<?php echo $spt ?>">
			<input type="hidden" name="sca" value="<?php echo $sca ?>">
			<input type="hidden" name="sst" value="<?php echo $sst ?>">
			<input type="hidden" name="sod" value="<?php echo $sod ?>">
			<input type="hidden" name="page" value="<?php echo $page ?>">
			<input type="hidden" name="sw" value="">
			<div class="table_04 text-center">
				<table>
					<tr>
						<th class="p_hidden" style="width:10%;">번호</th>
						<?php if ($is_checkbox) { ?>
						<th class="p_hidden" style="width:10%;">
							<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
						</th>
						<?php } ?>
						<th style="width:50%;">제목</th>
						<th class="p_hidden"><?php echo $lst_th; ?></th>
						<th>작성일</th>
					</tr>
					<?php
					for ($i=0; $i<count($list); $i++) {
					?>
					<tr>
						<td onclick="location='<?php echo $list[$i]['href'] ?>'" class="p_hidden">
						<?php
						if ($list[$i]['is_notice']) // 공지사항
							echo '<strong>공지</strong>';
						else if ($wr_id == $list[$i]['wr_id'])
							echo "<span class=\"bo_current\">열람중</span>";
						else
							echo $list[$i]['num'];
						 ?>
						</td>
						<?php if ($is_checkbox) { ?>
						<td class="p_hidden">
							<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
						</td>
						<?php } ?>
						<td class="text-left hover_act"  onclick="location='<?php echo $list[$i]['href'] ?>'">
							<?php
							echo $list[$i]['icon_reply'];
							if ($is_category && $list[$i]['ca_name']) {
							 ?>
							<a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
							<?php } ?>
							<?php echo $list[$i]['subject'] ?>
							<?php if ($list[$i]['comment_cnt']) { ?><span class="red text-bold">[<?php echo $list[$i]['comment_cnt']; ?>]</span><?php } ?>
							<?php if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret']; ?>
							<?php if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];?>
						</td>
						<td onclick="location='<?php echo $list[$i]['href'] ?>'" class="p_hidden"><?php echo $list[$i][$lst_td]?$list[$i][$lst_td]:"-"; ?></td>
						<td onclick="location='<?php echo $list[$i]['href'] ?>'"><?php echo $list[$i]['wr_datetime']?date("Y-m-d",strtotime($list[$i]['wr_datetime'])):"-"; ?></td>
					</tr>
					<?php
					}
					?>
				</table>
				<?php if (count($list) == 0) { echo '<p class="text-center bdb" style="padding:100px 0;">게시물이 없습니다.</p>'; } ?>
			</div>
			<?php if ($list_href || $is_checkbox || $write_href) { ?>
			<div class="bo_fx" style="margin-top:20px;">
				<?php if ($is_checkbox) { ?>
					<input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn bg_red white btn_sm ml5">
					<input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn bg_red white btn_sm ml5">
					<input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn bg_red white btn_sm ml5">
				<?php } ?>

				<?php if ($list_href || $write_href) { ?>
				<ul class="btn_bo_user">
					<?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn bg_gray white btn_sm ml5">LIST</a></li><?php } ?>
					<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn bg_red white btn_sm ml5">WRITE</a></li><?php } ?>
				</ul>
				<?php } ?>
			</div>
			<?php } ?>
		</form>
		<div class="lst_num_01">
			<?php echo $write_pages;  ?>
		</div>
	</div>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>


<!-- } 게시판 검색 끝 -->
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
