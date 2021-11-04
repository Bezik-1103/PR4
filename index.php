<?include "subjects.php";
$s = new Subjects;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PR4</title>
</head>
<body>
	<div class="container">
		<?$s->show($s->subjects_array);
		  $s->changeArray('Фізична культура','Геометрія');
		  $s->show($s->subjects_array);
		  $s->show(array_unique($s->subjects_array));
		  $s->changeArray2('Геометрія','Фізична культура',2);
		  asort($s->subjects_array);
		  $s->show($s->subjects_array);
		  $s->expansion();
		  ?><hr><?
		  echo $s->students;
		  $s->students = explode(",",$s->students);
		  $s->show($s->students);
		  $s->students = implode(",",$s->students);
		  ?><hr><?
		  echo $s->students;
		  ?>
	</div>
</body>
</html>