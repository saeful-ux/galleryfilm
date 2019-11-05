<html>
	<head>
		<title>
			Admin 
		</title>
	</head>

	<body>
		
		<h3>Film - Film</h3>
		<a href="" >Create</a>
		
		<?php
$pdo = new PDO("mysql:host=localhost;dbname=imdb", 'root', '');
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$uresult = $pdo->query("SELECT * FROM film");

		?>
		<table>
			<tr>
				<td>Film ID</td>
				<td>Film Name</td>
				<td>Film Desc</td>
				<td>Film Date</td>
				<td>Film Image</td>
			</tr>

			<?php
				if ($uresult) {
				  while ($data = $uresult->fetch(PDO::FETCH_ASSOC)) {
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
		</table>
	</body>
</html>
<?php
?>