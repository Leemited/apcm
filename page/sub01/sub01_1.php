<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub01/sub01_1.php');
	include_once(G5_PATH.'/_tail.php');
    return;
}
?>
<div class="bgcolor01">
    <div class="sub_visual overview">
       <!-- <h2>About <span>APCM</span></h2>-->
    </div>
	<div id="sub_top">
        <div class="width-fixed">
            <ul>
                <li class="active"><a href="<?php echo G5_URL; ?>/page/sub01/sub01_1.php">회사개요</a></li>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_5.php">연혁</a></li>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_2.php">특허 보유현황</a></li>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php">찾아오시는 길</a></li>
            </ul>
        </div>
	</div>
    <div id="sub_title">
        <div class="width-fixed">
            <h2>회사소개<span>Company Overview</span></h2>
        </div>
    </div>
	<div id="sub_right">
        <div class="width-fixed">
            <div class="mb65 text-center grid_100 sub01_1_top">
                <div class="grid_50 p_grid_100">
                    <img src="<?php echo G5_IMG_URL."/overview_img.jpg";?>" alt="회사이미지" />
                </div>
                <div class="grid_45 p_grid_100 sub01_1_img">
                    <img src="<?php echo G5_IMG_URL."/overview_img2.png";?>" alt="앞서가는 혁신적인 기술로 복합소재 발전에 기여합니다. 주식회사 에이피씨엠은 다양한 소재와 열, 화학 및 기계적 특성을 고려하여 고객 여러분께 최적의 솔루션을 제공해 드립니다.“Advanced Performance
                              Composite Materials”" />
                </div>
            </div>
            <div class="table_01 text-left">
                <table>
                    <colgroup>
                        <col width="110px" />
                        <col width="*" />
                        <col width="110px" />
                        <col width="*" />
                    </colgroup>
                    <tr class="p_hidden">
                        <th >회&nbsp;&nbsp;사&nbsp;&nbsp;명</th>
                        <td>주식회사 에이피씨엠 / APCM Co.,Ltd.</td>
                        <th>소&nbsp;&nbsp;재&nbsp;&nbsp;지</th>
                        <td>충청북도 청주시 흥덕구 오송읍 만수길 14-18, 1F</td>
                    </tr>
                    <tr class="p_hidden">
                        <th>대표이사</th>
                        <td>이숙용</td>
                        <th>설립일자</th>
                        <td>2016년 03월 11일</td>
                    </tr>
                    <tr class="p_hidden">
                        <th>대표전화</th>
                        <td>043-232-9784</td>
                        <th>주요사업</th>
                        <td>고온재봉사, PFP system, 보온 단열 관련 소재</td>
                    </tr>
                </table>
            </div>
        </div>
	</div>
</div>
<div id="sub_con">
    <div class="width-fixed">
        <div>
            <img src="<?php echo G5_IMG_URL."/symbol3_icon.png";?>" alt="세로 구분기호" />
            <h2>경영이념</h2>
        </div>
        <img src="<?php echo G5_IMG_URL."/overview_img3.png";?>" alt="창조(Creative) : 계속적인 연구와 개발, 아이디어 창출, 혁신(Innovation) :변화를 수용하는 마음가짐, 끊임없이 혁신을 추구, 신뢰(Partnership) :  기본과 원칙을 준수
진정성있는 소통, 존중(Respect) : 고객과 협력사의 의견을 존중하고 수용" class="overview_img3"/>
    </div>
</div>

<?php
	include_once(G5_PATH.'/_tail.php');
?>