<?php
    //Запускаем сессию
    session_start();

    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    
    // Возвращаем пользователя на ту страницу, на которой он нажал на кнопку выход.
  
    header("Location: form_auth.php");
	exit();
?>
