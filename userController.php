<!DOCTYPE html>
<html>
    <head>
        <title>布魯斯高麗菜</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./Css/controllerStyle.css">
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="./Javascript/test.js"></script>
    </head>
    <body>
        <header class="fixedTop">
            <div class="header">
                <a href="./mainPages.html"><img src="./image/brandnamephoto.png"></a>
            </div>
        </header>
        <div class="wrap">
            <div class="menuContainer">
                <div class="menuButtons">
                    <div class="homeButton">
                        <div class="pictureSqure">
                            <a href="./mainPages.html"><img src="./image/01.PNG"></a>
                        </div>
                    </div>
                    <div class="menuTab">
                        <ul class="tabPictureSqure">
                            <li><a href="#mc01"><img src="./image/02.PNG"></a></li>
                            <li><a href="#mc02"><img src="./image/03.PNG"></a></li>
                            <li><a href="#mc03"><img src="./image/04.PNG"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mcContainer">
                <div id="mc01" class="menuContent">
                    <div class="contentOne">
                        <ul class="coTabs">
                            <li><a href="#ic01"><button class="coButton">&nbsp&nbsp&nbsp&nbsp&nbsp概覽&nbsp&nbsp&nbsp&nbsp&nbsp</button></a></li>
                            <li><a href="#ic02"><button class="coButton">&nbsp&nbsp&nbsp&nbsp&nbsp分類&nbsp&nbsp&nbsp&nbsp&nbsp</button></a></li>
                            <li><a href="#ic03"><button class="coButton">&nbsp&nbsp&nbsp&nbsp&nbsp商品&nbsp&nbsp&nbsp&nbsp&nbsp</button></a></li>
                        </ul>
                    </div>
                    <div class="innerContainer">
                        <div id="ic01" class="innerContent">
                            <div class="topicSqure">
                                <h1>所有商品</h1>
                            </div>
                            <div class="functionBar">
                                <div class="searchF">
                                    <input type="search" id="siteSearch" name="searchBar" placeholder="  快速搜尋你想要的商品" aria-label="Search through site content">
                                </div>
                                <div class="addF">
                                    <p>新增</p>
                                    <!-- <select id="addSelect">
                                        <option value="">新增&nbsp</option>
                                        <option value="optionA">新增商品</option>
                                        <option value="optionB">新增種類</option>
                                    </select> -->
                                    <!-- <div id="addItems" style="display:none">
                                        <span><img src="./image/block02.JPG"></span>
                                    </div>
                                    <div id="addCategories" style="display:none">
                                        <span>
                                            <img src="./image/block02.JPG">
                                            <img src="./image/block02.JPG">
                                        </span>
                                    </div> -->
                                </div>
                                <div class="saveF">
                                    <p>儲存</p>
                                </div>
                            </div>
                            <?php
//載入資料庫,資料庫名稱localhost
$serverName = "localhost";
$userName = "root";
$pwd = "";
$dbname = "vegetableshop";

$conn = new mysqli($serverName, $userName, $pwd, $dbname);
//$conn = new sqli("localhost","root" , "");

if($conn ->connect_error){
 die("Connection failed: ".$connect_error);
}
echo "Connect successfully";
//SELECT `ID`, `Name`, `Description`, `PicturePath`, `Price`, `IfSoldOut`, `IfAvailable` FROM `vegetablelist`
$sql = "SELECT `ID`, `Name`, `Description`, `PicturePath`, `Price`, `IfSoldOut`, `IfAvailable` FROM `vegetablelist`";
echo ("<br>SQL is :".$sql ."<br>");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["ID"]. " <br> Name: " . $row["Name"]. " <br> Description: " . $row["Description"]. "<br> PicturePath: "
	// .$row["PicturePath"]. "<br> Price: " . $row["Price"]. "<br> IfSoldOut: " .$row["IfSoldOut"]. " <br> IfAvailable: " .$row["IfAvailable"]. "<br><br>";
    echo $row["PicturePath"].'<br>
    <div class="itemListSqure">
                <div id="list01" class="itemList">
                    <div class="pictureS">
                        <img scr='.$row["PicturePath"].'>
                    </div> 
                    <div class="itemNameS"> 
                        <p>'. $row["Name"] . $row["Description"].'</p>
                    </div> 
                </div>
            </div>';
    }
} else {
    echo "0 results";
}
?>
                            <div class="itemListSqure">
                                <div id="list01" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block01.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p>. $row["Name"]. . $row["Description"].</p>
                                        <!-- <p> 大禹嶺高麗菜(軟種) 一顆約1000g</p> -->
                                    </div>
                                    <div class="priceS">
                                        <p>NT$200</p>
                                    </div>
                                </div>
                                <div id="list02" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block02.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 小黃瓜 一根約120g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$20</p>
                                    </div>
                                </div>
                                <div id="list03" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block03.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 大白菜 一顆約1500g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$100</p>
                                    </div>
                                </div>
                                <div id="list04" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block04.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 南瓜 一顆約1000g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$30</p>
                                    </div>
                                </div>
                                <div id="list05" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block05.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 絲瓜 一顆約600g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$40</p>
                                    </div>
                                </div>
                                <div id="list06" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block06.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 番茄 一顆約150g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$25</p>
                                    </div>
                                </div>
                                <div id="list07" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block07.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 馬鈴薯 一顆約300g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$15</p>
                                    </div>
                                </div>
                                <div id="list08" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block08.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 洋蔥 一顆約300g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$15</p>
                                    </div>
                                </div>
                                <div id="list09" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block09.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 大黃瓜 一條約600g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$35</p>
                                    </div>
                                </div>
                                <div id="list10" class="itemList">
                                    <div class="pictureS">
                                        <img src="./image/block10.JPG">
                                    </div>
                                    <div class="itemNameS">
                                        <p> 白苦瓜 一條約350g</p>
                                    </div>
                                    <div class="priceS">
                                        <p>NT$40</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ic02" class="innerContent">
                            <div class="topSqure">
                                <div class="topicSqure">
                                    <h1>菜單種類</h1>
                                </div>
                                <div class="newCategories">
                                    <p>+ 新增種類</p>
                                </div>
                            </div>
                            <div class="searchArea">
                                <input type="search" id="siteSearch" name="searchBar" placeholder="  快速搜尋你想要的商品種類" aria-label="Search through site content">
                            </div>
                            <div class="categoriesList">
                            </div>
                        </div>
                        <div id="ic03" class="innerContent">
                            <img src="./image/block01.png">
                            <img src="./image/block01.png">
                            <img src="./image/block01.png">
                        </div>
                    </div>
                </div>
                <div id="mc02" class="menuContent">
                    <div class="contentTwo">
                       123
                    </div>
                </div>
                <div id="mc03" class="menuContent">
                    <div class="contentThree">
                        456
                        789
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>