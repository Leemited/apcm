<?php
	include_once("../../common.php");
	include_once(G5_LIB_PATH.'/mailer.lib.php');
	
	
	
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$tel=$_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3'];
	$email=$_POST['email1']."@".$_POST['email2'];
	$content=nl2br($_POST['content']);
	
	$file_name=time()."_".$_FILES['file']['name'];
	$mb_dir = G5_DATA_PATH.'/customer/'.$file_name;
	
	
	if (isset($_FILES['file'])) {
		//  파일 용량이 설정값보다 이하만 업로드 가능
		if ($_FILES['file']['size'] <= "2097152") {
			@mkdir(G5_DATA_PATH.'/customer/', G5_DIR_PERMISSION);
			@chmod(G5_DATA_PATH.'/customer/', G5_DIR_PERMISSION);
			$dest_path = $mb_dir;
			move_uploaded_file($_FILES['file']['tmp_name'], $dest_path);
			chmod($dest_path, G5_FILE_PERMISSION);
			if (file_exists($dest_path)) {
				//=================================================================\
				// 090714
				// gif 파일에 악성코드를 심어 업로드 하는 경우를 방지
				// 에러메세지는 출력하지 않는다.
				//-----------------------------------------------------------------
				$file= '/data/customer/'.$file_name;
			}
		} else {
			$msg .= '파일을 '.number_format("2097152").'바이트 이하로 업로드 해주십시오.';
		}
	}
	if($file){
		$file_con="<a href='".G5_URL.$file."'>첨부파일</a>";
	}else{
		$file_con="없음";
	}
	
	$mail_con="<div style='width:100%;font-family:\"NanumGothic\",\"Nanum Gothic\"'>";
	$mail_con.="<h2 style='padding-left:40px;background:url(".G5_IMG_URL."/inquiry_icon2.png) left 20px no-repeat; color:#b20000; font-size:40px;margin-bottom:25px; font-weight:bold;'>문의하기</h2>";
		$mail_con.="<table style='border-collapse:collapse;border-top:2px solid #000;border-bottom:1px solid #000;'>";
			$mail_con.="<colgroup>";
				$mail_con.="<col width='15%' />";
				$mail_con.="<col width='85%' />";
			$mail_con.="</colgroup>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="이름";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$name;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="이메일";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$email;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="연락처";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$tel;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="제목";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$subject;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;' valign='top'>";
					$mail_con.="내용";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$content;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;' valign='top'>";
					$mail_con.="첨부파일";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$file_con;
				$mail_con.="</td>";
			$mail_con.="</tr>";
		$mail_con.="</table>";
	$mail_con.="</div>";
	mailer($name, "0330_aa@naver.com", "0330_aa@naver.com", "고객지원센터 문의 입니다.", $mail_con);
	mailer($name, $config['cf_admin_email'], $config['cf_admin_email'], "고객지원센터 문의 입니다.", $mail_con);
	alert("등록 되었습니다.");
?>
