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
    <title>PHP 사이트</title>
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
<?php
        include "../include/header.php";
    ?>
    <!-- //header  -->

<?php
    $sql = "SELECT blogTitle, blogContents, blogCate, blogAuthor, blogImgFile, blogRegTime FROM myBlog WHERE blogDelete = 1 ORDER BY blogID DESC LIMIT 3";
    $result = $connect -> query($sql);
?>

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center mb100 type">
            <div class="container">
                <h3 class="section__title">최신 글</h3>
                <p class="section__desc">최신 글을 만나보세요.</p>
                <div class="blog__inner">
                    <div class="blog__cont">
<?php foreach($result as $blog){ ?>
                    <article class="blog">
                        <figure class='blog__header' aria-hiddsen = "true">
                            <a href="#" style="background-image:url(../assets/img/blog/<?= $blog['blogImgFile']; ?>)"></a>
                        </figure>
                        <div class='blog__body'>
                            <span class="blog__cate"><?= $blog['blogCate']; ?></span>
                            <div class="blog__title"><?= $blog['blogTitle']; ?></div>
                            <div class="blog__desc"><?= $blog['blogContents']; ?></div>
                            <div class="blog__info">
                                <span class="author"><?= $blog['blogAuthor']; ?></a></span>
                                <span class="date"><?= date('Y-m-d H:m:s', $blog['blogRegTime']); ?></span>
                            </div>
                        </div>
                    </article>
<?php } ?>
                    </div>
                    <div class="blog__btn">
                        <a href="../blog/blog.php">더 보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="notice-type" class="section center gray">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">새로운 소식을 만나볼까요?</p>
                    <div class="notice__inner">
                <article class="notice">
                    <h4>최신 게시판</h4>
                    <ul>
<?php
    $sql = "SELECT boardID, boardTitle, regTime FROM myBoard ORDER BY boardID DESC LIMIT 4";
    $result = $connect -> query($sql);

    foreach($result as $board){
?>

<li><a href="../board/boardView.php?boardID=<?=$board['boardID']?>"><?= $board['boardTitle'] ?></a><span class="time"><?= date('Y-m-d', $board['regTime']);?></span></li>
<?php } ?>
                    </ul>
                    <a href="../board/board.php" class="more">더 보기</a>
                </article>
                <article class="notice">
                    <h4>댓글</h4>
                    <ul>
<?php
    $sql = "SELECT regTime, youText FROM myComment ORDER BY commentID DESC LIMIT 4";
    $result = $connect -> query($sql);

    foreach($result as $comment){
?>
<li><a href="../comment/comment.php#comment-type"><?= $comment['youText'] ?></a><span class="time"><?= date('Y-m-d', $comment['regTime']);?></span></li>
<?php } ?>
                        <!-- <li><a href="#">안녕하세요, 공지사항입니다.</a><span class="time">2022-03-02</span></li>
                        <li><a href="#">안녕하세요, 공지사항입니다.</a><span class="time">2022-03-02</span></li>
                        <li><a href="#">안녕하세요, 공지사항입니다.</a><span class="time">2022-03-02</span></li>
                        <li><a href="#">안녕하세요, 공지사항입니다.</a><span class="time">2022-03-02</span></li>
                        <li><a href="#">안녕하세요, 공지사항입니다.</a><span class="time">2022-03-02</span></li> -->
                    </ul>
                    <a href="../comment/comment.php#comment-type" class="more">더 보기</a>
                </article>
                </div>  
            </div>
        </section>
        <!-- //notice-type -->
    </main>

<?php
        include "../include/footer.php";
    ?>
</body>
</html>
