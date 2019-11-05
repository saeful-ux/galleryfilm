<html>
	<head>
		<title>
			Create Film
		</title>
	</head>
	<body>
		<form action="create.php" method="POST" enctype="multipart/form-data">
			<div>
				Film Name : <input type="text" name="film_name" />
			</div>
			<div>
				Film Desc : <input type="text" name="film_desc" />
			</div>
			<div>
				Film Date : <input type="text" name="film_date" />
			</div>
			<div>
				File Image : <input type="file" name="file_image" />
			</div>
			<div>
				<button type="submit">Create</button>
			</div>
		</form>

		<?php
			if(isset($_POST['film_name']) && $_POST['film_name'] != ""){
				$file_name  = $_POST['film_name'];
				$file_desc  = $_POST['film_desc'];
				$file_date  = $_POST['film_date'];
				$file_image = $_FILES['file_image'];

				$pdo = new PDO("mysql:host=localhost;dbname=imdb", 'root', '');
				$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
				$result = $pdo->query("SELECT * from film");

				while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
					echo '<tr>';
					echo '<td>'.$data['film_name'].'</td>';
					echo '<td>'.$data['film_desc'].'</td>';
					echo '<td>'.$data['film_date'].'</td>';
					echo '<td>'.$data['file_image'].'</td>';
					echo '<td><a href="#">Update</></td>';
					echo '<td><a href="#">Delete</></td>';
					echo '</tr>';
				  }
			}
		?>
	</body>
</html>