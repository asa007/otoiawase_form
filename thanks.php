<?php 
$nickname=htmlspecialchars($_POST['nickname']);
$email=htmlspecialchars($_POST['email']);
$content=htmlspecialchars($_POST['content']);

 // １．データベースに接続する
  $dsn = 'mysql:dbname=otoiawase_form;host=localhost';
  $user = 'root';
  $password='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // ２．SQL文を実行する
  $sql = "INSERT INTO `survey` (`nickname`, `email`, `content`,`created`) VALUES (?, ?, ?,now());";

  //プリペアーステートメント
  $data=array($nickname,$email,$content);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  // ３．データベースを切断する
  $dbh = null;
?>



<?php 
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$content=$_POST['content'];
 ?>



<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>送信完了</title>
</head>
<body>
<h1>お問い合わせありがとうございました！！</h1>

<div>
    <h3>お問い合わせ詳細内容</h3>
    <p>ニックネーム：<?php echo $nickname; ?></p>
    <p>メールアドレス：<?php echo $email; ?></p>
    <p>お問い合わせ内容：<?php echo $content; ?></p>
  </div>

</body>
</html>