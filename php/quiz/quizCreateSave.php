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

    $memberID = $_SESSION["memberID"];
    $quizAuthor = $_SESSION["youName"];
    $quizSubject = $_POST["quizSubject"];
    $quizAsk = $_POST["quizAsk"];
    $quizDesc = $_POST["quizDesc"];
    $quizChoice1 = htmlspecialchars($_POST["quizChoice1"]);
    $quizChoice2 = htmlspecialchars($_POST["quizChoice2"]);
    $quizChoice3 = htmlspecialchars($_POST["quizChoice3"]);
    $quizChoice4 = htmlspecialchars($_POST["quizChoice4"]);
    $quizAnswer = $_POST["quizAnswer"];
    $quizComment = $_POST["quizComment"];
    $quizSource = $_POST["quizSource"];

    $sql = "INSERT INTO myQuiz(memberID, quizAuthor, quizSubject, quizAsk, quizDesc, quizChoice1, quizChoice2, quizChoice3, quizChoice4, quizAnswer, quizComment, quizSource) 
    VALUES('$memberID', '$quizAuthor', '$quizSubject', '$quizAsk', '$quizDesc', '$quizChoice1', '$quizChoice2', '$quizChoice3', '$quizChoice4', '$quizAnswer', '$quizComment', '$quizSource')";

    $result = $connect -> query($sql);

    if($result){
        echo "<script>alert('문제가 저장되었습니다.');location.href='quizCreate.php';</script>";
    } else {
        echo "<script>alert('문제가 저장되지 않았습니다.');history.back(1);</script>";
    }
?>
</body>
</html>