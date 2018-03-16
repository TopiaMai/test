<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>入力確認</title>
</head>
<body>
<fieldset>
<legend>入力確認</legend>
<p>
	<?php
		print(htmlspecialchars($_POST['myname'],ENT_QUOTES).'様の登録内容は、下記の内容でよろしいでしょうか？');
	?>
</p>
<dl>
	<dt>氏名：</dt>
	<dd><?php
	print(htmlspecialchars($_POST['myname'],ENT_QUOTES));
	?></dd>
	
	<dt>性別：</dt>
	<dd><?php
	print(htmlspecialchars($_POST['gender'],ENT_QUOTES));
	?></dd>
	
	<dt>年齢：</dt>
	<dd><?php
	print(htmlspecialchars($_POST['age'],ENT_QUOTES));
	?></dd>
	
	<dt>郵便番号：</dt>
	<dd><?php
	print('〒'.htmlspecialchars($_POST['postNumber1'].'-'.$_POST['postNumber2'],ENT_QUOTES));
	?></dd>
	
	<dt>Eメールアドレス：</dt>
	<dd><?php
	print(htmlspecialchars($_POST['mailAdress'],ENT_QUOTES));
	?></dd>
	
	<dt>一番好きなラーメン：</dt>
	<dd><?php
	print(htmlspecialchars($_POST['favoriteRamen'],ENT_QUOTES));
	?></dd>
	
	<dt>好きなトッピング：</dt>
	<dd><?php
	if(isset($_POST['topping'])){
		foreach($_POST['topping'] as $top){
			print('・'.htmlspecialchars($top,ENT_QUOTES).'<br>');
		}
	}else{
		print('なし');
	}
	?></dd>
	
	<dt>ご意見・ご感想</dt>
	<dd><?php
	print(htmlspecialchars($_POST['opinions'],ENT_QUOTES));
	?></dd>
</dl>
<p>
	<input type="submit" value="確定">
	<input type="button" value="修正" onClick="history.back()">
</p>
</fieldset>
</body>
</html>