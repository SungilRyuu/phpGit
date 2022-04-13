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
    <title>블로그 검색</title>
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
<?php
    $blogSearch = $_GET['blogSearch'];

    $blogSearch = $connect -> real_escape_string(trim($blogSearch));

    $sql = "SELECT * FROM myBlog WHERE blogDelete = 1 AND blogTitle LIKE '%{$blogSearch}%' OR blogContents LIKE '%{$blogSearch}%' OR blogAuthor LIKE '%{$blogSearch}%' ORDER BY blogID DESC";

    $result = $connect -> query($sql);
    $count = $result -> num_rows;

?>
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">블로그 게시글</h3>
                <p class="section__desc">검색 단어 : '<?= $blogSearch ?>'<br>총 <?= $count ?>건이 있습니다.</p>
                <div class="blog__inner">
                    <div class="blog__cont">
                        <?php
    $result = $connect -> query($sql);
    
    $blogImgDir = "../assets/img/blog/";
    
    ?>
    <?php foreach($result as $blog){  ?>
        <article class="blog mb100">
            <figure class='blog__header'>
                <a href="blogView.php?blogID=<?= $blog['blogID']; ?>" style="background-image:url(../assets/img/blog/<?= $blog['blogImgFile']; ?>)"></a>
            </figure>
            <div class='blog__body'>
                <span class="blog__cate"><?= $blog['blogCate']; ?></span>
                <div class="blog__title"><a href="blogView.php?blogID=<?= $blog['blogID']; ?>"><?= $blog['blogTitle']; ?></a></div>
                <div class="blog__desc"><a href="blogView.php?blogID=<?= $blog['blogID']; ?>"><?= $blog['blogContents']; ?></a></div>
                <div class="blog__info">
                    <span class="author"><a href="#"><?= $blog['BlogAuthor']; ?></a></span>
                    <span class="date"><?= date('Y-m-d H:m:s', $blog['blogRegTime']); ?></span>
                    <span class="modify"><a href="blogModify.php?blogID=<?=$blog['blogID'];?>">수정</a></span>
                    <span class="delete"><a href="blogRemove.php?blogID=<?=$blog['blogID'];?>" onclick="return noticeRemove();">삭제</a></span>
                </div>
            </div>
        </article>
        <? } ?>
        <div class="blog__btn">
            <a href="blog.php">이전으로 돌아가기</a>
        </div>
    

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
                    <!-- <div class="blog__pages">
                        <ul>
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
    </main>
<!-- //main -->
    


<?php
    include "../include/footer.php";
?>
<!--//footer -->
<script>
        function noticeRemove(){
            let notice = confirm("정말 삭제하시겠습니까?");
            return notice;

        }
    </script>
</body>
</html>