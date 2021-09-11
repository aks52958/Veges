// 製作商品視窗，顯示商品名稱、內容、照片以及購買數量。
$(".blockContent a").click(function(event) {
    // 設定點選的商品圖片同為視窗商品圖片。
    let vagesImg = $(this).attr('href');
    
    // 當商品被點選時，新增一個視窗頁面。
    $("body").append('<div class="vagesImgWrap"><div class="vagesImg"><img src="'+vagesImg+'"></div><div class="allContainer"><div class="vagesName"><h1>高麗菜 軟種 (顆)</h1></div><div class="vagesDetile"><p>一顆約1000-2400g<br><br>※市場鮮食 依現場供貨重量會有些許誤差。※本產品因網路呈現略有差異，圖片僅供參考。<br><br>[本店免開統一發票] 本商家所提供的商品沒有含有任何依法規應揭露之肉類食材 (上開肉品資訊是由我們所合作之商家合作夥伴所提供。如對上開資訊有任何疑問，請直接與商家合作夥伴聯繫)</p></div><div class="amountButton"><button>-</button><p>1</p><button>+</button></div><div class="vagesCartButton"><button class="finalAmount" value="加入購物車 $200">加入購物車 $30</button></div></div></div>');

    // 製作視窗移除。
    // 當鼠標點選視窗以外的地方，視窗移除。
    $(".vagesImgWrap").click(function(event) {
        setTimeout(function(){
            $(".vagesImgWrap").remove();
        })
    });
    // 當鼠標點到商品圖片，視窗不移除。
    $(".vagesImg").click(function(event) {
        return false;
    });
    // 當鼠標點到內容部分，視窗不移除。
    $(".allContainer").click(function(event) {
        return false;
    });
    return false;
});

//製作菜單，套餐組合，零時，衣服的分頁。
$(document).ready(function(){
    let $li = $('ul.sortSqure li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.blockContent').hide();

    $li.click(function(){
        $($(this).find('a').attr('href')).show().siblings('.blockContent').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });

    $("#btn_login").click(function(){
        console.log("hahahhahahao");
        $("#id01").show();
    })
})