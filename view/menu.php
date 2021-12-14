<ul>
  <?php
    $router = require_once __DIR__.'/../route.php';

    $id = $_GET['id'] ?? '';
    foreach ($router as $name => $r) {
      echo '<li>'
        ."<a href='{$r['url']}?id=$id'>".$r['name'].'</a>'
        .'</li>';
    }
  ?>
</ul>
