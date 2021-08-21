// Making image gallery with review
$(".blockMain a").click(function(event) {
    let vagesImg = $(this).attr('href');
    $("body").append('<div class="vagesImgWrap"><div class="vagesImg"><img src="'+vagesImg+'"></div><div class="allContainer"><div class="vagesName"><h1>高麗菜 軟種 (顆)</h1></div><div class="vagesDetile"><p>一顆約1000-2400g<br><br>※市場鮮食 依現場供貨重量會有些許誤差。※本產品因網路呈現略有差異，圖片僅供參考。<br><br>[本店免開統一發票] 本商家所提供的商品沒有含有任何依法規應揭露之肉類食材 (上開肉品資訊是由我們所合作之商家合作夥伴所提供。如對上開資訊有任何疑問，請直接與商家合作夥伴聯繫)</p></div><div class="amountButton"><button>-</button><p>1</p><button>+</button></div><div class="vagesCartButton"><button class="finalAmount" value="加入購物車 $200">加入購物車 $30</button></div></div></div>');

    // Set removement of review
    // When user click white space, then the review is closed
    $(".vagesImgWrap").click(function(event) {
        setTimeout(function(){
            $(".vagesImgWrap").remove();
        })
    });
    $(".vagesImg").click(function(event) {
        return false;
    });
    $(".allContainer").click(function(event) {
        return false;
    });

    return false;
});

// // Making Tabs Menu
// $(document).ready(function() {
//     $('.gallery-box').show();

//     $('.post_img').click(function(event) {
//         let post_index = $(this).index();
//         $(this).addClass('post_gallery');
//         $('.post_img').eq(post_index).show();
//     });
// });