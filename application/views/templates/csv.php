<?php

echo "hello";
while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
  $num = count($data);
  echo "<p> $num fields in line $row: <br /></p>\n";

  $row++;
  for ($c=0; $c < $num; $c++) {
    echo $data[$c] . "<br />\n";
  }
}

?>
