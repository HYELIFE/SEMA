<?php
    $host = "localhost";
    $user = "hyejeong99";	// 데이터베이스 아이디 입력
    $pw = "ha10110819!!";		// 데이터베이스 비밀번호 입력
    $dbName = "hyejeong99";         // 닷홈 데이터베이스 아이디 입력
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "데이터베이스 {$dbName}에 접속 실패";
    }
    ?>
