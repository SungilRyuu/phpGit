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
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $memberID = $_SESSION['memberID'];
    $blogAuthor = $_SESSION['youName'];
    $blogTitle = $_POST['blogTitle'];
    $blogContents = $_POST['blogContents'];
    $blogCate = $_POST['blogCate'];
    $blogView = 1;
    $blogLike = 0;

    $blogImgFile = $_FILES['blogImgFile'];
    $blogImgFileName = $_FILES['blogImgFile']['name'];
    $blogImgFileType = $_FILES['blogImgFile']['type'];
    $blogImgFileTmp = $_FILES['blogImgFile']['tmp_name'];
    $blogImgFileSize = $_FILES['blogImgFile']['size'];

    $blogRegTime = time();

    $blogTitle = $connect -> real_escape_string($blogTitle);
    $blogContents = $connect -> real_escape_string($blogContents);


    // echo $memberID, $blogTitle, $blogContents, $blogCate, $blogView, $blogLike, $blogRegTime, $blogImgFile, $blogAuthor;

    // echo "<pre>";
    // var_dump($blogImgFileSize);
    // echo "</pre>";

    // array(5) {
    //     ["name"]=>
    //     string(7) "get.jpg"
    //     ["type"]=>
    //     string(10) "image/jpeg"
    //     ["tmp_name"]=>
    //     string(14) "/tmp/phpEg40hC"
    //     ["error"]=>
    //     int(0)
    //     ["size"]=>
    //     int(298049)
    //   }

    //이미지 파일명 확인
    //image/jpeg 에서 jpeg만을 가져와야 함 -> split
    $fileTypeExtension = explode("/", $blogImgFileType);
    $fileType = $fileTypeExtension[0]; //img
    $fileExtension = $fileTypeExtension[1]; //jpeg
        
    // echo $fileType;
    // 이미지 확인 작업 , 이미지 확장자 확인 작업
    
    if($fileType == "" || $fileType == NULL){
        //확장자 확인
        if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "webp" || $fileExtension == "png"){
            $blogImgDir = "../assets/img/blog/";
            $blogImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";

            $sql = "INSERT INTO myBlog(memberID, blogTitle, blogContents, blogCate, blogAuthor, blogView, blogLike, blogImgFile, blogImgSize, blogDelete, blogRegTime) 
            VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCate', '$blogAuthor', '$blogView', '$blogLike','$blogImgName','$blogImgFileSize', '1', '$blogRegTime')";
        } else {
            echo "<script>alert('지원하는 이미지 파일 형식이 아닙니다.<br>jpg, jpeg, png, gif, webp 사진 파일만 지원합니다.'); history.back(1);</script>";
        }
    } else {
        $sql = "INSERT INTO myBlog(memberID, blogTitle, blogContents, blogCate, blogAuthor, blogView, blogLike, blogImgFile, blogDelete, blogRegTime) 
        VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCate', '$blogAuthor', '$blogView', '$blogLike','default.svg', '1', '$blogRegTime')";
    }


    //이미지 용량 확인
    if((int)$blogImgFileSize > 1048576) {
        echo "<script>alert('이미지 용량이 1MB가 넘습니다. 다른 사진을 선택해주세요.'); history.back(1);</script>";
    }

    // $sql = "INSERT INTO myBlog(memberID, blogTitle, blogContents, blogCate, blogAuthor, blogView, blogLike, blogImgFile, blogRegTime) 
    // VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCate', '$blogAuthor', '$blogView', '$blogLike','$blogImgFile', '$blogRegTime')";
    
    $result = $connect -> query($sql);

    $result = move_uploaded_file($blogImgFileTmp, $blogImgDir.$blogImgName);

    Header("Location: blog.php");
?>
    
</body>
</html>