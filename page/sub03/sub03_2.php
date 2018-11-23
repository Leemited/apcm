<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub03/sub03_2.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="width-fixed">
	<div id="sub_left">
		<h2>지속가능경영</h2>
		<h3 class="mobile_menu">협력업체</h3>
		<ul>
			<li><a href="<?php echo G5_URL; ?>/page/sub03/sub03_0.php">윤리경영</a></li>
			<li><a href="<?php echo G5_URL; ?>/page/sub03/sub03_1.php">기술경영</a></li>
			<li class="active"><a href="<?php echo G5_URL; ?>/page/sub03/sub03_2.php">협력업체</a></li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=contribute">사회공헌</a></li>
		</ul>
	</div>
	<div id="sub_right">
		<div id="sub_title">
			<p>
				<a href="<?php echo G5_URL; ?>">HOME</a> &gt; 
				<a href="<?php echo G5_URL."/page/sub03/sub03_1.php"; ?>">지속가능경영</a> &gt; 
				<a href="<?php echo G5_URL; ?>/page/sub03/sub03_2.php" class="red">협력업체</a>
			</p>
			<h2>협력업체</h2>
		</div>
		<div class="inquiry">
			<div class="inquiry_top">
				<h2>이용안내</h2>
				<p>(주)한양종합건설의 협력업체에 등록하고자 하시는 업체를 위한 등록문의 페이지입니다.</p>
			</div>
			<div class="inquiry_con">
				<h2>협력업체 등록문의</h2>
				<form action="<?php echo G5_URL."/page/sub05/sub05_1_update.php"; ?>" method="post" id="r_form" name="r_form" onsubmit="return r_form_submit(this);" enctype="multipart/form-data">
					<div class="inquiry_form">
						<div class="grid_100 bdb">
							<div class="th grid_20 p_grid_30 p_bdb pm_grid_100">업체명</div>
							<div class="td grid_30 p_grid_70 p_bdb pm_grid_100"><input type="text" name="company" id="company" class="input_01 grid_100" required /></div>
							<div class="th grid_20 p_grid_30 pm_grid_100">담당자명</div>
							<div class="td grid_30 p_grid_70 pm_grid_100"><input type="text" name="name" id="name" class="input_01 grid_100" required /></div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">사업장소재지</div>
							<div class="td grid_80 p_grid_70 pm_grid_100"><input type="text" name="addr" id="addr" class="input_01 grid_100" required /></div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">등록희망종목</div>
							<div class="td grid_80 p_grid_70 pm_grid_100"><input type="text" name="hope" id="hope" class="input_01 grid_100" required /></div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">전화</div>
							<div class="td grid_80 p_grid_70 pm_grid_100">
								<input type="text" name="tel1" id="tel1" class="input_01 grid_10 p_grid_30" onkeyup="number_only(this);" maxlength="3" required /><span class="grid_3 text-center lh30 p_grid_5">-</span>
								<input type="text" name="tel2" id="tel2" class="input_01 grid_10 p_grid_30" onkeyup="number_only(this);" maxlength="4" required /><span class="grid_3 text-center lh30 p_grid_5">-</span>
								<input type="text" name="tel3" id="tel3" class="input_01 grid_10 p_grid_30" onkeyup="number_only(this);" maxlength="4" required />
							</div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">팩스</div>
							<div class="td grid_80 p_grid_70 pm_grid_100">
								<input type="text" name="fax1" id="fax1" class="input_01 grid_10 p_grid_30" onkeyup="number_only(this);" maxlength="3" required /><span class="p_grid_5 grid_3 text-center lh30">-</span>
								<input type="text" name="fax2" id="fax2" class="input_01 grid_10 p_grid_30" onkeyup="number_only(this);" maxlength="4" required /><span class=" p_grid_5 grid_3 text-center lh30">-</span>
								<input type="text" name="fax3" id="fax3" class="input_01 grid_10 p_grid_30" onkeyup="number_only(this);" maxlength="4" required />
							</div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">이메일</div>
							<div class="td grid_80 p_grid_70 pm_grid_100">
								<input type="text" name="email1" id="email1" class="input_01 grid_30 p_grid_30" required /><span class="grid_3 text-center lh30 p_grid_5">@</span>
								<input type="text" name="email2" id="email2" class="input_01 grid_30 p_grid_30" required />
								<select id="email_sel" class="input_01 ml5 p_grid_30" onchange="email_select();">
									<option value="">직접입력</option>
									<option value="google.com">google.com</option>
									<option value="naver.com">naver.com</option>
									<option value="daum.net">daum.net</option>
									<option value="nate.com">nate.com</option>
								</select>
							</div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">제목</div>
							<div class="td grid_80 p_grid_70 pm_grid_100"><input type="text" name="subject" id="subject" class="input_01 grid_100" required /></div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">내용</div>
							<div class="td grid_80 p_grid_70 pm_grid_100">
								<textarea name="content" id="content" cols="30" rows="10" class="input_01 grid_100" style="height:120px;display:block;" required></textarea>
								<p class="blue font_size12" style="margin-top:10px;">
									※문의하신 내용은 처리시간이 다소 소요될 수 있습니다. <br />
									※고객문의사항이나 부정부패 제보사항은 고객지원센터와 사이버감사팀 란을 이용해주세요.
								</p>
							</div>
						</div>
						<div class="grid_100 bdb">
							<div class="th grid_20 pr0 p_grid_30 pm_grid_100">첨부파일</div>
							<div class="td grid_80 p_grid_70 pm_grid_100">
								<input type="file" name="file" id="file" class="input_01 grid_50 lh30 pm_grid_100" />
							</div>
						</div>
					</div>
					<h3 class="font_size16">개인정보 취급방침</h3>
					<textarea name="privacy" id="privacy" class="input_01 grid_100" cols="30" rows="10" style="display:block; height:160px;" readonly>개인정보 수집 및 이용에 대한 안내

(주)한양종합건설은 귀하의 개인정보보호를 매우 중요시하며, 정보통신망이용촉진등에관한법률』을 준수하고 있습니다. 
(주)한양종합건설의 개인정보보호방침을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.

1. 개인정보의 수집 및 이용목적
(주)한양종합건설은 가맹문의 및 상담을 의뢰 하고자 하는 이용자의 확인 및 마케팅 자료로써 귀하의 원하고자 하는 가맹문의 및 상담문의의 최적 서비스를 제공하기 위한 목적으로 귀하의 개인정보를 수집ㆍ이용하고 있습니다.

2. 수집하는 개인 정보의 항목
- 이름, 연락처 : 상담 신청 등의 서비스 이용에 따른 본인 확인 절차에 이용

3. 개인정보의 보유 및 이용기간
- 이용자의 개인정보는 원친적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기 합니다.
- 다만, 회사 내부 방침에 의한 정보보유 사유로 고객사의 원할한 서비스 제공을 위해 회사명, 고객명, 이메일주소, 전화번호, 기타 선택 항목을 1년간보유 할 수 있습니다.
- 상법,전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존 할 필요가 있는 경우에는 일정기간 보존합니다.
* 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년*전자상거래등에서의 소비자보호에 관한 법률(본인확인에 관한 기록(개월), 방문에 관한 기록(3개월)
					</textarea>
					<div class="grid_100">
						<p class="text-right lh30 font_size12 pull-right" style="line-height:20px;">
							<input type="checkbox" name="agree" id="agree" value="agree" required style="margin:8px 5px;vertical-align:middle;"/>
							<label class="ml5" for="agree"><span class="p_hidden">위의 </span>개인정보 취급방침에 동의합니다.</label>
						</p>
					</div>
					<div class="inquiry_submit">
						<input type="submit" value="제보하기" class="btn bg_red white btn_md text-bold font_size16 btn_radius" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function number_only(t){
		t.value = t.value.replace(/[^0-9]/g, '');
	}
	function email_select(){
		var email_sel_val = $("#email_sel").val();
		if(email_sel_val!=""){
			$("#email2").val(email_sel_val);
			$("#email2").attr("readonly",true);
		}else{
			$("#email2").attr("readonly",false);
		}
	}
	function r_form_submit(f){
		if (!f.agree.checked) {
			alert("개인정보 취급방침의 내용에 동의하셔야 넘어가실 수 있습니다.");
			f.agree.focus();
			return false;
		}
		return true;
	}
</script>
<?php
	include_once(G5_PATH.'/_tail.php');
?>