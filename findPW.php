<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
<?php
    include '../include/style.php';
?>
</head>
</head>
<body>
<?php
    include '../include/header.php';
?>
<?php
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];

    echo $youPass, $youPassC;

?>
    <main id="main__login">
        <section id="loginBox" class="forgetIDBox">
            <div class="loginBox_img"></div>
                <div class="loginBox_text">
                    <h4 class="forgetID mb40">PW 수정</h4>
                    <p class="forgetDesc mt40">비밀번호 수정이 완료되었습니다.</p>
                    <a href='login.php' class='goLogin mt50'>로그인 하러 가기</a>
                </div>
            </div>
        </section>

    </main>
</body>
</html>