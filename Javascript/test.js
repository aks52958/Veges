console.log("123");
$(".menuTab").each(function(index){
    console.log(this);
    $(this).click(function(e){
        trigglatab();
        triggletabContent();
        $(this).toggleClass("active");
        $(".tabC")
            .eq(index)
            .toggleClass("active");
    });
});

function trigglatab() {
    $(".menuTab").each(function(){
        $(this).removeClass("active");
    });
}

function triggletabContent(){
    $(".tabC").each(function(){
        $(this).removeClass("active");
    });
}