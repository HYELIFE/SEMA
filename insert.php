<?php
    $host = "localhost";
    $user = "hyejeong99";	// 데이터베이스 아이디 입력
    $pw = "ha10110819!!";		// 데이터베이스 비밀번호 입력
    $dbName = "hyejeong99";		// 데이터베이스 이름 입력, 보통 데이터베이스 아이디랑 같음
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf8");
?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>

<body>
	<?php
		$id = $_POST['gaipId'];
		$pw = $_POST['gaipPw'];
		$name = $_POST['gaipName'];
		$email = $_POST['gaipEmail'];
		$phone = $_POST['gaipHp'];
		$addr = $_POST['gaipAddr'];
		$gender = $_POST['gender_chk'];
		
		$sql = "insert into members(id, pass, name, email, phone, addr, gender) values('$id', '$pw', '$name', '$email', $phone, '$addr', '$gender')";
		// members 테이블에 새로운 레코드 추가

    	$result = $dbConnect->query($sql);
		// 데이터베이스 실행

		echo "
              <script>
				  alert('회원가입이 완료되었습니다');
				  location.href = 'index.php';
              </script>
            ";
	?>
</body>
</html>