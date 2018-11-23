<?php
	include_once("../../common.php");
	include_once(G5_LIB_PATH.'/mailer.lib.php');
	$company=$_POST['company'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$tel=$_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3'];
	$fax=$_POST['fax1']."-".$_POST['fax2']."-".$_POST['fax3'];
	$email=$_POST['email1']."@".$_POST['email2'];
	$addr=$_POST['addr'];
	$content=nl2br($_POST['content']);
	


	$file_name=time()."_".$_FILES['file']['name'];
	$mb_dir = G5_DATA_PATH.'/contractor/'.$file_name;
	
	
	if (isset($_FILES['file'])) {
		//  파일 용량이 설정값보다 이하만 업로드 가능
		if ($_FILES['file']['size'] <= "2097152") {
			@mkdir(G5_DATA_PATH.'/contractor/', G5_DIR_PERMISSION);
			@chmod(G5_DATA_PATH.'/contractor/', G5_DIR_PERMISSION);
			$dest_path = $mb_dir;
			move_uploaded_file($_FILES['file']['tmp_name'], $dest_path);
			chmod($dest_path, G5_FILE_PERMISSION);
			if (file_exists($dest_path)) {
				//=================================================================\
				// 090714
				// gif 파일에 악성코드를 심어 업로드 하는 경우를 방지
				// 에러메세지는 출력하지 않는다.
				//-----------------------------------------------------------------
				$file= '/data/contractor/'.$file_name;
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
	$mail_con.="<h2 style='padding-left:40px;background:url(".G5_IMG_URL."/inquiry_icon2.png) left 20px no-repeat; color:#b20000; font-size:40px;margin-bottom:25px; font-weight:bold;'>협력업체 등록문의</h2>";
		$mail_con.="<table style='border-collapse:collapse;border-top:2px solid #000;border-bottom:1px solid #000;'>";
			$mail_con.="<colgroup>";
				$mail_con.="<col width='15%' />";
				$mail_con.="<col width='35%' />";
				$mail_con.="<col width='15%' />";
				$mail_con.="<col width='35%' />";
			$mail_con.="</colgroup>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="업체명";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$company;
				$mail_con.="</td>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="담당자명";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;'>";
					$mail_con.=$name;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="사업장소재지";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$addr;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="전화번호";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$tel;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="팩스";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$fax;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="E-mail";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$email;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;'>";
					$mail_con.="제목";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$subject;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;' valign='top'>";
					$mail_con.="내용";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$content;
				$mail_con.="</td>";
			$mail_con.="</tr>";
			$mail_con.="<tr style='border-bottom:1px solid #ddd;'>";
				$mail_con.="<th style='padding:15px 25px; background:#f8f8f8; text-align:left;' valign='top'>";
					$mail_con.="첨부파일";
				$mail_con.="</th>";
				$mail_con.="<td style='text-align:left;padding:8px 10px;' colspan='3'>";
					$mail_con.=$file_con;
				$mail_con.="</td>";
			$mail_con.="</tr>";
		$mail_con.="</table>";
	$mail_con.="</div>";
	mailer($name, "0330_aa@naver.com", "0330_aa@naver.com", "협력업체 등록문의 입니다.", $mail_con);
	mailer($name, $config['cf_admin_email'], $config['cf_admin_email'], "협력업체 등록문의 입니다.", $mail_con);
	alert("등록 되었습니다.");
	
?>
