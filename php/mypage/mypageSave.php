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

    // echo $youEmail, $youName, $youBirth, $youPhone, $youPass, $memberID;

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
        $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}' WHERE memberID = '{$memberID}'";
        $connect -> query($sql);
    }
?>
        </div>
    </main>


    <!-- //main -->
    <?php
        include "../include/footer.php";
    ?>
    <!--//footer -->
<script>
location.href = "mypage.php";
</script>

</body>

</html>