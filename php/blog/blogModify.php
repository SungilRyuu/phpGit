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
    <title>글쓰기</title>
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
    $memberID = $_SESSION['memberID'];

    $sql = "SELECT * FROM myBlog WHERE blogID = '$blogID'";
    $result = $connect -> query($sql);
    
    $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
    

    if($memberID != $blogInfo['memberID']){
        echo "<script>alert('권한이 없습니다.');history.back(1);</script>";
    }

    foreach($result as $blog){
?>

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">블로그 글 수정하기</h3>
                <p class="section__desc">블로그 글을 수정하세요.</p>
                <div class="blog__inner">
                    <div class="blog__write">
                        <form action="blogModifySave.php?blogID=<?=$blog['blogID']?>" name="blogModify" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <legend class="ir_so">블로그 게시글 수정 영역</legend>
                                <div>
                                    <label for="blogCate">카테고리</label>
                                    <select name="blogCate" id="blogCate">
                                        <option value="<?= $blog['blogCate']?>"><?=$blog['blogCate']?></option>
                                    </select>
                                </div>
                                <div>
                                    <label for="blogTitle">제목</label>
                                    <input type="text" name="blogTitle" id="blogTitle" value="<?= $blog['blogTitle']?>" required>
                                </div>
                                <div>
                                    <label for="blogContents">내용</label>
                                    <textarea name="blogContents" id="blogContents" required><?= $blog['blogContents']?></textarea>
                                </div>
                                <div>
                                    <label for="blogImgFile" class="mb20">사진을 수정하고 싶다면, 새로운 사진을 업로드해주세요!</label>
                                    <input type="file" name="blogImgFile" id="blogImgFile"></input>
                                </div>
                                <div class="blog__btn">
                                    <button type="submit" value="저장하기">저장하기</button>
                                </div>
                            </fieldset>
                        </form>
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