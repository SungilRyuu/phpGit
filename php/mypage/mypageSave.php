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
        <!-- style -->
        <?php
        include "../include/style.php";
        ?>
    <!-- //style -->
</head>
<body>
    <?php
        include "../include/header.php";
    ?>
    <!-- //header  -->

    <main id="contents" class="gray">
    <h2 class="ir_so">컨텐츠 영역</h2>
        <div class="container">

<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $youPhone = $_POST['youPhone'];
    $youPass = $_POST['youPass'];
    $memberID = $_SESSION['memberID'];


    $youPhoto = $_FILES['youPhoto'];
    $youPhotoName = $_FILES['youPhoto']['name'];
    $youPhotoType = $_FILES['youPhoto']['type'];
    $youPhotoTmp = $_FILES['youPhoto']['tmp_name'];
    $youPhotoSize = $_FILES['youPhoto']['size'];

    echo $youPhoto;
    echo $youPhotoName;
    echo $youPhotoType;
    echo $youPhotoTmp;
    echo $youPhotoSize;

    $fileTypeExtension = explode("/", $youPhotoType);
    $fileType = $fileTypeExtension[0]; //img
    $fileExtension = $fileTypeExtension[1]; //jpeg

    // echo $youEmail, $youName, $youBirth, $youPhone, $youPass, $memberID;

    if($fileType != "" || $fileType != NULL){
        //이미지 용량 확인
        if((int)$youPhotoSize > 1048576) {
            echo "<script>alert('이미지 용량이 1MB가 넘습니다. 다른 사진을 선택해주세요.'); history.back(1);</script>";
        } else {
            $youPhotoImgDir = "../assets/img/mypage/";
            $youPhotoName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
        }
    } else {
        $youPhotoName = "default.svg";
    }



    //메시지 출력
    function msg($alert){
        echo "<p class='alert'>($alert)</p>";
    }

    $sql = "SELECT memberID, youPass FROM myMember WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);
    $myPageInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($youPass !== $myPageInfo['youPass']){
        msg("비밀번호가 일치하지 않습니다.<br>다시 한 번 확인해주세요.");
        exit;
    } else {
        $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}', youPhoto = '{$youPhotoName}' WHERE memberID = '{$memberID}'";

        $result = $connect -> query($sql);

        $result = move_uploaded_file($youPhotoTmp, $youPhotoImgDir.$youPhotoName);

        // Header("Location: mypageModify.php");

    }
?>

        </div>
    </main>


    <!-- //main -->
    <?php
        include "../include/footer.php";
    ?>
    <!--//footer -->

</body>

</html>