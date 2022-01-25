<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Редактиране на продукт</h2>
				<form method="post" action="">
		<input type="hidden" name="id" value="{$category.category_id}" >
		
		<label class="form-label">Име на категория:</label>
		<input type="text" class="form-control mb-3" name="name" value="{$category.cat_name}" >
		<label class="form-label">Описание:</label>
		<input type="text" class="form-control mb-3" name="description" value="{$category.description}">
		
		<input type="submit" class="btn btn-primary" name="save" value="Редактирай">
	</form>
			</div>
		</div>
	</div>
	
</body>
</html>