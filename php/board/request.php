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
    <title>문의하기</title>
    <?php
    include '../include/headerblue.php';
?>
    <style>
    body {
        background: #fff;
    }
    </style>
</head>

<body>
<?php
    include '../include/header.php';
?>
<!-- //header -->

    <main id="main">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="board-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">의뢰하기</h3>
                <p class="section__desc mt30">웹 앨범을 만들어 볼까요?</p>
                <div class="board__inner">     
                    <div class="board__modify">
                        <form action="requestSave.php" name="request" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend class="ir_so">의뢰하기 영역</legend>
                                <div class="mb30 toggle__layout">
                                    <label for="selectLayout" class="mb20">레이아웃 설정</label>
                                    <div class="selection">
                                        <div>
                                            <input type="radio" name="selectLayout1" id="selectLayout1" value="기본형">
                                            <label for="selectLayout1" class="mb20">기본형</label>
                                            <p for="selectLayout1" class="mb20">기본형</p>
                                        </div>
                                        <div>
                                            <input type="radio" name="selectLayout2" id="selectLayout2" value="인스타그램">
                                            <label for="selectLayout2" class="mb20">인스타그램</label>
                                            <p for="selectLayout2" class="mb20">인스타그램</p>
                                        </div>
                                        <div>
                                            <input type="radio" name="selectLayout3" id="selectLayout3" value="가로정렬">
                                            <label for="selectLayout3" class="mb20">가로정렬</label>
                                            <p for="selectLayout3" class="mb20">가로정렬</p>
                                        </div>
                                        <div>
                                            <input type="radio" name="selectLayout4" id="selectLayout4" value="세로정렬">
                                            <label for="selectLayout4" class="mb20">세로정렬</label>
                                            <p for="selectLayout4" class="mb20">세로정렬</p>
                                        </div>
                                        <div>
                                            <input type="radio" name="selectLayout5" id="selectLayout5" value="맞춤제작">
                                            <label for="selectLayout5" class="mb20">맞춤제작</label>
                                            <p for="selectLayout5" class="mb20">맞춤제작</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb30">
                                    <label for="requestTitle" class="mb20">앨범의 주제</label>
                                    <input type="text" name="requestTitle" id="requestTitle" placeholder="어떤 앨범인가요?" required>
                                </div>
                                
                                <div class="mb30">
                                    <label for="requestContents" class="mb20">요청사항</label>
                                    <textarea name="requestContents" id="requestContents" placeholder="자세할수록 좋습니다!" required></textarea>
                                </div>
                                
                                <div class="mb30">
                                    <label for="photoUpload[]" class="mb20">이미지 파일 업로드</label>
                                    <input type="file" name="photoUpload[]" id="photoUpload" multiple>
                                </div>

                                <div class="mb50">
                                    <button type="submit" value="의뢰하기" class="request-btn mb50">의뢰하기</button>
                                    <a href="requestList.php" class="request-btn mb50">목록보기</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
            <!-- //main -->
    
</body>
</html>