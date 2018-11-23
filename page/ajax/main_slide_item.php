<?php
include_once ("../../common.php");
?>
<div class="owl-carousel" id="complex">
<?php
if($id=="menu1"){?>
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
<?php }else if($id=="menu2"){?>
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
                <h3>CFRP의 afeaewfaewfeaw 특징</h3>
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
            <h2>카본-카본<span>cfafaefeaefa</span></h2>
            <p>카본-카본 복합체는 현존하는 가장 진보되고 유망한 엔지니어링 재료 중 하나이며 탄소 기지(carbon fibre)에 탄소섬유(carbon fibre)를 보강한 재료로서 고온(~3000℃)에서 기계적 강도 및 내화학성이 우수한 첨단소재입니다.</p>
        </div>
        <div class="pd_feature">
            <h3>Super heat insulation</h3>
            <p>Carbon fibre를 이용한 제품으로 판재(board), 원통(cylinder) 등의 형태로 가공하여 함침 탄화 고순화 처리를 하여 생산된 제품으로 불활성 기체 하에서 3000℃까지 사용 가능한 제품입니다.</p>
        </div>
        <a href="" title="">MORE</a>
    </div>
<?php }else if($id=="menu3"){?>
<?php }else if($id=="menu4"){?>
<?php }?>

</div>
<script>
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
        dots:false,
        lazyLoad:false,
    });
    $(".next").on('click',function(){
        owl.trigger('next.owl.carousel',[1000]);
    });
    $(".prev").on('click',function(){
        owl.trigger('prev.owl.carousel',[1000]);
    });
</script>