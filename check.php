<!DOCTYPE html>
<html lang="ja">
<head>
	<title>入力内容確認</title>
	<meta charset="utf-8">
</head>
<body>
 <h1>入力内容確認</h1>

 <?php

   $nickname=$_POST['nickname'];
   $email=$_POST['email'];
   $content=$_POST['content'];

   if ($nickname=='') {
	echo '名前：未入力です';
   }else{
   	echo "ようこそ".$nickname."様";
   }
echo"<br />";
   if ($email=='') {
   	echo 'メールアドレス：未入力です';
   }else{
   	echo "メールアドレス：".$email;
   }
echo"<br />";
   if ($content=='') {
   	echo 'お問い合わせ内容：未入力です';
   }else{
   	echo "お問い合わせ内容：".$content;
   }
 ?>

<form method="post" action="thanks.php">


  <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="content" value="<?php echo $content; ?>">



	<input type="button" value="戻る" onclick="history.back()">
	<?php if ($nickname!=''&&$email!=''&&$content!=''):?>
	<input type="submit" value="OK">
    <?php endif; ?>
	
</form>


</body>
</html>