<?php
include "../connect/connect.php";
include "../connect/session.php";

$memberID = $_SESSION['memberID'];
$boardID = $_GET['boardID'];
$regTime = time();

$sql = "SELECT * FROM myLike WHERE memberID = '$memberID' AND boardID = '$boardID'";
$sqlResult = $connect -> query($sql);
$myLikeData = $sqlResult -> num_rows;

if($sqlResult == false) {
    echo "<script>alert('로그인이 되어 있지 않습니다');</script>";
    Header("Location: ../login/login.php");
}


if($myLikeData == 0) {
    $sql = "INSERT INTO myLike(memberID, boardID, regTime) VALUES('$memberID', '$boardID', '$regTime')";

    $result = $connect -> query($sql);
    echo "<script>history.back(1);</script>";

} else {
    $sql = "DELETE FROM myLike WHERE boardID = '$boardID' AND memberID = '$memberID'";

    $result = $connect -> query($sql);
    echo "<script>history.back(1);</script>";
}

if($result == true) {
    echo "success";
} else {
    echo "failture";
}
?>