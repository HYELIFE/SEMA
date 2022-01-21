<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
?>
<?php
	if(isset($_SESSION["userid"])){	// 세션에 로그인이 적용되어 있으면 로그인 페이지 입장불가
		echo("
			<script>
			alert('잘못된 경로입니다!')
			history.go(-1)
			</script>
		");
	}
?>
<!DOCTYPE html>

<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>로그인 폼</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&family=Noto+Sans+KR&display=swap');
        *{
            margin: 0 auto; padding: 0; 
            list-style: none;
        }
        a{text-decoration: none}
        body{
            background:#fff ;
        }
        #all{
            width:600px; height: 500px;background:#FFF;
            position: relative;left:50%;margin-left: -300px; top:150px;
        }
        form{
            width:500px; height: 320px; 
             position: absolute; left:50%;margin-left: -250px; top:130px;
            border:3px solid #A79687; border-radius: 10px
        }
        .logo{
        }
        .logo a img{
            width:120px;position:absolute;left:50%; margin-left: -60px;top:40px; 
        }
        form>ul{width:280px; height: 100px;margin-top: 150px; float:left;margin-left: 40px}
        form>ul>li{width:280px;}
        form>ul>li>input{width:250px;height: 40px;
            font-family: "Noto Sans KR";
            border-radius: 10px; border: 2.5px solid #a7a29d;color:#a7a29d
        
        }
        form>ul>li:nth-of-type(2){margin-top:20px;}
        form>input{border:none; background: #a7a29d; padding:50px 40px; border-radius: 10px; float:right;margin-top:143px; margin-right: 40px;}
        
        .underleft{width:180px; height: 30px;float:left; margin: 20px 0 0 40px;position: relative;}
        .underleft img{width:20px;position:absolute; }
        .underleft a{font-family: "Noto Sans KR"; font-size: 13px;color:#a7a29d;position:absolute;left:30px; }
        
        .underright{width:100px; height: 20px; float:left; margin:15px 0 0 160px;position: relative;}
        .underright img{width:18px;position:absolute;left:0px}
        .underright a{font-family: "Noto Sans KR"; font-size: 13px;color:#a7a29d;position:absolute;left:30px;}
    </style>
</head>
<body>
    
    <div id="all">
        <form name="login_form" method="post" action="login_insert.php">
            <div class="logo">
                <a><img src="../img/LOGINLOGO.png" alt="로고"></a>
            </div>
            <ul>
                <li>
                    <input type="text" id="user_id" name="id" size="10" placeholder="　아 이 디" required onKeyDown="javascript:if (event.keyCode == 13) check_input();">
                </li>
                <li>
                    <input type="password" id="user_pw" name="pass" size="10" placeholder="　비 밀 번 호" required onKeyDown="javascript:if (event.keyCode == 13) check_input();">
                </li>
            </ul>
            <input type="button" id="butt"  alt="login" value="Login">
            
            <div class="underleft">
                <img src="../img/loginlock.png" alt="icon">
                <a>아이디 / 비밀번호 찾기</a>
            </div>
            <div class="underright">
                <img src="../img/loginuser.png" alt="icon">
                <a href="http://hyejeong99.dothome.co.kr/member_form.php">회원가입</a>
            </div>
        </form>
    </div>
    
</body>
<script>
   function check_input()
   {
       if (!document.login_form.id.value) // 로그인_폼 안에 id 네임을 가진 인풋 태그 안에 값이 입력되어 있지 않다면
       {
           document.login_form.id.focus(); // 아이디 란에 커서 위치
           return;	// 방탈출
       }

       if (!document.login_form.pass.value)
       {
           document.login_form.pass.focus();
           return;
       }
       document.login_form.submit();
   }
</script>
</html>