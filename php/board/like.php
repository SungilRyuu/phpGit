<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../connect/connect.php";

    $memberID = $_GET['memberID'];
    $boardID = $_GET['boardID'];
    $regTime = time();

    $sql = "SELECT * FROM myLike WHERE memberID = {$memberID} AND boardID = {$boardID}";
    $result = $connect -> query($sql);

    $count = $result -> num_rows;
    // echo $count;

    if($count == 0){
        $sql = "INSERT INTO myLike(memberID, boardID, regTime) VALUES('$memberID', '$boardID', '$regTime')";
        $connect -> query($sql);
        echo "<p>추가</p>";

    } else {
        $sql = "DELETE FROM myLike WHERE memberID = {$memberID} AND boardID = {$boardID}";
        $connect -> query($sql);
        echo "<p>삭제</p>";
    }
    
?>  
</body>
</html>