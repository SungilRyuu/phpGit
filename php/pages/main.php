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
    
    <style>
        .footer {
            background-color: lightgrey !important;
        }
        /* slider */
        .slider__wrap {}
        .slider__img {
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        .slider__inner {
            width: 1000%;
            display: flex;
            position: relative;
            overflow: hidden;
            left: -100vw;
        }
        .slider__inner.transition {
            transition: all 600ms;
        }
        .slider__inner .slider {
            width: 100vw;
            height: 650px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .slider__inner .s1 {
            background-image: url(../assets/img/main/slider_bg01.jpg);
        }
        .slider__inner .s2 {
            background-image: url(../assets/img/main/slider_bg02.jpg);
        }
        .slider__inner .s3 {
            background-image: url(../assets/img/main/slider_bg03.jpg);
        }
        .slider__inner .s4 {
            background-image: url(../assets/img/main/slider_bg04.jpg);
        }
        .slider__inner .s5 {
            background-image: url(../assets/img/main/slider_bg05.jpg);
        }
        .slider__inner .s6 {
            background-image: url(../assets/img/main/slider_bg06.jpg);
        }

        .swiper-slide {
            width: 1200px;
            margin: 0 auto;
            color: #fff;
        }

        .swiper-slide .desc {padding-top: 100px;}
        .swiper-slide .desc span {
            font-size: 30px;
        }
        .swiper-slide .desc h4 {
            font-size: 100px;
            margin-bottom: 20px;
        }
        .swiper-slide .desc p {
            line-height: 1.5;
            font-size: 20px;
            margin-bottom: 100px;
        }
        .swiper-slide .btn a {
            padding: 10px 20px;
        }
        .swiper-slide .btn .white {
            background: #fff;
            color: #000;
        }
        .swiper-slide .btn .black {
            background: #000;
            color: #fff;
            margin-left: 20px;
        }

        .slider__btn {}
        .slider__btn .prev {
            position: absolute;
            content: '';
            left: 10px; top: 50%;
            transform: translateY(-50%);
            background-image: url(../assets/img/main/leftArrow.svg);
            width: 30px; height: 56.28px;
        }
        .slider__btn .next {
            position: absolute;
            content: '';
            right: 10px; top: 50%;
            transform: translateY(-50%);
            background-image: url(../assets/img/main/rightArrow.svg);
            width: 30px; height: 56.28px;
        }

        .slider__dot {
            position: absolute;
            bottom: 5px; left: 50%;
            transform: translateX(-50%);
            display: block;
        }
        .slider__dot a {
            margin-left: 5px;
        }
        .slider__dot .dot {
            width: 10px; height: 10px;
            border-radius: 50%;
            background: grey;
            display: inline-block;
        }
        .slider__dot .dot.active {
            background: #fff;
        }
        .slider__dot .play.show,
        .slider__dot .stop.show {
            display: inline-block;
        }
        .slider__dot .play {
            width: 10px; height: 10px;
            display: inline-block;
            position: relative;
            display: none;
        }

        .slider__dot .play::after {
            content: '';
            border-style: solid;
            border-width: 5px 0px 5px 9px;
            border-color: transparent transparent transparent #fff;
            position: absolute;
            left: 2px; top: 0;
        }
        .slider__dot .stop {
            width: 10px; height: 10px;
            display: inline-block;
            position: relative;
            display: none;
        }
        .slider__dot .stop::before {
            content: '';
            width: 3px; height: 10px;
            border-radius: 10px;
            background-color: #fff;
            position: absolute;
            left: 2.5px; top: 0;
        }
        .slider__dot .stop::after {
            content: '';
            width: 3px; height: 10px;
            border-radius: 10px;
            background-color: #fff;
            position: absolute;
            left: 7.5px; top: 0;
        }
    </style>
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

        <section id="banner">
            <div class="slider__wrap">
                <div class="slider__img">
                    <div class="slider__inner">
                        <div class="slider s1">
                            <div class="swiper-slide">
                                <div class="desc">
                                    <span>DEVELOPER</span>
                                    <h4>NEW PROJECT</h4>
                                    <p>너무 무리하지 말아요!<br>이미 당신은 해내고 있고!<br>앞으로도 잘 할 수 있어요!<br>넘어져도 괜찮아요! <br>다시 일어나면 되니까! </p>
                                    <div class="btn">
                                        <a href="#" class="white">자세히 보기</a>
                                        <a href="#" class="black">사이트 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider s2">
                            <div class="swiper-slide">
                                <div class="desc">
                                    <span>DEVELOPER</span>
                                    <h4>NEW PROJECT</h4>
                                    <p>너무 무리하지 말아요!<br>이미 당신은 해내고 있고!<br>앞으로도 잘 할 수 있어요!</p>
                                    <div class="btn">
                                        <a href="#" class="white">자세히 보기</a>
                                        <a href="#" class="black">사이트 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider s3">
                            <div class="swiper-slide">
                                <div class="desc">
                                    <span>DEVELOPER</span>
                                    <h4>NEW PROJECT</h4>
                                    <p>너무 무리하지 말아요!<br>이미 당신은 해내고 있고!<br>앞으로도 잘 할 수 있어요!</p>
                                    <div class="btn">
                                        <a href="#" class="white">자세히 보기</a>
                                        <a href="#" class="black">사이트 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider s4">
                            <div class="swiper-slide">
                                <div class="desc">
                                    <span>DEVELOPER</span>
                                    <h4>NEW PROJECT</h4>
                                    <p>너무 무리하지 말아요!<br>이미 당신은 해내고 있고!<br>앞으로도 잘 할 수 있어요!</p>
                                    <div class="btn">
                                        <a href="#" class="white">자세히 보기</a>
                                        <a href="#" class="black">사이트 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider s5">
                            <div class="swiper-slide">
                                <div class="desc">
                                    <span>DEVELOPER</span>
                                    <h4>NEW PROJECT</h4>
                                    <p>너무 무리하지 말아요!<br>이미 당신은 해내고 있고!<br>앞으로도 잘 할 수 있어요!</p>
                                    <div class="btn">
                                        <a href="#" class="white">자세히 보기</a>
                                        <a href="#" class="black">사이트 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider s6">
                            <div class="swiper-slide">
                                <div class="desc">
                                    <span>DEVELOPER</span>
                                    <h4>NEW PROJECT</h4>
                                    <p>너무 무리하지 말아요!<br>이미 당신은 해내고 있고!<br>앞으로도 잘 할 수 있어요!</p>
                                    <div class="btn">
                                        <a href="#" class="white">자세히 보기</a>
                                        <a href="#" class="black">사이트 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__btn">
                        <a href="#" class="prev ir_so">prev</a>
                        <a href="#" class="next ir_so">next</a>
                    </div>
                    <div class="slider__dot">
                        <!-- <a href="#" class="dot active"></a>
                        <a href="#" class="dot"></a>
                        <a href="#" class="dot"></a>
                        <a href="#" class="dot"></a>
                        <a href="#" class="dot"></a>
                        <a href="#" class="dot"></a>
                        <a href="#" class="play"></a>
                        <a href="#" class="stop"></a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- //banner -->

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

<?php
    $sql = "SELECT * FROM myQuiz ORDER BY quizID DESC LIMIT 1";
    $result = $connect -> query($sql);
    
    foreach($result as $quiz){
?>
        <section id="notice-type" class="section center">
            <div class="container">
                <h3 class="section__title">새로운 퀴즈</h3>
                <p class="section__desc">최신 퀴즈를 풀어볼까요?</p>
                <div class="quiz__inner">
                    <div class="quiz__header">
                        <div class="quiz__subject">
                            <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject">
                                <option value="javascript">javascript</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                                <option value="php">php</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span>.
                            <span class="quiz__ask"></span>
                            <div class="quiz__desc"></div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment green none">해설 보기</button>
                            <button class="confirm ml10 yellow right">정답 확인</button>
                            <button class="next orange right none">다음 문제</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php } ?>

<?php
    include "../include/footer.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    const sliderWrap = document.querySelector(".slider__wrap");
    const sliderImg = document.querySelector(".slider__img"); //이미지 한칸만 움직이는 영역
    const sliderInner = document.querySelector(".slider__inner"); //이미지 움직이는 영역
    const slider = document.querySelectorAll(".slider"); //각각의 이미지 
    const sliderBtn = document.querySelector(".slider__btn"); //슬라이드 버튼 선언
    const sliderBtnPrev = sliderBtn.querySelector(".prev"); //슬라이드 버튼(이전)
    const sliderBtnNext = sliderBtn.querySelector(".next"); //슬라이드 버튼(이후)
    const sliderDot = document.querySelector(".slider__dot");
    const sliderDotPlay = sliderDot.querySelector(".play");
    const sliderDotStop = sliderDot.querySelector(".stop");

    let currentIndex = 0;
    let sliderWidth = sliderImg.offsetWidth; //가로 값
    let sliderLength = slider.length; //이미지 갯수

    console.log(sliderWidth);
    console.log(sliderLength);

    let sliderFirst = slider[0]; //첫번째이미지
    let sliderLast = slider[sliderLength - 1]; //마지막이미지
    let cloneFirst = sliderFirst.cloneNode(true); //첫번째 이미지 복사
    let cloneLast = sliderLast.cloneNode(true); //마지막 이미지 복사
    let posInitial = "";
    let dotIndex = "";
    let sliderTimer = "";
    let interval = 3000;

    // 이미지 복사 - jQuery = appendTo/prependTo : append/prepend
    sliderInner.appendChild(cloneFirst);
    sliderInner.insertBefore(cloneLast, sliderFirst);

    // // 이미지 움직이기
    function gotoSlider(index){
        sliderInner.classList.add("transition");
        sliderInner.style.left = -100 * (index + 1) + "vw";

        console.log(currentIndex);
        currentIndex = index;


        let dotActive = document.querySelectorAll(".slider__dot .dot");
            
        dotActive.forEach(el => {
            el.classList.remove("active");
        })
        dotActive[index].classList.add("active");
    } 

    function dotInit(){
        for(let i = 0; i < sliderLength; i++){
            dotIndex += "<a href='#' class='dot'></a>";
        }
        dotIndex += "<a href='#' class='play'></a>";
        dotIndex += "<a href='#' class='stop show'></a>";
        sliderDot.innerHTML = dotIndex;
        sliderDot.firstElementChild.classList.add("active");
    }
    dotInit();
   
        // dotactive
        
    document.querySelectorAll(".slider__dot .dot").forEach((dot, index) => {
        dot.addEventListener("click", () => {
            gotoSlider(index);
        })
    })

        function autoPlay(){
            sliderTimer = setInterval(() => {
                gotoSlider(currentIndex + 1);
            }, interval);
        }
        autoPlay();

        function stopPlay(){
            clearInterval(sliderTimer);
        }

        sliderBtnPrev.addEventListener("click", () => {
            let prevIndex = currentIndex - 1;
            gotoSlider(prevIndex);
        });
        sliderBtnNext.addEventListener("click", () => {
            let nextIndex = currentIndex + 1;
            gotoSlider(nextIndex);
        });

        sliderInner.addEventListener("transitionend", () => {
            sliderInner.classList.remove("transition");
            if(currentIndex == -1){
                sliderInner.style.left = -(sliderLength * 100) + "vw";
                currentIndex = sliderLength - 1;
            }
            if(currentIndex == sliderLength){
                sliderInner.style.left = -(1 * 100) + "vw";
                currentIndex = 0;
            }
        });

        sliderBtnNext.addEventListener("mouseenter", () => {
            sliderDot.querySelector(".play").classList.add("show");
            sliderDot.querySelector(".stop").classList.remove("show");
            stopPlay();
        })
        sliderBtnNext.addEventListener("mouseleave", () => {
            sliderDot.querySelector(".stop").classList.add("show");
            sliderDot.querySelector(".play").classList.remove("show");
            autoPlay();
        })

        sliderBtnPrev.addEventListener("mouseenter", () => {
            sliderDot.querySelector(".play").classList.add("show");
            sliderDot.querySelector(".stop").classList.remove("show");
            stopPlay();
        })
        sliderBtnPrev.addEventListener("mouseleave", () => {
            sliderDot.querySelector(".stop").classList.add("show");
            sliderDot.querySelector(".play").classList.remove("show");
            autoPlay();
        })

        sliderInner.addEventListener("mouseenter", () => {
            sliderDot.querySelector(".play").classList.add("show");
            sliderDot.querySelector(".stop").classList.remove("show");
            stopPlay();
        })
        sliderInner.addEventListener("mouseleave", () => {
            sliderDot.querySelector(".stop").classList.add("show");
            sliderDot.querySelector(".play").classList.remove("show");
            autoPlay();
        })

        sliderDot.querySelector(".play").addEventListener("click", () => {
            sliderDot.querySelector(".stop").classList.add("show");
            sliderDot.querySelector(".play").classList.remove("show");
            autoPlay();
        });
        sliderDot.querySelector(".stop").addEventListener("click", () => {
            sliderDot.querySelector(".play").classList.add("show");
            sliderDot.querySelector(".stop").classList.remove("show");
            stopPlay();
        });
        </script>

</body>
</html>
