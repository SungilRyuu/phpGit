<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 검색</title>
    <?php
        include "../include/style.php";
    ?>
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
        <section id="board-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">강의 게시판</h3>
                <p class="section__desc">
                    검색 결과입니다.
                </p>
                <div class="board__inner">
                    <div class="board__search">

<?php
    function msg($alert){
        echo "<p class='result'> 총 ".$alert." 건이 검색되었습니다.</p>";
    }
    $searchKeyword = $_GET['searchKeyword'];
    $searchOption = $_GET['searchOption'];

    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));

    $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON(b.memberID = m.memberID) ";
    
    switch($searchOption){
        case 'title';
        $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
        break;
        
        case 'content';
        $sql .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
        break;

        case 'name';
        $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
        break;
    }

    $result = $connect -> query($sql);
    $count = $result -> num_rows;

    if($result){
        msg($count);
    }

?>

                        <!-- <form action="boardSearch.php" name="boardSearch" method="GET">
                            <fieldset>
                                <legend class="ir_so">게시판 검색 영역</legend>
                                <div>
                                    <input type="search" name="searchKeyword" class="search-form" placeholder="검색어를 입력하세요." aria-label="search" required>
                                </div>
                                <div>
                                    <select name="searchOption" id="search-option" class="search-option">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="name">등록자</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="search-btn">검색</button>
                                </div>
                                <div>
                                    <a href="boardWrite.php" class="search-btn black">글쓰기</a>
                                </div>
                            </fieldset>
                        </form> -->

                    </div>
                    <div class="board__table">
                        <table class="hover">
                            <colgroup>
                                <col style="width: 5%;">
                                <col>
                                <col style="width: 10%;">
                                <col style="width: 12%;">
                                <col style="width: 7%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $pageView = 10;
    $pageLimit = ($pageView * $page) - $pageView;

    $sql .= " LIMIT {$pageLimit}, {$pageView}";

    $result = $connect -> query($sql);


    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i = 1; $i<=$count; $i++){
                $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<tr>";
                echo "<td>".$boardInfo['boardID']."</td>";
                echo "<td class='left'><a href='boardView.php?boardID={$boardInfo['boardID']}'>".$boardInfo['boardTitle']."</a></td>";
                echo "<td>".$boardInfo['youName']."</td>";
                echo "<td>".date('Y-m-d', $boardInfo['regTime'])."</td>";
                echo "<td>".$boardInfo['boardView']."</td>";
                echo "</tr>";
            }
        }
    }
?>
                            </tbody>
                        </table>
                    </div>
                    <div class="board__pages">
                        <ul>
<?php
    $sql = "SELECT b.boardID FROM myBoard b JOIN myMember m ON(b.memberID = m.memberID) ";

    switch($searchOption){
        case 'title';
        $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
        break;
        
        case 'content';
        $sql .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
        break;

        case 'name';
        $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
        break;
    }
    
    $result = $connect -> query($sql);
 
    $count = $result -> num_rows;
    $boardCount = $result -> fetch_array(MYSQLI_ASSOC);

    // var_dump($boardCount);
    //총 페이지 갯수
                         
    // echo $count;
    $count = ceil($count / $pageView);

    // echo $count;
    // echo "<pre>";
    // var_dump($boardCount);
    // echo "</pre>";

    // 현재 페이지를 기준으로 보여주고 싶은 갯수 
    $pageCurrent = 5; 
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $count) $endPage = $count;

    // 처음으로 가는 페이지
    if($page != 1){
        echo "<li><a href='boardSearch.php?searchKeyword=".$searchKeyword."&searchOption=".$searchOption."&page=1'>처음으로</a></li>";
    }

    // 이전 페이지
    if($page != 1 ){
        $prevPage = $page -1;
        echo "<li><a href='boardSearch.php?searchKeyword=".$searchKeyword."&searchOption=".$searchOption."&page={$prevPage}'>이전</a></li>";
    }


    for($i = $startPage; $i <= $endPage; $i++){
        $active = "";
        if($i == $page){
            $active = "active";
        }
        echo "<li class='{$active}'><a href='boardSearch.php?searchKeyword=".$searchKeyword."&searchOption=".$searchOption."&page={$i}'>{$i}</a></li>";
    }

    // 다음 페이지
    if($page != $endPage ){
        $nextPage = $page + 1;
        echo "<li><a href='boardSearch.php?searchKeyword=".$searchKeyword."&searchOption=".$searchOption."&page={$nextPage}'>다음</a></li>";
    }

      // 마지막으로 가는 페이지
      if($page != $count){
        echo "<li><a href='boardSearch.php?searchKeyword=".$searchKeyword."&searchOption=".$searchOption."&page=".$count."'>마지막으로</a></li>";
    }
    

?>


                            <!-- <li><a href="#">처음으로</a></li>
                            <li><a href="#">이전</a></li>
                            <li class="active"><a href="board.php?page=1">1</a></li>
                            <li><a href="board.php?page=2">2</a></li>
                            <li><a href="board.php?page=3">3</a></li>
                            <li><a href="board.php?page=4">4</a></li>
                            <li><a href="board.php?page=5">5</a></li>
                            <li><a href="board.php?page=6">6</a></li>
                            <li><a href="board.php?page=7">7</a></li>
                            <li><a href="board.php?page=8">8</a></li>
                            <li><a href="#">다음</a></li>
                            <li><a href="#">마지막으로</a></li> -->
                        </ul>
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