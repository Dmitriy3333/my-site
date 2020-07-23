<?php 
	require "db.php";
?>

<?php if( isset($_SESSION['logged_user']) ) : ?>
<br>
Здравствуйте, <?php echo $_SESSION['logged_user']->login; ?>!
Вы успешно авторизированны! <br>
Рассылка будет автоматически присылать информацию вам на email!
<hr>
<a href="logout.php">Выйти из учётной записи</a><br><br>
<a href="index.php">На главную</a> 
<?php else : ?>
	<a href="/login.php">Авторизация</a> <br>
	<a href="/signup.php">Региистрация</a>
<?php endif; ?>

<heder> 
	<meta charset="utf-8">
</heder>