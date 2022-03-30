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
<?php
    $blogID = $_GET['blogID'];
    $sql = "SELECT * FROM myBlog WHERE blogID = {$blogID}";
    $result = $connect -> query($sql);

    foreach($result as $blog){
?>

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="center mb100">
            <div class="blog__label" style="background-image:url(../assets/img/blog/<?= $blog['blogImgFile'];?>)">
                <h3 class="section__title"><?= $blog['blogTitle'];?></h3>
                <div>
                    <span class="author"><a href="#"><?= $blog['blogAuthor'];?></a></span>
                    <span class="date"><?= date('Y-m-d H:m:s', $blog['blogRegTime']);?></span>
                    <span class="modify"><a href="#">수정</a></span>
                    <span class="delete"><a href="#">삭제</a></span>
                </div>
            </div>

            <div class="container">
                <div class="blog__layout">
                    <div class="blog__left"><h4><?= $blog['blogTitle'];?></h4>
                    <div><?= $blog['blogContents'];?></div></div>
                    <div class="blog__right">
                    <iframe src="https://ads-partners.coupang.com/widgets.html?id=572093&template=carousel&trackingCode=AF1920066&subId=&width=300&height=300" width="300" height="300" frameborder="0" scrolling="no" referrerpolicy="unsafe-url"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php } ?>
<!-- //main -->
    


<?php
    include "../include/footer.php";
?>
<!--//footer -->
</body>
</html>