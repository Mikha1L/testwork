<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Добавление записи</title>
		<?php
		include 'DatabaseShell.php';
		$db = new DatabaseShell($host, $user, $password, $database);
		
		//Отправка формы
		//Как бы объединить с Edit'ом?..
		if(isset($_POST[submit_btn])){
			$data = [];
			
			if(empty($_POST[first_name]) || empty($_POST[last_name]) || empty($_POST[email])){
				echo '<b>'.'Поля Имя, Фамилия и Электронная почта должны быть заполнены!'.'</b>';
			}
			else{
				$data[0] = "'".$_POST[first_name]."'";
				$data[1] = "'".$_POST[last_name]."'";
				$data[2] = "'".$_POST[email]."'";
				$data[3] = empty($_POST[company_name]) ? 'NULL' : "'".$_POST[company_name]."'";
				$data[4] = empty($_POST[position]) ? 'NULL' : "'".$_POST[position]."'";
				$data[5] = empty($_POST[first_phone]) ? 'NULL' : "'".$_POST[first_phone]."'";
				$data[6] = empty($_POST[second_phone]) ? 'NULL' : "'".$_POST[second_phone]."'";
				$data[7] = empty($_POST[third_phone]) ? 'NULL' : "'".$_POST[third_phone]."'";
				$db -> save($data);
				echo '<b>'.'Запись добавлена'.'</b>';
			}		
		}
		?>		
	</head>
	<body>
		<p><a href="index.php">На главную</a></p>
		<form method="POST"> 
			<input name="first_name" placeholder="Имя" maxlength="255" value="<?php if(isset(($_POST[first_name]))){ echo $_POST[first_name]; } ?>"></br>
			<input name="last_name" placeholder="Фамилия" maxlength="255" value="<?php if(isset(($_POST[last_name]))){ echo $_POST[last_name]; } ?>"></br>
			<input name="email" placeholder="Электронная почта" maxlength="255" value="<?php if(isset(($_POST[email]))){ echo $_POST[email]; } ?>"></br>
			<input name="company_name" placeholder="Компания" maxlength="255" value="<?php if(isset(($_POST[company_name]))){ echo $_POST[company_name]; } ?>"></br>
			<input name="position" placeholder="Должность" maxlength="255" value="<?php if(isset(($_POST[position]))){ echo $_POST[position]; } ?>"></br>
			<input name="first_phone" placeholder="Основной телефон" maxlength="20" value="<?php if(isset(($_POST[first_phone]))){ echo $_POST[first_phone]; } ?>"></br>
			<input name="second_phone" placeholder="Запасной телефон" maxlength="20" value="<?php if(isset(($_POST[second_phone]))){ echo $_POST[second_phone]; } ?>"></br>
			<input name="third_phone" placeholder="Второй запасной телефон" maxlength="20" value="<?php if(isset(($_POST[third_phone]))){ echo $_POST[third_phone]; } ?>"></br>
			<input type="submit" name="submit_btn">
		</form>
	</body>
</html>