<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

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
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<section id="bo_w">
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
			<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
				<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
				<input type="hidden" name="w" value="<?php echo $w ?>">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
				<input type="hidden" name="stx" value="<?php echo $stx ?>">
				<input type="hidden" name="spt" value="<?php echo $spt ?>">
				<input type="hidden" name="sst" value="<?php echo $sst ?>">
				<input type="hidden" name="sod" value="<?php echo $sod ?>">
				<input type="hidden" name="page" value="<?php echo $page ?>">
				<?php
					$option = '';
					$option_hidden = '';
					if ($is_notice || $is_html || $is_secret || $is_mail) {
						$option = '';
						if ($is_notice) {
							$option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
						}
						if ($is_html) {
							if ($is_dhtml_editor) {
								$option_hidden .= '<input type="hidden" value="html1" name="html">';
							} else {
								$option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
							}
						}
						if ($is_secret) {
							if ($is_admin || $is_secret==1) {
								$option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
							} else {
								$option_hidden .= '<input type="hidden" name="secret" value="secret">';
							}
						}
						if ($is_mail) {
							$option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
						}
					}
					echo $option_hidden;
				?>
				<div class="table_03">
					<table class="text-left">
						<colgroup>
							<col width="100px" />
							<col width="*" />
						</colgroup>
						<?php if ($is_name) { ?>
						<tr>
							<th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
							<td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="input_01 grid_30 t_grid50 p_grid_100" size="10" maxlength="20"></td>
						</tr>
						<?php } ?>
						<?php if ($is_password) { ?>
						<tr>
							<th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
							<td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="input_01 grid_30 t_grid50 p_grid_100" maxlength="20"></td>
						</tr>
						<?php } ?>
						<?php if ($is_email) { ?>
						<tr>
							<th scope="row"><label for="wr_email">이메일</label></th>
							<td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="input_01 grid_30 email  t_grid50 p_grid_100" size="50" maxlength="100"></td>
						</tr>
						<?php } ?>
						<?php if ($is_homepage) { ?>
						<tr>
							<th scope="row"><label for="wr_homepage">홈페이지</label></th>
							<td><input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="input_01 grid_30 t_grid50 p_grid_100" size="50"></td>
						</tr>
						<?php } ?>
						<?php if ($option) { ?>
						<tr>
							<th scope="row">옵션</th>
							<td><?php echo $option ?></td>
						</tr>
						<?php } ?>
						<?php if ($is_category) { ?>
						<tr>
							<th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
							<td>
								<select name="ca_name" id="ca_name" required class="input_01 t_grid50 p_grid_100" >
									<option value="">선택하세요</option>
									<?php echo $category_option ?>
								</select>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
							<td>
								<div id="autosave_wrapper">
									<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input input_01 grid_70 p_grid_100" size="50" maxlength="255">
									<?php if ($is_member) { // 임시 저장된 글 기능 ?>
									<script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
									<button type="button" id="btn_autosave" class="btn bg_black white btn_sm grid_30 p_hidden">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
									<div id="autosave_pop">
										<strong>임시 저장된 글 목록</strong>
										<div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
										<ul></ul>
										<div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
									</div>
									<?php } ?>
								</div>
							</td>
						</tr>
						<?php
						if($lst_td=="wr_1"){
						?>
						<tr>
							<th scope="row"><label for="wr_1"><?php echo $lst_th; ?></label></th>
							<td><input type="text" name="wr_1" value="<?php echo $write['wr_1']; ?>" id="wr_1" class="input_01 grid_30 t_grid50 p_grid_100" size="50"></td>
						</tr>
						<?php
						}
						?>
							<tr>
								<th>내용</th>
								<td class="wr_content">
									<?php if($write_min || $write_max) { ?>
									<!-- 최소/최대 글자 수 사용 시 -->
									<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
									<?php } ?>
										<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
									<?php if($write_min || $write_max) { ?>
									<!-- 최소/최대 글자 수 사용 시 -->
									<div id="char_count_wrap"><span id="char_count"></span>글자</div>
									<?php } ?>
								</td>
							</tr>
						<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
						<tr>
							<th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
							<td><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="input_01 grid_100" size="50"></td>
						</tr>
						<?php } ?>
						<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
						<tr>
							<th scope="row">파일 #<?php echo $i+1 ?></th>
							<td>
								<input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file grid_100">
								<?php if ($is_file_content) { ?>
								<input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file" size="50">
								<?php } ?>
								<?php if($w == 'u' && $file[$i]['file']) { ?>
								<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
								<?php } ?>
							</td>
						</tr>
						<?php } ?>
						<?php if ($is_guest) { //자동등록방지  ?>
						<tr>
							<th scope="row">자동등록방지</th>
							<td>
								<?php echo $captcha_html ?>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
				<div class="text-center mt20">
					<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn bg_red white btn_md font_size14">
					<a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn bg_gray white btn_md font_size14">취소</a>
				</div>
			</form>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$("#wr_4").datepicker(
			{
				dateFormat: 'yy-mm-dd',
				onSelect: function(selected) {
					$("#wr_3").datepicker("option","maxDate", selected);
				}
			}
		);
		$("#wr_3").datepicker({ 
			dateFormat: 'yy-mm-dd',
			onSelect: function(selected) {
			   $("#wr_4").datepicker("option","minDate", selected);
			}
		});
	});
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->