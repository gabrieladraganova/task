<html>
   <head>
      <meta charset="UTF-8">
      <title>Начало</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script type="text/javascript" src="jquery-3.5.1.min.js"></script> 
      {literal}
      <script type="text/javascript">
         $(document).ready(function() {
           $('.delete').click(function(e) {
             let $this = $(this);
             let id = $this.data('id');
             console.log(id);
             $.post('deleteCat.php', {
               'id': id
             }, function() {
               $this.parent().parent().remove();
             });
           });
           $('.delete2').click(function(e) {
             let $this = $(this);
             let id = $this.data('id');
             $.post('deleteProd.php', {
               'id': id
             }, function() {
               $this.parent().parent().remove();
             });
           });
         });
      </script> 
      {/literal} 
   </head>
   <body>
      <div class="container">
      <div class="row">
         <div class="col">
            <h2>Всички продукти</h2>
         </div>
      </div>
      <div class="row">
         <div class="col">        
         </div>
      </div>
      <div class="row">
         <div class="col">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">id</th>
                     <th scope="col">Категория</th>
                     <th scope="col">Продукт</th>
                     <th scope="col">Снимка</th>
                     <th scope="col">Цена</th>
                  </tr>
               </thead>
               <tbody>
                  {foreach from=$data item=item key=key}
                  <tr>
                     <th scope="row">{$item.product_id}</th>
                     <td>{$item.cat_name}</td>
                     <td>{$item.name}</td>
                     <td><img src="data:image/jpg;charset=utf-8;base64,{base64_encode($item.image)}" width="100" height="100"></td>
                     <td> {$item.price}</td>
                     <td><a href="updateProd.php?id={$item.product_id}" class="text-info text-decoration-none">Редактиране</a></td>
                     <td><a href="javascript:;" class="delete2 text-danger text-decoration-none" data-id="{$item.product_id}">Изтриване</a></td>
                  </tr>
               </tbody>
               {/foreach} 
            </table>
         </div>
      </div>
      <form >
         <div class="row">
            <span>Филтрирай по сума:</span>
            <div class="col-4">
               <div class="mb-3">
                  <label for="betweenfrom" class="form-label">От:</label>
                  <input type="text" class="form-control" id="betweenfrom" name="betweenfrom">
               </div>
            </div>
            <div class="col-4">
               <div class="mb-3">
                  <label for="betweento" class="form-label">До:</label>
                  <input type="text" class="form-control" id="betweento" name="betweento">
               </div>
            </div>
            <div class="col-4">
               <div class="mb-3">
                  <label for="order" class="form-label">Избери подреждане:</label>
                  <select name="order" class="form-select">
                     <option value="">без подреждане</option>
                     <option value="asc">възходящо</option>
                     <option value="desc">низходящо</option>
                  </select>
               </div>
            </div>
            <div class="row">
               <div class="col text-center">            
                  <button type="submit" class="btn btn-primary ">Избери</button>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <a href="index.php">Начало</a>
               </div>
               <div class="col text-end">
                  <a href="pdf.php">Експортиране в PDF</a>
               </div>
            </div>
         </div>
         <div class="row mb-3">
            <div class="col">
               <a href='add.php' class="link-primary">Добави продукт</a> 
            </div>
         </div>
      </form>
      <div class="row">
         <div class="col">
            <h2>Всички категории</h2>
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">id</th>
                     <th scope="col">Категория</th>
                     <th scope="col">Описание</th>
                  </tr>
               </thead>
               <tbody>
                  {foreach from=$data2 item=item2 key=key2}
                  <tr>
                     <th scope="row">{$item2.category_id}</th>
                     <td>{$item2.cat_name}</td>
                     <td> {$item2.description}</td>
                     <td><a href="updateCat.php?id={$item2.category_id}" class="text-info text-decoration-none">Редактиране</a></td>
                     <td><a href="javascript:;" class="delete text-danger text-decoration-none" data-id="{$item2.category_id}">Изтриване</a></td>
                  </tr>
               </tbody>
               {/foreach} 
            </table>
         </div>
         <div class="row">    
            <a href='addCat.php' class="link-primary">Добави категория</a> 
         </div>
      </div>
   </body>
</html>