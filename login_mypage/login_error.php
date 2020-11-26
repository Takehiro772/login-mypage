<?php
session_start();
if(isset($_SESSION['id'])){
	header("Location:mypage.php");
}
?>


<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="utf8">
		<title>ログイン画面</title>
		<link rel="stylesheet" type="text/css" href="login_error.css">
	</head>
	
	    <body>
			<header>
				 <img src="4eachblog_logo.jpg">
                 <div class="login"><a href="login.php">ログイン</a></div>
			</header>
			
			<form class="login_form" action="mypage.php" method="post">
			<div class="form_contents">
				<div class = "error_form">
			        <p>メールアドレスまたはパスワードが違っています。</p>
			</div>
				<div class="mail">
				    <p>メールアドレス</p>
				    <input type="text" class="formbox" size="40" name="mail">
				</div>
				<div class="password">
					<p>パスワード</p>
					<input type="password" class="formbox" size="40" name="password">
				</div>
				<div class="save_buttom">
					<label><input type="checkbox"name="save"value="保持">ログイン状態を保持する</label>
				</div>
				
				<div class="subbuttom">
					<input type="submit"value="ログイン" class ="buttom">
				</div>
		    </div>
			</form>
	</body>
</html>