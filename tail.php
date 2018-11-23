<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 하단 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_tail'] && is_file(G5_PATH.'/'.$config['cf_include_tail'])) {
    include_once(G5_PATH.'/'.$config['cf_include_tail']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
	<footer id="footer">
        <div class="ft_info">
            <div class="width-fixed">
                <ul>
                    <li>
                        <a href="#n" title="이용약관"><img src="<?php echo G5_IMG_URL ?>/ft_info_li2.png" alt="이용약관"></a>
                    </li>
                    <li>
                    <span>|</span>
                    </li>
                    <li>
                        <a href="#n" title="개인정보취급방침"><img src="<?php echo G5_IMG_URL ?>/ft_info_li1.png" alt="개인정보취급방침"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ft_txt">
            <div class="width-fixed">
                <div class="ft_logo">
                    <h1><img src="<?php echo G5_IMG_URL ?>/ft_logo.png" alt="주식회사 에이피씨엠" /></h1>
                </div>
                <div class="ft_copy">
                    <p>
                        <span class="text-bold">주식회사 에이피씨엠</span>
                        &nbsp;&nbsp;대표 : 이숙용 &nbsp;&nbsp;충북 청주시 흥덕구 오송읍 만수길 14-18<br> 사업자등록번호 : 660-88-00324&nbsp;&nbsp;대표전화 : 043-232-9784&nbsp;&nbsp;이메일 : apcmdesk@gmail.com</p>
                    <p class="ft_copy_p">Copyright 2018. APCM. All rights reserved.</p>
                 </div>
                <div class="ft_sns">
                    <div class="sns_line">
                        <strong>SNS<span></span></strong>
                    </div>
                    <ul>
                        <li>
                            <a href="#n" title="">
                                <img src="<?php echo G5_IMG_URL ?>/sns_f.png" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#n" title="">
                                <img src="<?php echo G5_IMG_URL ?>/sns_i.png" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="#n" title="">
                                <img src="<?php echo G5_IMG_URL ?>/sns_n.png" alt="Smart Store">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</footer>

<script language='javascript' src='<?php echo G5_JS_URL; ?>/owl.carousel.js'></script>
<script type="text/javascript">
	$(document).ready(function() {
		var owl = $(".owl-carousel");
		owl.owlCarousel({
			animateOut: 'fadeOut',
			autoplay:true,
			autoplayTimeout:5000,
			autoplaySpeed:1000,
			autoplayHoverPause:true,
			loop:true,
			items:1,
			smartSpeed:1000,
			dots:true,
			lazyLoad:false,
		});
        var owl3 = $("#patent");
        owl3.owlCarousel({
            nav:true
        })

		$(".next").on('click',function(){
			owl.trigger('next.owl.carousel',[1000]);
		});
		$(".prev").on('click',function(){
			owl.trigger('prev.owl.carousel',[1000]);
		});
	});
</script>
<?php
include_once(G5_PATH."/tail.sub.php");
?>