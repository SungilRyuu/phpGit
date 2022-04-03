<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myLike (";
    $sql .= "likeID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "boardID int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (likeID)";
    $sql .= ") charset=utf8;";
    $result = $connect -> query($sql);
    
    if($result){
        echo "테이블 생성";
    } else {
        echo "생성 실패";
    }
?>