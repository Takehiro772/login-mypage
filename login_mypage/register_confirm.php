<?php
mb_internal_encoding("utf8");

$temp_pic_name=$_FILES['picture']['tmp_name'];

$original_pic_name=$_FILES['picture']['name'];
$path_filename='./image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
?>

<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="register_confirm.css">
	</head>
	    <header>
			 <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
	</header>
	    <body>
			<div class=confirm_form>
				<h2>会員登録　確認<br></h2>
				<p class="confirm"><br>こちらの内容で登録してもよろしいでしょうか?<br></p>
				<p>氏名:<?php echo $_POST['name'];?><br>
				</p>
				<p>メール:<?php echo $_POST['mail'];?><br>
				</p>
				<p>パスワード:<?php echo $_POST['password'];?><br>
				</p>
				<p>プロフィール写真:<?php echo $original_pic_name;?>
				</p>
				<p>コメント:<?php echo $_POST['comments'];?><br>
				</p>
				
				<form action="register.php">
					<input type="submit" class="button1" value="戻って修正する">
				</form>
				
				<form action="register_insert.php"method="post">
					<input type="submit"class="button2"value="登録する">
					<input type="hidden" value="<?php echo $_POST['name'];?>"name="name">
					<input type="hidden" value="<?php echo $_POST['mail'];?>"name="mail">
					<input type="hidden" value="<?php echo $_POST['password'];?>"name="password">
					<input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
					<input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
				</form>
				
					
			</div>
	</body>
</html>