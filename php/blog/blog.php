<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <?php
        include "../include/style.php";
    ?>
    <style>
        .footer {
            background: #f5f5f5 !important;
        }
    </style>
</head>
<body>
<?php
    include "../include/skip.php";
?>
<!-- //skip -->

<?php
    include "../include/header.php";
?>
<!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">IT 블로그</h3>
                <p class="section__desc">IT와 관련된 자료들을 모아놓은 블로그입니다. 다양한 정보를 만나보세요.</p>
                <div class="blog__inner">
                    <div class="blog__search">
                        <form action="blogSearch.php" method="GET">
                            <fieldset>
                                <legend class="ir_so">검색영역</legend>
                                <input type="search" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력해주세요.">
                                <label for="blogSearch" class="ir_so">검색</label>
                                <button class="button">버튼</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- <div class="blog__btn">
                        <a href="blogWrite.php">글쓰기</a>
                    </div> -->
                    <div class="blog__cont">
<?php
    $sql = "SELECT blogID, blogTitle, blogContents, blogCate, BlogAuthor, blogImgFile, blogRegTime FROM myBlog ORDER BY blogID DESC";
    $result = $connect -> query($sql);

    $blogImgDir = "../assets/img/blog/";

    // echo "<pre>";
    // var_dump($blog);
    // echo "</pre>";
?>
    <? foreach($result as $blog){  ?>
        <article class="blog">
            <figure class='blog__header'>
                <a href="blogView.php?blogID=<?= $blog['BlogID']; ?>"><img src="../assets/img/blog/<?= $blog['blogImgFile']; ?>" alt="<? $blog['blogTitle']; ?>"></a>
            </figure>
            <div class='blog__body'>
                <span class="blog__cate"><?= $blog['blogCate']; ?></span>
                <div class="blog__title"><?= $blog['blogTitle']; ?></div>
                <div class="blog__desc"><?= $blog['blogContents']; ?></div>
                <div class="blog__info">
                    <span class="author"><a href="#"><?= $blog['BlogAuthor']; ?></a></span>
                    <span class="date"><?= date('Y-m-d H:m:s', $blog['blogRegTime']); ?></span>
                    <span class="modify"><a href="#">수정</a></span>
                    <span class="delete"><a href="#">삭제</a></span>
                </div>
            </div>
        </article>
    <? } ?>
    

                        <!-- <article class="blog">
                            <figure class='blog__header'>
                                <img src="../assets/img/inner1.jpg" alt="">
                            </figure>
                            <div class='blog__body'>
                                <span class="blog__cate">Phone</span>
                                <div class="blog__title">[독점] 역대 최저가 애플 폰 '아이폰SE', 외신은 이렇게 평가했다</div>
                                <div class="blog__desc"></div>
                                <div class="blog__info">
                                    <span class="author"><a href="#">코딩월드뉴스-이선영</a></span>
                                    <span class="date">2022-03-18 13:31</span>
                                    <span class="modify"><a href="#">수정</a></span>
                                    <span class="delete"><a href="#">삭제</a></span>
                                </div>
                            </div>
                        </article> -->
                    </div>
                    <div class="blog__pages">
                        <ul>
                            <li><a href="#">&lt;&lt;</a></li>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><a href="board.php?page=1">1</a></li>
                            <li><a href="board.php?page=2">2</a></li>
                            <li><a href="board.php?page=3">3</a></li>
                            <li><a href="board.php?page=4">4</a></li>
                            <li><a href="board.php?page=5">5</a></li>
                            <li><a href="board.php?page=6">6</a></li>
                            <li><a href="board.php?page=7">7</a></li>
                            <li><a href="board.php?page=8">8</a></li>
                            <li><a href="#">&gt;</a></li>
                            <li><a href="#">&gt;&gt;</a></li>
                        </ul>
                    </div>
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