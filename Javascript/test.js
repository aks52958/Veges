$(document).ready(function(){

    //製作訂單，菜單，分析選項的分頁。
    let $li = $('ul.tabPictureSqure li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.menuContent').hide();

    $li.click(function(){
        $($(this).find('a').attr('href')).show().siblings('.menuContent').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });

    //製作訂單中，概覽，分類，商品選項的分頁。
    let $li2 = $('ul.coTabs li');
    $($li2.eq(0).addClass('li active').find('a').attr('href')).siblings('.innerContent').hide();

    $li2.click(function(){
        $($(this).find('a').attr('href')).show().siblings('.innerContent').hide();
        $(this).addClass('li active').siblings('.li active').removeClass('li active');
    });
    
    //執行概覽Tab頁面中的"新增"下拉是選單。
    // $("#addSelect").on("change", function(){
    //     let selectedValue = $("#addSelect").val();

    //     if(selectedValue == "optionA"){
    //         $("#addItems").show();
    //         $("#addCategories").hide();
    //     }
    //     if(selectedValue == "optionB"){
    //         $("#addItems").hide();
    //         $("#addCategories").show();
    //     }
    // });
});

//製作概覽裡面，新增按鈕的分頁。
$(".addF").click(function(event){
    $("body").append('')
})