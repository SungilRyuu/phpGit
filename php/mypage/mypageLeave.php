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
    <title>회원탈퇴</title>
</head>
<body>
    <script>
    if(!confirm("정말로 탈퇴하시겠습니까?")){
        alert("회원정보 수정 화면으로 이동합니다.");
        history.back(1);
    } else {
        alert("탈퇴되었습니다.");
        <?php 
            $memberID = $_SESSION['memberID'];

            $sql = "DELETE FROM myMember WHERE memberID = '$memberID'";    
            $connect -> query($sql);

    unset($_SESSION['youEmail']);
    unset($_SESSION['memberID']);
    unset($_SESSION['youName']);
        ?>
        location.href="../pages/main.php";
    }
    </script>
    
</body>
</html>