<?php
include_once('../../common.php');
include_once(G5_PATH.'/_head.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/sub01/sub01_2.php');
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
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_5.php">연혁</a></li>
                <li class="active"><a href="<?php echo G5_URL; ?>/page/sub01/sub01_2.php">특허 보유현황</a></li>
                <li><a href="<?php echo G5_URL; ?>/page/sub01/sub01_6.php">찾아오시는 길</a></li>
            </ul>
        </div>
    </div>
    <div id="sub_title">
        <div class="width-fixed">
            <h2>특허보유현황<span>Patent Status</span></h2>
        </div>
    </div>
    <div class="patents">
        <div class="width-fixed">
            <div class="owl-carousel" id="patent">
                <div class="item" data-hash="zero">
                    <div class="patent_con">
                        <div>
                            <div class="patent_img"><img src="<?php echo G5_IMG_URL."/patent1.jpg"; ?>" alt="특허증" /></div>
                                <div class="txt_b">
                                    <img src="<?php echo G5_IMG_URL."/symbol2_icon.png"; ?>" alt="삼각 구분 기호" />
                                    <h3>특허증</h3>
                                    <div class="table_06 text-left">
                                        <table>
                                            <colgroup>
                                                <col width="80px" />
                                                <col width="*" />
                                            </colgroup>
                                            <tr class="p_hidden">
                                                <th >등록번호</th>
                                                <td>제 0171469 호</td>
                                            </tr>
                                            <tr class="p_hidden">
                                                <th>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</th>
                                                <td>비금속성익스펜션조인트의 플랜지제조방법</td>
                                            </tr>
                                            <tr class="p_hidden">
                                                <th>등&nbsp;&nbsp;록&nbsp;&nbsp;일</th>
                                                <td>1998. 10. 20.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <div>
                            <div class="patent_img"><img src="<?php echo G5_IMG_URL."/patent2.jpg"; ?>" alt="특허증" /></div>
                            <div class="txt_b">
                                <img src="<?php echo G5_IMG_URL."/symbol2_icon.png"; ?>" alt="삼각 구분 기호" />
                                <h3>특허증</h3>
                                <div class="table_06 text-left">
                                    <table>
                                        <colgroup>
                                            <col width="80px" />
                                            <col width="*" />
                                        </colgroup>
                                        <tr class="p_hidden">
                                            <th >등록번호</th>
                                            <td>제 0521461 호</td>
                                        </tr>
                                        <tr class="p_hidden">
                                            <th>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</th>
                                            <td>단열용 무기섬유 파이프의 제조방법 및 장치</td>
                                        </tr>
                                        <tr class="p_hidden">
                                            <th>등&nbsp;&nbsp;록&nbsp;&nbsp;일</th>
                                            <td>2005. 10. 06.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-hash="ddd">
                    <div class="patent_con">
                        <div>
                            <div class="patent_img"><img src="<?php echo G5_IMG_URL."/patent1.jpg"; ?>" alt="특허증" /></div>
                            <div class="txt_b">
                                <img src="<?php echo G5_IMG_URL."/symbol2_icon.png"; ?>" alt="삼각 구분 기호" />
                                <h3>특허증</h3>
                                <div class="table_06 text-left">
                                    <table>
                                        <colgroup>
                                            <col width="80px" />
                                            <col width="*" />
                                        </colgroup>
                                        <tr class="p_hidden">
                                            <th >등록번호</th>
                                            <td>제 0171469 호</td>
                                        </tr>
                                        <tr class="p_hidden">
                                            <th>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</th>
                                            <td>비금속성익스펜션조인트의 플랜지제조방법</td>
                                        </tr>
                                        <tr class="p_hidden">
                                            <th>등&nbsp;&nbsp;록&nbsp;&nbsp;일</th>
                                            <td>1998. 10. 20.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
	include_once(G5_PATH.'/_tail.php');
?>