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
    <title>회원 정보</title>
    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
    <!-- //style -->
</head>
<body>
    <?php
        include "../include/skip.php";
    ?>
    <!-- //skip -->
    
    <?php
        include "../include/header.php";
    ?>
    <!-- //header  -->
    
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="container">
                <h3 class="section__title">퀴즈</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트엔드 개발자를 위한 강의 퀴즈입니다.
                </p>
                <div class="quiz__inenr">
                    <div class="quiz__header"></div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num">1</span>
                            <span class="quiz__ask">다음 중 자바스크립트 문법으로 틀린 것은?</span>
                            <div class="quiz__desc">설명에 대한 예시</div>
                        </div>
                    </div>
                    <div class="quiz__footer"></div>
                </div>
            </div>
        
        </section>
    </main>
    <!-- //main -->
    <?php
        include "../include/footer.php";
    ?>
    <!--//footer -->
</body>
</html>