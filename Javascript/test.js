$(document).ready(function(){
    //製作訂單，菜單，分析選項的分頁。
    let $li = $('ul.tabPictureSqure li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.menuContent').hide();

    $li.click(function(){
        $($(this).find('a').attr('href')).show().siblings('.menuContent').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });

    //製作菜單中，概覽，分類，商品選項的分頁。
    let $li2 = $('ul.coTabs li');
    $($li2.eq(0).addClass('li active').find('a').attr('href')).siblings('.innerContent').hide();

    $li2.click(function(){
        $($(this).find('a').attr('href')).show().siblings('.innerContent').hide();
        $(this).addClass('li active').siblings('.li active').removeClass('li active');
    });
    
    //製作概覽裡面，新增按鈕的分頁。
    $(".addF").click(function(event){
        // console.log("hello here");
        $(".controllContainer").append('<form name="form"><div class="editContainer"><div class="editTopSqure"><div class="editItems"><h1>新增商品</h1></div><div class="editSave"><input type="submit" name="submit" value="儲存"></div></div><div class="editName"><div class="textName"><p>名稱</p></div><input required type="text" name="name" id="name"></div><div class="editDescription"><div class="textDescription"><p>說明(選填)</p></div><textarea cols="44" rows="7" name="description" id="description" placeholder="輸入說明"></textarea></div><div class="editSoldOut"><div class="ifSoldOut"><input id="ifCheck" type="checkbox" name="ofCheck"></div><div class="textSoldOut"><p>已賣完</p></div></div><div class="editBottomSqure"><div class="itemsCategories"><h1>商品分類</h1></div><div class="addCategories"><p> + </p></div></div><div class="price"><div class="textPrice"><p>價格</p></div><div class="inputPrice">NT$<input required type="text" id="price" name="price"></div></div><div class="unitBox"><div class="textUnit"><p>單位</p></div><div class="selectUnit"><select name="unit" id="unit" required><option>請選擇單位</option><option value="jin">斤</option><option value="banJin">半斤</option><option value="ge">個</option><option value="ba">把</option><option value="tiao">條</option><option value="bao">包</option><option value="ke">顆</option><option value="pian">片</option><option value="gen">根</option><option value="long">籠</option><option value="xiang">箱</option><option value="zhi">隻</option><option value="he">盒</option></select></div></div></div></form>');
        $(".editSave input").click(function(event){
            if($("#name").val() == ""){
                alert("蔬菜全名不能為空");
                return false;
            } else if ($("#description").val() == ""){
                alert("蔬菜說明不能為空");
                return false;
            } else if ($("#ifCheck").val() == ""){
                alert("是否賣完不能為空");
                return false;
            } else if ($("#price").val() == ""){
                alert("蔬菜價格不能為空");
                return false;
            } else if ($("#unit").val() == ""){
                alert("蔬菜單位不能為空");
                return false;
            }
            setTimeout(function(){
                $(".controllContainer form").remove();
            })
            let vName = $("form").find("#name").val();
            let vDescription = $("form").find("#description").val();
            let ifCheck = $("form").find("#ifCheck").val();
            let vPrice = $("form").find("#price").val();
            let vUnit = $("form").find("#unit").val();

            console.log("蔬菜全名=" + vName);
            console.log("蔬菜說明=" + vDescription);
            console.log("是否賣完=" + ifCheck);            
            console.log("蔬菜價格=" + vPrice);
            console.log("蔬菜單位=" + vUnit);
        });
        $(".menuContent").click(function(event){
            setTimeout(function(){
                $(".controllContainer form").remove();
            })
        });
        $(".menuContainer").click(function(event){
            setTimeout(function(){
                $(".controllContainer form").remove();
            })
        }); 
        $(".controllContainer form").click(function(event){
            return false;
        });
        return false;
    });

    //製作分類裡面，新增種類按鈕的分頁。
    $(".newCategories").click(function(event){
        $(".controllContainer").append('<form></form>')
    });


});

// function processformData(){
//     let inputElement = document.getElementsByTagName('input')
//     let save = inputElement[0].value;
//     let name = inputElement[1].value;
//     let description= inputElement[2].value;
//     let price= inputElement[3].value;
//     let unit = inputElement[4].value;
//     console.log(save);
//     console.log(name);
//     console.log(description);
//     console.log(price);
//     console.log(unit);
// }