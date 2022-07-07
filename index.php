<?php
$allFiles = scandir('.');

$domain =  $_SERVER['HTTP_HOST'];
$schema = $_SERVER['REQUEST_SCHEME'];

$i = 0;

foreach($allFiles as $file) {
  if(in_array($file, ['.', '..', 'index.php'])) {
    continue;
  }

  echo  "<a href='$schema://{$domain}/{$file}'>$schema://{$domain}/{$file}</a><br>\n";

  if($i == 400) {
    echo "And more file\n";
    return;
  }
}
