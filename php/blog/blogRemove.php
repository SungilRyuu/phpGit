<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

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
    $blogID = $_GET['blogID'];
    $memberID = $_SESSION['memberID'];

    $sql = "SELECT memberID FROM myBlog WHERE blogID = '$blogID'";
    $result = $connect -> query($sql);
    
    $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
    

    if($memberID != $blogInfo['memberID']){
        echo "<script>alert('권한이 없습니다.');history.back(1);</script>";
    }
    
    //쿼리문 작성(보드 ID값 삭제하기)
    $sql = "UPDATE myBlog SET blogDelete = 0 WHERE blogID = {$blogID}";
    $connect -> query($sql);    
    
    echo "<script>alert('삭제되었습니다.'); location.href = 'blog.php';</script>";
?>

</body>
</html>
