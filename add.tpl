<!DOCTYPE html>
<html>
   <head>
   		<meta charset="UTF-8">
    	<title>Добавяне</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col">
               <h2>Добавяне на продукт</h2>
               <form method="post" action="" enctype="multipart/form-data">
                  <label class="form-label">Категория:</label>
                  <select class="form-select" name="category_id">
                     {foreach from=$result item=item key=key}
                     <option value="{$item[0]}">{$item[1]}</option>
                     {/foreach}
                  </select>
                  <label class="form-label">Име:</label>
                  <input type="text" class="form-control mb-3" name="name">
                  <label class="form-label">Изображение:</label>
                  <input type="file" class="form-control mb-3" name="image" accept="image/jpeg">
                  <label class="form-label">Цена:</label>
                  <input type="text" class="form-control mb-3" name="price">
                  <input type="submit" class="btn btn-primary" name="save" value="Добави">
               </form>
            </div>
         </div>
      </div>
   </body>
</html>