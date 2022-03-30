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
            <div class="member-form">
                <h3>회원 정보</h3>
                <div class="join-intro">
                    <div class="face">
                        <img src="../assets/img/mypage/default.svg" alt="기본이미지">
                    </div>
<?php
    $memberID = $_SESSION['memberID'];

    //youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro
    $sql = "SELECT memberID, youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro FROM myMember WHERE memberID = {$memberID}";
    
    $result = $connect -> query($sql);


    if($result){
        $myPageInfo = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<div class='intro'>".$myPageInfo['youIntro']."</div>";
    }
?>
                </div>
                <div class="join-info">
                    <ul>
<?php
    echo "<li><strong>이메일</strong><span>".$myPageInfo['youEmail']."</span></li>";
    echo "<li><strong>닉네임</strong><span>".$myPageInfo['youNickName']."</span></li>";
    echo "<li><strong>이름</strong><span>".$myPageInfo['youName']."</span></li>";
    echo "<li><strong>생년월일</strong><span>".$myPageInfo['youBirth']."</span></li>";
    echo "<li><strong>연락처</strong><span>".$myPageInfo['youPhone']."</span></li>";
    echo "<li><strong>성별</strong><span>".$myPageInfo['youGender']."</span></li>";
    echo "<li><strong>사이트</strong><span>".$myPageInfo['youSite']."</span></li>";
?>
                    </ul>

                </div>
                <div class="join-btn">
                    <a href="mypageModify.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
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