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
//SELECT `ID`, `Name`, `Description`, `PicturePath`, `Price`, `IfSoldOut` FROM `vegetablelist`
$sql = "SELECT `ID`, `Name`, `Description`, `PicturePath`, `Price`, `IfSoldOut` FROM `vegetablelist`";
echo ("<br>SQL is :".$sql ."<br>");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo"<br>";
    //     echo "id: " . $row["ID"]. " <br> Name: " . $row["Name"]. " <br> Description: " . $row["Description"]. "<br> PicturePath: "
	// .$row["PicturePath"]. "<br> Price: " . $row["Price"]. "<br> IfSoldOut: " .$row["IfSoldOut"]. "<br><br>";
    // console.log($row["PicturePath"]);
    }
} else {
    echo "0 results";
}
?>