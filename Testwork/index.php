<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Главная</title>
		<?php
		include 'DatabaseShell.php';
		//установка соединения с БД
		$db = new DatabaseShell($host, $user, $password, $database);
		
		//нажатие кнопки Удалить
		if(isset($_GET['delid'])){
			$db->del($_GET['delid']);
		}
		?>
	</head>
	<body>
		<p><a href="Insert.php">Добавить запись</a></p>
		<?php	
			//настройки пагинации
			if (isset($_GET['pageno'])){
				$pageno = $_GET['pageno'];
			} 
			else{
				$pageno = 1;
			}		 
			$size_page = 10;
			$offset = ($pageno-1) * $size_page;
			$total_rows = $db->countAll();
			$total_pages = ceil($total_rows / $size_page);
			
			//вывод данных
			$data = $db->selectAll($offset, $size_page);
			while($row = mysqli_fetch_array($data)){
			echo '<div>Имя: '.$row['first_name'].'</br>';
			echo 'Фамилия: '.$row['last_name'].'</br>';
			echo 'Электронная почта: '.$row['email'].'</br>';
			echo 'Компания: '.$row['company_name'].'</br>';
			echo 'Должность: '.$row['position'].'</br>';
			echo 'Телефон: '.$row['first_phone'].'</br>';
			echo 'Запасной телефон: '.$row['second_phone'].'</br>';
			echo 'Второй запасной телефон: '.$row['third_phone'].'</br>';
			echo '<a href="index.php?delid='.$row['id'].'">Удалить</a>';
			echo '<a href="Edit.php?id='.$row['id'].'">Редактировать</a></div></br>';
			}
		?>
		<ul class="pagination">
			<li><a href="?pageno=1">Первая</a></li>
			<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
				<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Назад</a>
			</li>
			<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
				<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Вперед</a>
			</li>
			<li><a href="?pageno=<?php echo $total_pages; ?>">Последняя</a></li>
		</ul>
	</body>
</html>