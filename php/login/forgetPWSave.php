<?php
include "../connect/connect.php";
?>
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
    <main id="main__login">

<?php
    $youEmail = $_POST['youEmail'];
    $youPhone = $_POST['youPhone'];
    $youBirth = $_POST['youBirth'];

    // echo $youEmail, $youBirth, $youBirth;

    $youPhone = $connect -> real_escape_string($youPhone);
    $youBirth = $connect -> real_escape_string($youBirth);
    
    $searchString = "-";
    $replaceString = "";
    $originalString = $youPhone;
    
    $youPhone = str_replace($searchString, $replaceString, $originalString);

    $originalString = $youBirth;
    
    $youBirth = str_replace($searchString, $replaceString, $originalString);

    $sql = "SELECT youPhone FROM myMember WHERE youPhone = '$youPhone'";
    $result = $connect -> query($sql);
    $findPWcount = $result -> num_rows;
    
    
    if($findPWcount > 0){
        $findID = $result -> fetch_array(MYSQLI_ASSOC);

        $sql = "SELECT youBirth FROM myMember WHERE youBirth = '$youBirth'";
        $result = $connect -> query($sql);
        $findPWcount = $result -> num_rows;

        if($findPWcount > 0){
            $sql = "SELECT youEmail, youBirth, youPhone FROM myMember WHERE youEmail = '$youEmail'";
            $result = $connect -> query($sql);
            $findPWcount = $result -> num_rows;
            
            if($findPWcount > 0){ ?>
                <section id='loginBox' class='forgetIDBox'>
                    <div class='loginBox_img'></div>
                    <div class='loginBox_text'>
                        <h4 class='forgetID mb50'>PW 수정</h4>
                        <p class='forgetDesc mt10 mb10'>비밀번호는 1234로 변경되었습니다.<br>개인정보 보호를 위해 비밀번호를 변경해주세요.</p>
                        <a href='login.php' class='goLogin mt50'>로그인 하러 가기</a>
<?php
    $sql = "UPDATE myMember SET youPass = '1234' WHERE youEmail = '$youEmail'";
    $result = $connect -> query($sql);

    // var_dump($result);
?>
            <?php } else {echo "
        <section id='loginBox' class='forgetIDBox'>
            <div class='loginBox_img'></div>
                <div class='loginBox_text'>";
        echo "<h4 class='forgetID'>비밀번호 찾기</h4>";
        echo "<p class='findID'><span>일치하는 정보가 없습니다.</span></p>";
        echo "<a href='join.php' class='goLogin'>회원가입 하러 가기</a>";
    }?>
       <?php } else {echo "
        <section id='loginBox' class='forgetIDBox'>
            <div class='loginBox_img'></div>
                <div class='loginBox_text'>";
        echo "<h4 class='forgetID'>비밀번호 찾기</h4>";
        echo "<p class='findID'><span>일치하는 정보가 없습니다.</span></p>";
        echo "<a href='join.php' class='goLogin'>회원가입 하러 가기</a>";
    }
    } else {echo "
        <section id='loginBox' class='forgetIDBox'>
            <div class='loginBox_img'></div>
                <div class='loginBox_text'>";
        echo "<h4 class='forgetID'>비밀번호 찾기</h4>";
        echo "<p class='findID'><span>일치하는 정보가 없습니다.</span></p>";
        echo "<a href='join.php' class='goLogin'>회원가입 하러 가기</a>";
    }

?>
                </div>
            </div>
        </section>
    </main>

    <!-- <main id="main__login">
        <section id="loginBox" class="forgetPWBox">
            <div class="loginBox_img"></div>
                <div class="loginBox_text">
                    <h4 class="forgetID">PW 수정</h4>
                    <p class="forgetDesc">새로운 비밀번호를 입력해주세요.</p>
                    <form action="findPWSave.php" name="findPWSave" method="POST">
                        <fieldset>
                            <div class="join-box">
                                <label for="" class="mt10">비밀번호</label>   
                                <input type="text" placeholder="비밀번호를 입력해주세요." >
                            </div>
                            <div class="join-box">
                                <label for="" class="mt10">비밀번호 재확인</label>   
                                <input type="text" placeholder="비밀번호를 재입력해주세요."class="mb40">
                            </div>
                            <button id="joinBtn" class="login-submit" type="submit">입력 완료</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main> -->

</body>
</html>