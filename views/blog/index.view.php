<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
  <h1>Visi bloga ieraksti</h1>
  <ol>
  <?php foreach ($posts as $post) {
       ?> <li> 
                <a href="show?id=<?= urlencode($post['id']) ?>">
                    <?= $post["content"] ?> 
                </a>
           </li> <?php
    }  ?>
</ol>
</body>
</html>