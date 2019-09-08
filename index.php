<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>로그인</title>
		<link rel="stylesheet" href="1.css">
 		<link rel="stylesheet" href="design.css">
    </head>

    <body>
            <h2><h2>
            <?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit;
				}
				$id = $_SESSION['id'];
				$name = $_SESSION['name'];
				//
				//contests 여기다 추가하세요
				//
			?>
			<p>

			</p>

      <div class="general">
        <p class="general">안녕하세요.
          <? echo $id; ?>님</p>
        <p><a href='logout.php'>로그아웃</a></p>

        <a href="signup.html" target="right">
          <button>회원가입 하러가기</button>
        </a>

        <a href="https://kmlakmla.herokuapp.com" target="right">
          <button>익명</button>
        </a>
      </div>
      <div class="rowrow">
        <form class="rowrow" name="frm" action="https://kmlakmla.herokuapp.com" target="_blank" method="GET">
          <div><input type="text" name='id' value="<? echo $id; ?>">  </div>
          <div> <input type="submit" value="chat"> </div>
        </form>
      </div>


    </body>

</html>
