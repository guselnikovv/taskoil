<?php
$department = array ('А', 'Б', 'Г', 'Д');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="main.css">
   <title>Отдел</title>
 </head>
 <body>

<header>
  <div class="nav">
    <select class="" name="">
      <option value="0">Выберите отдел</option>
      <?php foreach ($department as  $val) {
        echo '<option value="'.$val.'">Отдел '.$val.'</option>';
      } ?>
    </select>
  </div>
</header>

<section>
  <div class="table_bl" id="table">

  </div>
</section>

<script src="main.js"></script>
 </body>
 </html>
