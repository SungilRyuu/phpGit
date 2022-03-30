<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $memberID = $_SESSION['memberID'];
    $requestTitle = $_POST['requestTitle'];
    $requestContents = $_POST['requestContents'];
    $requestPhoto = $_POST['photoUpload[]'];
    $regTime = time();

    // 이미지 파일, 크기, 이름, 형태 저장할 공간 임시파일 불러오기
    $imgFile = $_FILES['photoUpload[]'];
    $imgFileSize = $_FILES['photoUpload[]']['size'];
    $imgFileType = $_FILES['photoUpload[]']['type'];
    $imgFileName = $_FILES['photoUpload[]']['name'];
    $imgTempFile = $_FILES['photoUpload[]']['tmp_name'];

    $fileTypeAndExtension = explode("/", $imgFileType);
    $fileType = $fileTypeAndExtension[0];
    $fileExtension = $fileTypeAndExtension[1];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);

    //echo $fileType;

    if($fileType == "image") {
        if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif") {
            $imgDirection = "../../html/assets/img/request/";
            //$imgName = "Img_".time().rand(1, 99999)."."."{$fileExtension}";

            $sql = "SELECT memberID, requestTitle, requestContents, requestPhoto, regTime FROM myRequest WHERE memberID = $memberID";
            $queryResult = $connect -> query($sql);

            if($queryResult == true) {
                echo "resultQuery 쿼리 성공";
            } else {
                echo "resultQuery 쿼리 실패";
            }

            if(isset($imgFileName)) {
                $fileCount = count($imgFileName);
                var_dump($fileCount);

                $sql = "INSERT INTO myRequest(memberID, requestTitle, requestContents, requestPhoto, regTime) VALUES('$memberID' ,'$requestTitle', '$requestContents', '$imgFileName', '$regTime')";
                $sqlResult = $connect -> query($sql);

                for($count = 0; $count < $fileCount; $count++) {
                    $name = $_FILES['photoUpload[]']['name']['$count'];

                    $tempImgFile = $_FILES['photoUpload[]']['tmp_name'][$count];
                    $imgName = "Img_".time().rand(1, 99999)."."."{$fileExtension}";

                    $sqlResult = move_uploaded_file($tempImgFile, $imgDirection.$name);
                    $sqlResult = $connect -> query($sql);     
                }
            } else {
                echo "파일 이름이 설정되어 있지 않음";
            }

        } else {
            echo "<script>alert('이미지 파일 확장자는 jpg / jpeg / png / gif 파일을 지원합니다'); history.back(1);</script>";
        }

    } else {
        echo "<script>alert('이미지 파일을 업로드하세요');</script>";
    }

    if($sqlResult == true) {
        echo "쿼리 성공";
    } else {
        echo "쿼리 실패";
    }

    $sqlResult = move_uploaded_file($imgTempFile, $imgDirection.$imgName);


   //Header("Location:../board/requestList.php");
?>

</body>
</html>