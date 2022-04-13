<header id="header">
        <h1 class="logo">
            <a href="../pages/main.php">PHP <em>class</em></a>
        </h1>
        <nav class="menu">
            <h2 class="ir_so">메인 메뉴</h2>
            <ul>
                <li><a href="../login/join.php">회원가입</a></li>
                <li><a href="../comment/comment.php">댓글</a></li>
                <li><a href="../board/board.php">게시판</a></li>
                <li><a href="../blog/blog.php">블로그</a></li>
                <li><a href="../quiz/quiz.php">퀴즈</a>
                    <ul class="sub">
                        <li><a href="../quiz/quizCreate.php">문제 만들기</a></li>
                        <li><a href="../quiz/quiz.php">문제 풀기</a></li>
                        <li><a href="../quiz/quizExam.php">기출문제</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="member">
            <span class="ir_so">회원 정보 영역</span>
        <?php
$memberID = $_SESSION['memberID'];
$sql = "SELECT youPhoto FROM myMember WHERE memberID = {$memberID}";
$result = $connect -> query($sql);
$info = $result -> fetch_array(MYSQLI_ASSOC);

                if(isset($_SESSION['memberID'])){ ?>
                    <a href="../mypage/mypageModify.php" class="setting">
                        <img src="../assets/img/mypage/<?=$info['youPhoto']?>" alt="" style="width:20px; height:20px;">
                        <?=$_SESSION['youName']?>님 환영합니다.</a>
            <?php } else { ?>
                    <a href="../login/join.php">회원가입</a>
                    <a href="../login/login.php">로그인</a>
            <?php }?>
        </div>
        


        
    </header>
    <!-- //header -->