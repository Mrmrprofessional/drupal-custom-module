<?php
function groceries() {
  $groceries['eggs'] = array(
    'price' => 1.99,
    'quantity' => 2,
  );

  $list = '';
  foreach ($groceries as $item => $value) {
    $list .= "<p> $item: </p>";
    foreach ($groceries[$item] as $info) {
      $list .= "<p> $info </p>";
    }
  }
  return $list;
}
?>
