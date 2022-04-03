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
    <title>About</title>
    <?php
    include '../include/headerblue.php';
?>


    <style>
        body {
            background: #fff;
        }
        * {
    margin: 0;
    padding: 0;
    font-family: 'GmarketSans';
}
#header_2 {
    width: 100%;
    background: url(../../html/assets/img/about/header_bg.jpg);
    background-repeat : no-repeat;
    background-size : cover;
    padding-bottom: 200px;
}

#header0 {
        width: 100%;
        background-color: #3f51b5;
    }

    .header0__wrap {
        display: flex;
        justify-content: space-between;
    }

    .header0__left {
        margin-top: 250px;
        text-align: left;
        margin-bottom: 50px;
    }

    .header0__left h2 {
        font-size: 35px;
        color: #3f51b5;
        font-weight: 700;
        padding-top: 50px;
        padding-left: 30px;
        margin-bottom: 35px;
        position: relative;
        z-index: 1;
    }

    .header0__left h2::before {
        content: '';
        width: 600px;
        height: 420px;
        position: absolute;
        left: -31px;
        top: -30px;
        background-color:#e4e6ff;
        z-index: -1;
        /* opacity: 0.6; */
        border-radius: 30px;
    }

    .header0__left p {
        font-size: 30px;
        color: #3f51b5;
        line-height: 2;
        position: relative;
        padding-left: 30px;
        z-index: 1;
        font-weight: 500;
    }

    .header0__right {
        margin-top: 151px;
    }

    .header0__right .insta {
        background-color: #293a9b;
        font-size: 23px;
        width: 350px;
        text-align: left;
        padding-left: 50px;
        position: relative;
        padding-top: 10px;
        margin-bottom: 2px;
        color: #fff;
    }

    .header0__right .insta::before {
        position: absolute;
        content: '';
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: rgb(255, 255, 255);
        /* opacity: 0.7; */
        left: 14.5px;
        top: 10px;
    }

    /* .header0__right .insta__img {
            width: 400px;
            height: 433px;
            background-color: #fff;
            display: block;
        } */
    .header0__right .insta__img1 {
        width: 400px;
        height: 433px;
        background-image: url(../../html/assets/img/about/baby_img01.jpg);
        display: block;
    }

    /* .header0__right .insta__img1.bottoms {
            width: 400px; height: 433px;
            position: absolute;
            bottom: -698px; right: 0;
        } */
    .header0__right p {
        width: 384px;
        background-color: #fff;
        text-align: left;
        font-size: 20px;
        position: relative;
        padding-top: 5px;
        padding-left: 16px;
    }

    .header0__right p span {
        position: absolute;
        right: 5px;
    }

    .header1__wrap {
        margin-top: 200px;
    }

    .header1__wrap p {
        font-size: 35px;
        text-align: left;
        color: #ffffff;
        margin-bottom: 25px;
    }

    .header1__span {
        display: flex;
    }

    .header1__span span:nth-child(1) {
        background-image: url(../../html/assets/img/about/baby_img02.jpg);
        width: 400px;
        height: 433px;
    }

    .header1__span span:nth-child(2) {
        background-image: url(../../html/assets/img/about/baby_img03.jpg);
        width: 400px;
        height: 433px;
    }

    .header1__span span:nth-child(3) {
        background-image: url(../../html/assets/img/about/baby_img01.jpg);
        width: 400px;
        height: 433px;
        /* margin-bottom: 100px; */
        display: none;
    }

    /* menu */
    #menu {
        width: 100%;
        height: 100px;
        background: rgb(175, 170, 247);
        text-align: center;
        
    }
#menu li {
    display: inline-block;
    padding: 20px;
    font-size: 25px;
}

#menu li a {
    display: inline-block;
    padding: 5px 30px;
    margin: 0 10px;
    color: #fff;
    font-family: 'Smooch Sans';
    border: 2px solid rgb(217, 212, 245);
    border-radius: 30px;
}
#menu li a:hover {
    border: 2px solid rgb(128, 114, 206);
    color: rgb(128, 114, 206);
    background-color: rgb(255, 255, 255, 0.1);
    cursor: pointer;
}
/* 전체 레이아웃 */
#wrap {
    height: 2000px;
}

/* 컨테이너 */
.container {
    width: 1200px;
    margin: 0 auto;
    text-align: center;
    /* background: rgb(22, 22, 22); */
}

/*  헤더 */

.header_logo {
    width: 20%;
    height: 290px;
}
.header_cont {
text-align: center;
}
#header_2 .header-tit {
    font-size: 85px;
    color: #fff;
}
#header_2 .header-tit2 {
    font-size: 55px;
    color: #fff;
    font-weight: 700;
}
.text1 {
    padding-bottom: 30px;
    font-size: 30px;
    color: #fff;
}
.text2 {
    font-size: 65px;
    color: #fff;
    font-family: 'Poppins';
}
#header_2 .foot {
    font-size: 20px;
    margin-top: 113px;
    display: flex;
    justify-content: space-between;
    color: #fff;
}
#header_2 .foot .left {
    text-align: left;
}

#header_2 .foot .right::before {
    content: '';
    width: 670px;
    height: 1px;
    left: -565px;
    bottom: 10px;
    background-color: #fff;
    position: absolute;
}

#header_2 .foot .right {
    text-align: right;
    position: relative;
}
/* intro */
#intro {
     width: 100%;
     height: 1080px;
    text-align: center;
    background-color: #F7F7F7;
    background: url(../../html/assets/img/about/intro_bg.jpg);
}
/* #intro .desc::after{
    content: '';
    background-image: url(../img/intro_bg.jpg);
    width: 1200px;height: 453px;
    position: absolute;
    left: -30%;
    top: 50px;
} */
#intro h2 {
    margin-top: 90px;
    font-size: 30px;
    font-weight: 350;
    letter-spacing: 5px;
    margin-bottom: 50px;
    display: inline-block;
}
#intro p em {
    color: #3B4CA9;
    font-weight: 700;
    font-synthesis: none;
    letter-spacing: -1px;
    font-size: 50px;
    position: relative;
}
#intro .desc {
    margin-top: 38px;
    font-weight: 300;
    line-height: 1.6;
    position: relative;
}
/* con1 */
.con1 {
    background-color: #ECEFFF;
    height: 1080px;
}

.con1 h2 {
    text-align: center;
    font-size: 65px;
    color: #697CE2;
    display: inline-block;
    margin-top: 120px;
}

.con1 p {
    color: rgb(65, 65, 65);
    margin-top: 55px;
    font-size: 40px;
    text-align: center;
    margin-bottom: 75px;
}

.con1 .sp {
    display: flex;
    justify-content: space-between;
}

.con1 .sp0 {
    width: 386px;
    height: 575px;
    background-color: #fff;
    border-radius: 50px;
}

.con1 .sp0 img {
    margin-top: 93px;
    margin-left: 5px;
    margin-bottom: 45px;
}
.con1 .sp0 h3 {
    font-size: 30px;
    color: #5C6DBD;
    text-align: center;
}

.con1 .sp0 p {
    color: #585855;
    font-size: 25px;
    text-align: center;
    margin-top: 20px;
    line-height: 1.4;
}

/* con2 */
.con2 {
    width: 100%;
    height: 1080px;
}
.con2_1 {
    width: 100%;
    height: 190px;
    background-color: #7E93EC;
}
.con2_1 h2 {
    color: #fff;
    font-weight: normal;
    font-size: 80px;
    text-align: center;
    padding-top: 50px;
}
.con2_1 h2 em {
    font-style: normal;
    font-size: 127px;
    font-weight: 700;
}
.con2_2 {
    width: 100%;
    height: 140px;
    background-image: url(../../html/assets/img/about/c2_5.jpg);
}
.con2_3 {
    width: 100%;
    height: 710px;
}

.con2_3 .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.con2_3 .container p {
    width: 200px;
    height: 110px;
    background-color: #999;
    font-size: 27px;
    margin-top: 150px;
    text-align: center;
    border-radius: 50px;
    letter-spacing: -1px;
    padding-top: 44px;
}
.con2_3 p:nth-child(1),
.con2_3 p:nth-child(5) {
    background-color: #7E93EC;
}
.con2_3 p:nth-child(2),
.con2_3 p:nth-child(4) {
    background-color: #D2DAFF;
}
.con2_3 p:nth-child(1),
.con2_3 p:nth-child(4) {
    margin-right: 20px;
}

.con2_3 span {
    font-size: 30px;
    text-align: center;
    margin: 0 auto;
    position: relative;
    margin-top: 150px;
}

.con2_3 span::after {
    content: '';
    width: 1220px;
    height: 238px;
    background-image: url(../../html/assets/img/about/c2_3.jpg);
    position: absolute;
    left: -99px; top: -50px;
    z-index: -1;
}

/* con3 */
.con3 {
    background: url(../../html/assets/img/about/con3_bg1.jpg);
    height: 1080px;
}

.con3 .container {
    text-align: center;
}
.con3 h2 {
    color: #fff;
    font-size: 70px;
    margin-top: 80px;
    display: inline-block;            
    margin-bottom: 100px;
}

/* con4 */
.con4 {
    width: 100%;
    height: 950px;
    border-bottom: 1px solid #5C6DBD;
}
.con4 .container {
    text-align: center;
}
.con4 h2 {
    margin-top: 85px;
    display: inline-block;
    font-size: 75px;
    margin-bottom: 25px;
}
.con4 h3 {
    font-size: 30px;
    margin-bottom: 110px;
}
.con4Con {
    display: flex;
    justify-content: space-between;
}
.con4Con span {
    width: 700px;
    height: 539px;
    background-image: url(../../html/assets/img/about/c4_01.jpg);
    position: relative;
}
.con4Con span::after {
    content: '';
    width: 700px;
    height: 78px;
    background-image: url(../../html/assets/img/about/c4_02.jpg);
    position: absolute;
    left: 0; top: -78px;
}
.con4Con .con4p {
    margin-left: 20px;
}

.con4 .con4_p1 {
    margin-top: 0px;
    width: 450px;
    height: 280px;
    background-color: #DDE2FF;
    border-radius: 30px;
    margin-bottom: 30px;
}
.con4 .con4_p1 p {

}

.con4 .con4_p2 {
    width: 450px;
    height: 230px;
    background-color: #F2F4FF;
    border-radius: 30px;
}
.con4 .con4_p2 p {
    margin-top: 10px;
}
.con4 h4 {
    font-size: 35px;
    font-weight: 400;
    padding-top: 60px;
    padding-bottom: 20px;
}
.con4 p {
    font-size: 20px;
    font-weight: 300;
    color: #8C90A1;
}

/* con5 */

.con5_1 {
    width: 100%;
    height: 240px;
}

.con5_1 h2 {
    color: #5C6DBD;
    margin-top: 75px;
    font-size: 85px;
    text-align: left;
}
.con5_1flex {
    display: flex;
    justify-content: space-between;
    margin-top: 35px;
}

.con5_1flex p {
    text-align: left;
    color: #898989;
}
.con5_1flex h3 {
    color: #5C6DBD;
    vertical-align: bottom;
    font-size: 36px;
    font-weight: 400;
}

.con5_2 {
    width: 100%;
    height: 676px;
    background-color: #A6AEFF;
}

.con5_2 .container {
    display: flex;
}

.con5_2 .con5_2BoxAll::after{
    width: 1200px;
    height: 239px;
    content: '';
    position: absolute;
    left: 0; bottom: 200px;
    background-image: url(../../html/assets/img/about/c5_01.jpg);
}

.con5_2 .con5_2BoxAll{
    margin-top: 400px;
    display: flex;
    position: relative;
    color: #fff;
}

.con5_2Box h3 {
    text-align: center;
    font-weight: 400;
    font-size: 30px;
}
.con5_2Box p:nth-child(1) {
    margin-top: 15px;
}
.con5_2Box p{
    margin-top: 20px;
}
.con5_2BoxAll .box1 {
    margin-right: 180px;
    width: 250px;
}
.con5_2BoxAll .box2 {
    margin-right: 180px;
    width: 320px;
}


/* con8 */
.con8 {
    width: 100%;
    height: 900px;
    background: linear-gradient(to right, #EAEDFF 50%, #ffffff 50%);
}

.con8 h2 {
    margin-top: 100px;
    margin-bottom: 20px;
    font-size: 70px;
    padding: 0 20px;
    background: linear-gradient(#CEC3FC 0%, #A2C5FC 100%);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    display: inline-block;
}

.con8__tb {
    display: flex;
    justify-content: space-between;
    font-size: 30px;
    font-weight: 400;
    letter-spacing: 2px;
    opacity: 0.7;
    position: relative;
}

.con8__tb::before {
    content: '';
    width: 200px;height: 200px;
    position: absolute;
    left:-80px; top: 0;
    background-color: #C9D1F8;
    border-radius: 50%;
}
.con8__tb::after {
    content: '';
    width: 300px;height: 300px;
    position: absolute;
    right:-400px; top: 300px;
    background-color: #D9DFF7;
    border-radius: 50%;
}

.con8 .con8__tb1 {
    margin-top: 90px;
    text-align: left;
    color: grey;
    background-color: #fff;
    padding-right: 100px;
    z-index: 1;
}
.con8 .con8__tb2 {
    margin-top: 21px;
    text-align: right;
    color: #6E78D9;
    background-color: #F0F2FF;
    padding-left: 100px;
}

.con8 table {
    /* border: 1px solid #000; */
    border-spacing: 10px 50px;
    border-radius: 20px;
}
.con8 td {
    /* border: 1px solid #000; */
}
/* con9 */
.con9 {
    width: 100%;
    height: 980px;
}

.con9 h2 {
    margin-top: 100px;
    margin-bottom: 100px;
    text-align: left;
    font-size: 75px;
    background: linear-gradient(to right, #cee8ff 25%, #CCF1BF 50%, #FBEBB4 75%, #F7CEA3 100%);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    height: 100px;
    width: 700px;
}

.con9__table {
    display: flex;
    width: 1200px;
}

.con9__table table:nth-child(1) td {
    background-color: #cee8ff;
}
.con9__table table:nth-child(2) td {
    background-color: #CCF1BF;
}
.con9__table table:nth-child(3) td {
    background-color: #FBEBB4;
}
.con9__table table:nth-child(4) td {
    background-color: #F7CEA3;
}

.con9__table table:nth-child(1),
.con9__table table:nth-child(2),
.con9__table table:nth-child(3) {
    margin-right: 30px;
}

.con9__table tr:nth-child(1) {
    font-size: 30px;
    font-weight: 400;
}
.con9__table tr:nth-child(1) td {
    padding: 20px;
}

.con9__table tr:nth-child(2),
.con9__table tr:nth-child(3) {
    font-size: 20px;
    font-weight: 400;
    letter-spacing: -1px;
}
.con9__table tr:nth-child(2) td,
.con9__table tr:nth-child(3) td {
    padding:10px 0;
}

.con9 table {
    /* border: 1px solid #000; */
    width: 400px;
    border-spacing: 0 10px;
}
.con9 td {
    /* border: 1px solid #000; */
    border-radius: 0px;
}

.con9Img {
    display: flex;
    justify-content: space-between;
    margin-top: 100px;
}

/* con10 */
.con10 {
    width: 100%;
    height: 1080px;
}
.con10 .head {
    display: flex;
    margin-top: 50px;
    margin-bottom: 50px;

}
.con10 h2 {
    font-size: 70px;
    text-align: left;
    color: #7387E8;
}
.con10 p {
    margin-top: 50px;
    margin-left: 20px;
    font-size: 20px;
    color: grey;
}

/* footer */
#footer {
    width: 100%;
    height: 200px;
}

#footer h2 {
    font-size: 50px;
    color: #fff;
    background-color: #7387E8;
    padding: 30px 80px;
    border-radius: 20px;
}

#footer h2:hover {
    border: 5px solid #7387E8;
    color: #7387E8;
    background-color: #fff;
    cursor: pointer;
}
    </style>
</head>

<body>

    <!-- //header -->
    <?php
    include '../include/header.php';
?>

    <div id="header0">
                <div class="container">
                    <div class="header0__wrap">
                        <div class="header0__left">
                            <h2>간편하게 웹 앨범을 사용하세요.</h2>
                            <p>
                                다양한 템플릿 보유<br>
                                직관적 인터페이스<br>
                                누구나 사용가능
                            </p>
                        </div>
                        <div class="header0__right">
                            <p class="insta">나른한 일요일 오후</p>
                            <p class="insta_banner">아기와 나 <span>2020.02.02</span></p>
                            <!-- <span class="insta__img"></span> -->
                            <span class="insta__img1"></span>
                        </div>
                    </div>
                    <div class="header1__wrap">
                        <p>이전에 없던 경험</p>
                        <div class="header1__span">
                            <span></span>
                            <span></span>
                            <span class="bottoms"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div id="header_2">
                <div class="header_logo">
                    <h1 class="ir_pm">Pics_logo</h1>
                </div>
                <div class="container">
                    <div class="header_cont">
                        <p class="text1">소중한 추억 조각들을 모아 만든</p>
                        <h2 class="header-tit">웹앨범 제작 사이트 'Pics'</h2>
                        <p class="header-tit2">Purple Identity Cube Story</p>
                        <p class="text2">I pics you</p>
                        <div class="foot">
                                <p class="left">1조 웹 앨범 제작 사이트<br>precious memory storage.</p>
                                <p class="right">Share precious memories and <br>keep them forever.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <main>
                <section id="intro">
                    <div class="container">
                        <h2>큐브처럼 나눠진 추억을 하나로 모아주는</h2>
                        <p><em>Pics</em></p>
                        <p class="desc">
                            큐브처럼 작은 조각으로 나눠진 순간의 추억들을 하나로 모은 이야기들, <br>
                            보고싶을 때마다 언제든지 공유하고 볼 수 있도록 하는 웹 앨범 제작 사이트입니다.
                        </p>
                    </div>
                </section>
                <section id="contents">
                    <article class="con1">
                        <div class="container">
                            <h2>Service Point</h2>
                            <p>"1가정 1웹앨범을 꿈꾸는 웹 앨범 사이트"</p>
                            <div class="sp">
                                <div class="sp0">
                                    <img src="../../html/assets/img/about/web.png" alt="웹앨범">
                                    <h3>간편하고 easy하게</h3>
                                    <p>개인 앨범, 가족 앨범,<br>친구와의 앨범을 통해 <br>추억을 간직할 수 있습니다.</p>
                                </div>
                                <div class="sp0">
                                    <img src="../../html/assets/img/about/coding.png" alt="개발자">
                                    <h3>더욱, private하게</h3>
                                    <p>개발자들이 상주하는 곳,<br>쉽게 해킹당하지 않습니다.</p>
                                </div>
                                <div class="sp0">
                                    <img src="../../html/assets/img/about/browser.png" alt="커밋">
                                    <h3>업데이트는 Git으로</h3>
                                    <p>
                                        commit으로 간편한 업로드,<br>
                                        webp파일로 저장해 <br>용량 부담을 덜었습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
    
                    <article class="con2">
                        <div class="con2_1">
                            <div class="container">
                                <h2>웹 앨범이 <em>왜</em> 필요할까요?</h2>
                            </div>
                        </div>
                        <div class="con2_2"></div>
                        <div class="con2_3">
                            <div class="container">
                                <p>쉬운 <br>온 오프 전환</p>
                                <p>원하는 사람과 <br>쉽게 공유</p>
                                <img src="../../html/assets/img/about/c2_2.jpg" alt="pics">
                                <p>사생활<br> 보호</p>    
                                <p>편리한<br> 보관</p>
                            </div>
                            <div class="container">
                                <span>웹 앨범은 주위 사람들과 소중한 추억을 공유할 수 있고 사진들을 원하는 형태로 <br>
                                웹 앨범을 제작하여 어디서나 볼 수 있고 영원히 간직할 수 있습니다.</span>
                            </div>
                        </div>
                    </article>
    
                    <article class="con3">
                        <div class="container">
                            <h2>앨범은 이런 점이 불편했어요!</h2>
                        </div>
                    </article>
    
                    <article class="con4">
                        <div class="container">
                            <h2>사진 공유 플랫폼의 현황</h2>
                            <h3>사진을 공유하는 대표 플랫폼을 통한 사진 공유 횟수</h3>
                            <div class="con4Con">
                                <span></span>
                                <div class="con4_p">
                                    <div class="con4_p1">
                                        <h4>늘어가는 이용자 수</h4>
                                        <p>
                                            사진 공유 대표 플랫폼의 이용자 수가 증가하고<br> 있습니다.
                                            사진을 인화하여 간직하는 사람보단 <br>
                                            웹으로 공유하고 간직하는 사람들이  <br>늘어나고 있습니다.
                                        </p>
                                    </div>
                                    <div class="con4_p2">
                                        <h4>400억장 이상 공유</h4>
                                        <p>년간 400억장 이상의 사진이 공유되며, <br> 해당 플랫폼 사용자의 63%가 매일 사용합니다.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article id="con5">
                        <div class="con5_1">
                            <div class="container">
                                <h2>Operations and Plans.</h2>
                                    <div class="con5_1flex">
                                    <p>Pics 웹 앨범의 앨범 공유 서비스를 중심으로 기존 플랫폼의 개선을 시도하여
                                        주 타겟층에 맞추어 <br>누구든 보기 쉬운 디자인과 기존의 사진 보관 문제 해결을 통하여 
                                        앨범에 불편함을 가지셨던 분들에게 초점을 맞췄습니다.</p>
                                    <h3>- 프로젝트 목표</h3>
                                </div>
                            </div>
                        </div>
                        <div class="con5_2">
                            <div class="container">
                                <div class="con5_2BoxAll">
                                    <div class="con5_2Box box1">
                                        <h3>심플하고 직관적인 <br>디자인</h3>
                                        <p>누구나 쉽게 이용할 수 있는 <br>보기 좋고 직관적인 UI 디자인</p>
                                    </div>
                                    <div class="con5_2Box box2">
                                        <h3>데이터 손실 걱정 없는<br> 안전한 보관</h3>
                                        <p>사진을 공유하여 데이터 손식없이 안전 보관</p>
                                    </div>
                                    <div class="con5_2Box box3">
                                        <h3>소중한 사람들과 <br>어디서나 쉬운 공유</h3>
                                        <p>소중한 지인들과 나누는 자유로운 공유</p>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </article>    
                    <article class="con8">
                        <div class="container">
                            <h2>AS IS - TO BE</h2>
                            <div class="con8__tb">
                                <table class="con8__tb1">
                                    <tr>
                                        <td>보고싶은 사진을 일일이<br>찾아야 하는 번거로움</td>
                                    </tr>
                                    <tr>
                                        <td>인화해야 하는 비용 문제</td>
                                    </tr>
                                    <tr>
                                        <td>훼손되거나 <br> 분실 위험에서부터 오는 불안감</td>
                                    </tr>
                                    <tr>
                                    <td>항상 정리와 관리가 필요한,<br> 점점 낡아가는 앨범</td>
                                    </tr>
                                </table>
                                <table class="con8__tb2">
                                    <tr>
                                        <td>편리한 휴대성</td>
                                    </tr>
                                    <tr>    
                                        <td>쉬운 공유 시스템</td>
                                    </tr>
                                    <tr>    
                                        <td>날짜별 사진 정리</td>
                                    </tr>
                                    <tr>    
                                        <td>직관적인 UI 디자인</td>
                                    </tr>
                                    <tr>    
                                        <td>사용자를 고려한 UX 디자인</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </article>
                </section>
            </main>

            <script>
        const header0 = document.querySelector("#header0");
        const moveImg = header0.querySelector(".insta__img1");
        const bb = header0.querySelector(".bottoms");
        // const values = moveImg.getBoundingClientRect();


        window.addEventListener("scroll", (e) => {
            if (window.scrollY <= 588.5) {
                moveImg.style.position = "fixed";
                bb.style.display = "none";
                moveImg.style.display = "block";
            } else {
                e.preventDefault();
                moveImg.style.position = "relative";
                bb.style.display = "block";
                moveImg.style.display = "none";
            }

            console.log(window.scrollY);
        })

        document.querySelectorAll("#menu li a").forEach(li => {
            li.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(li.getAttribute("href")).scrollIntoView({
                    behavior:"smooth"
                })
            })
        })
    </script>
  

</body>

</html>