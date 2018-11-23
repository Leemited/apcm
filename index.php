<?php
define('_INDEX_', true);
include_once('./_common.php');

// 초기화면 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_index'] && is_file(G5_PATH.'/'.$config['cf_include_index'])) {
    include_once(G5_PATH.'/'.$config['cf_include_index']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}
$main=true;
include_once('./_head.php');
?>

<div id="main_ani">
    <div class="owl-carousel" id="main">
        <div class="item" style="background:url('/img/main_img.jpg') no-repeat center;"></div>
        <div class="item" style="background:url('/img/main_img.jpg') no-repeat center;"></div>
        <div class="item" style="background:url('/img/main_img.jpg') no-repeat center;"></div>
    </div>
</div>


<div id="main_notice">
    <div class="width-fixed">
        <div class="con_fix">
            <ul>
                <li>
                    <a href="" title="">
                        <img src="<?php echo G5_IMG_URL."/notice_speaker_icon.png"; ?>" alt="공지사항" class="speaker" />
                        <span>공지사항</span>
                        <!--<img src="<?php /*echo G5_IMG_URL."/plus_icon.png"; */?>" alt="더하기" />-->
                    </a>
                </li>
            </ul>
        </div>
        <div class="con">
            <ul style="margin-top: -50px;">
                <li>
                    <a href="<?php echo G5_BBS_URL."/bo_table=notice&amp;wr_id=4"; ?>" title="">
                        <span>새로운 상품을 만나보세요!  신상 보온-단열제품  「 Reinjac™」<span>
                    </a>
                </li>
                <li>
                    <a href="<?php /*echo G5_BBS_URL."board.php?bo_table=notice&amp;wr_id=3"; */?>" title="">
                        <span>홈페이지 OPEN 안내<span>
                    </a>
                </li>
                <span>
                    <img src="<?php echo G5_IMG_URL."/plus_icon.png"; ?>" alt="더하기" />
                    <!--<a href="javascript:" title=""><img src="<?php /*echo G5_IMG_URL."/notice_up_icon.png"; */?>" alt="이전" />prev</a>
                    <a href="javascript:" title=""><img src="<?php /*echo G5_IMG_URL."/notice_down_icon.png"; */?>" alt="다음" />next</a>-->
                </span>
            </ul>
        </div>
    </div>
</div>

<div id="main_content">
    <div class="width-fixed">
        <div class="main_product">
            <div class="left_pdname">
                <h2>제품소개<span>Product Introduction</span></h2>
                <ul class="slide_menu">
                    <li class="active" id="menu1">
                        <a href="#" title="">카본 복합소재</a>
                    </li>
                    <li id="menu2">
                        <a href="#" title="">익스펜션 조인트</a>
                    </li>
                    <li id="menu3">
                        <a href="#" title="">보온-단열제품</a>
                    </li>
                    <li id="menu4">
                        <a href="#" title="">재봉사</a>
                    </li>
                </ul>
            </div>
            <div class="right_pdcons">
                <div class="complexs">
                    <div class="owl-carousel" id="complex">
                        <div class="item" data-hash="zero">
                            <div class="pd_top">
                                <h2>CFRP<span>Carbon Fibre Reinforced Plastic</span></h2>
                                <p>CFRP는 carbon fibre 보강이 된 강화 플라스틱으로 강성이 상당히 높고 가벼우며 전기 및 열전도성이 뛰어나고
                                    엑스레이 투과율이 높아 의료기기의 소재로 각광받는 소재입니다.
                                    특히, 반도체 및 고온로 사업분야의 핵심부품으로 전극 단열재 고정용 부품으로 사용됩니다.</p>
                            </div>
                            <div class="pd_feature">
                                <div class="img_l"><img src="<?php echo G5_IMG_URL."/cfrp_1.png"; ?>" alt="CFRP 제품사진" /></div>
                                <div class="txt_r">
                                    <img src="<?php echo G5_IMG_URL."/symbol2_icon.png"; ?>" alt="삼각 구분 기호" />
                                    <h3>CFRP의 일반적 특징</h3>
                                    <ul>
                                        <li>열팽창 계수가 낮음</li>
                                        <li>치수 안정성, 전기전도성, 진동 저감이 뛰어남</li>
                                        <li>엑스레이 투과율이 높음</li>
                                        <li>인장강도가 철보다 5~10배가량 높음</li>
                                        <li>부식되지 않음</li>
                                        <li>밀도가 철보다 4배 높음</li>
                                        <li>화학 안정성이 뛰어남</li>
                                        <li>열전도도가 높음</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="" title="">MORE</a>
                        </div>
                        <div class="item" data-hash="tttt">
                            <div class="pd_top">
                                <h2>카본-카본<span>carbon carbon</span></h2>
                                <p>카본-카본 복합체는 현존하는 가장 진보되고 유망한 엔지니어링 재료 중 하나이며 탄소 기지(carbon fibre)에 탄소섬유(carbon fibre)를 보강한 재료로서 고온(~3000℃)에서 기계적 강도 및 내화학성이 우수한 첨단소재입니다.</p>
                            </div>
                            <div class="pd_feature">
                                <h3>Super heat insulation</h3>
                                <p>Carbon fibre를 이용한 제품으로 판재(board), 원통(cylinder) 등의 형태로 가공하여 함침 탄화 고순화 처리를 하여 생산된 제품으로 불활성 기체 하에서 3000℃까지 사용 가능한 제품입니다.</p>
                            </div>
                            <a href="" title="">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_low">
            <div class="main_address">
                <div class="address_guid common">
                    <h2>찾아오시는길<span>Location</span></h2>
                    <a href="" title="">MORE<img src="<?php echo G5_IMG_URL."/plusC_icon.png"; ?>" alt="더보기" /></a>
                </div>
                <div id="map" style="width: 100%; height: 255px; position: relative;">
                    <div class="address_info">
                        <img src="<?php echo G5_IMG_URL."/symbol_icon.jpg"; ?>" alt="네모 모양" />
                        <h2>주소안내</h2>
                        <p>충청북도 청주시 흥덕구 오송읍 만수길 14-18, 1F</p>
                    </div>
                </div>
            </div>
            <div class="main_sub">
                <div class="main_support">
                    <div class="customer common">
                        <h2>고객지원<span>Customer Support</span></h2>
                        <p>043-232-9784</p>
                        <div class="ssub">
                            <p>운영시간</p>
                            <ul>
                                <li>09:00 ~ 12:00, 13:00 ~ 18:00 (평일)</li>
                                <li>09:00 ~ 12:30 (토요일)</li>
                                <li>업무 외 시간에는 서비스 문의하기를 이용해 주세요.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inquiring">
                        <a href="" title="고객지원 게시판으로">
                            <img src="<?php echo G5_IMG_URL."/help_icon.png"; ?>" alt="말풍선 안에 HELP" />
                            <p>정확한 상담을 위한 고객지원 게시판</p>
                            <span>바로가기</span>
                        </a>
                    </div>
                </div>
                <div class="main_store common">
                    <a href="" title="스토어 바로가기">
                        <img src="<?php echo G5_IMG_URL."/store_icon.png"; ?>" alt="카트" class="carts" />
                        <div>
                            <h2>스마트 스토어</h2>
                            <p>APCM의 혁신적인 상품을 만나보세요!</p>
                        </div>
                        <img src="<?php echo G5_IMG_URL."/view_icon.png"; ?>" alt="오른쪽 화살표" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(function () {
        $(".slide_menu li").each(function(){
           $(this).click(function(){
              if(!$(this).hasClass("active")){
                  $(this).addClass("active");
                  $(".slide_menu li").not($(this)).removeClass("active");
                  var id = $(this).attr("id");
                  if(id!=""){
                      $.ajax({
                          url:g5_url+"/page/ajax/main_slide_item.php",
                          method:"POST",
                          data:{id:id}
                      }).done(function(data){
                          $("#complex").remove();
                          $(".complexs").append(data);
                      })
                  }
              }
           });
        });
        $(".tab_content").hide();
        $(".tab_content:first").show();
        $("#main_left_top > ul > li").click(function () {
            $("#main_left_top ul li").removeClass("active");
            //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
            $(this).addClass("active");
            $(".tab_content").hide()
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn();
        });
    });
    $(".main_icon div a").hover(
        function(){
            var over = $(this).find("img").attr("data-over");
            $(this).find("img").attr("src",over);
        },
        function(){
            var src = $(this).find("img").attr("data-src");
            $(this).find("img").attr("src",src);
        }
    );

    setTimeout(function(){main_notice_slide()},5000);
    var n=0;
    var main_notice_len=$("#main_notice > div > .con > ul > li").length;
    /* 메인배너 슬라이드 */
    function main_notice_slide(act,roop){
        n++;
        if(n>=main_notice_len){
            n=0;
        }
        go=n * -50;
        $("#main_notice > div > .con > ul").animate(
            {'margin-top': go+'px'}
        );
        //setTimeout(function(){main_notice_slide()},5000);
    }

    /*-var proowls = $("#complex");
    proowls.owlCarousel({
        animateOut: 'fadeOut',
        autoplay:false,
        autoplayTimeout:0,
        autoplaySpeed:0,
        smartSpeed:0,
        loop:true,
        dots:true,
        nav:true,
        navText: [ '', '' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });*/



    var is_admin="<?php echo $is_admin; ?>";
    function initMap() {
        var latlng = new google.maps.LatLng(36.633668, 127.330261);
        var markLocation = new google.maps.LatLng(36.633668, 127.330261);
        var myOptions =
            {
                zoom: 17,
                center: latlng,
                mapTypeControl: false,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    mapTypeIds: [
                        google.maps.MapTypeId.ROADMAP,
                        google.maps.MapTypeId.TERRAIN
                    ]
                }
            };

        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        //var myIcon = new google.maps.MarkerImage("../img/maps_marker.png");

        var myIcon = {
            url : "../img/maps_marker.png",
            scaledSize:new google.maps.Size(120,90)
        };

        var myMarker = new google.maps.Marker(
            {
                position: latlng,
                map: map,
                icon: myIcon,
                animation:google.maps.Animation.BOUNCE,
                title: 'APCM'
            });
    }





</script>
<?php
include_once('./_tail.php');
?>
