<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>
    <?php
        include "../include/style.php";
    ?>

</head>
<body>
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

        
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">개발자 파헤치기</h3>
                <p class="section__desc">
                    개발자가 되기 위해서는 프로그래밍 언어만 배운다고 끝나는 것이 아닙니다. <br>
                    자신이 배운 언어를 가지고 어떤 개발자가 될지 고민도 해야합니다. 
                </p>
                <div class="card__inner">
                    <article class="card">
                        <img src="../assets/img/inner1.jpg" alt="프론트엔드">
                        <div class="card__body">
                            <h3 class="card__title">프론트엔드 개발자</h3>
                            <p class="card__desc">
                                프론트엔드 개발자는 미적인 부분과 레이아웃까지 포함하는 UI의 비주얼을 프로그래밍하는 개발자입니다. 
                                프론트엔드 개발자의 코드는 웹사이트 사용자의 웹 브라우저에서 움직입니다.
                            </p>
                            <span class="card__btn">더 자세히 보기&nbsp;&nbsp;&nbsp;
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </span>
                        </div>
                    </article>
                    <article class="card">
                        <img src="../assets/img/inner2.jpg" alt="백엔드">
                        <div class="card__body">
                            <h3 class="card__title">백엔드 개발자</h3>
                            <p class="card__desc">
                                백엔드 개발자는 최종 소비자로부터 멀리 있는 기계에서 운영하는 시스템이나 소프트웨어의 디자인, 실행, 기능적인 코어 로직, 성능, 확장성을 전문적으로 다루는 개발자입니다.
                            </p>
                        <span class="card__btn">더 자세히 보기&nbsp;&nbsp;&nbsp;
                            <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                            </svg>
                        </span>
                        </div>
                    </article>
                    <article class="card">
                        <img src="../assets/img/inner3.jpg" alt="보안">
                        <div class="card__body">
                            <h3 class="card__title">보안 개발자</h3>
                            <p class="card__desc">
                                보안 개발자는 소프트웨어 시스템의 안전성을 테스트하고 안전 결함을 익스플로잇하고 고치는 시스템, methods, 절차를 만드는 개발자입니다. 
                            </p>
                        <span class="card__btn">더 자세히 보기&nbsp;&nbsp;&nbsp;
                            <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                            </svg>
                        </span>
                        </div>
                    </article>
                </div>
            </div>
            </section>

        <section id="comment-type" class="section center purple">
            <h3 class="section__title">강의 신청하기</h3>
            <p class="section__desc">강의 신청하기는 누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능합니다.</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment">
                        <fieldset>
                            <legend class="ir_so">강의 신청</legend>
                            <div class="comment__wrap">
                                <div>
                                    <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youText" class="ir_so">댓글</label>
                                    <input type="text" name="youText" id="youText" class="input__style width" placeholder="시간, 날짜, 강의 제목을 적어주세요!" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="submit" value="댓글 작성하기">작성하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">

                    <!-- <div class="list">
                        <p class="comment__desc">저 신청할게요!! 5월달 강의 신청하고 싶어요!</p>
                        <div class="comment__icon">
                            <span class="face"><img src="../assets/img/face.png" alt="얼굴"></span>
                            <span class="name">지나가던 사람</span>
                            <span class="date">2022-03-17</span>
                        </div>
                    </div> -->

<?php
    include "../connect/connect.php";

    $sql = "SELECT * FROM myComment";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
        if($count > 0){
            for($i = 1; $i <=$count; $i++){
                $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);

                echo "<div class='list'>";
                echo "<p class='comment__desc'>".$commentInfo['youText']."</p>";
                echo "<div class='comment__icon'>";
                echo "<span class='face'><img src='../assets/img/face.png' alt='얼굴'></span>";
                echo "<span class='name'>".$commentInfo['youName']."</span>";
                echo "<span class='date'>".date('Y-m-d', $commentInfo['regTime'])."</span>";
                echo "</div>";
                echo "</div>";
            }
        }
    }
?>
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