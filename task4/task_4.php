<form name='test' method='POST' action=''>
<input type='text' name='name'>Введите название команды</input></br>
<input type="submit" value="отправить"></input>
</form>

<?php
include "simple_html_dom.php";

$data = 'name';

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//   if (empty($_POST[$data])) {
//     echo 'Заполните поле.';
//   } else {
//     $team = $_POST[name];
//   }
// }

$url = 'https://terrikon.com';
$team = 'Интер';
$list_url = [];

function getAllUrl() {
  global $list_url;
  global $url;
  $html = file_get_html('https://terrikon.com/football/italy/championship/archive');
  $list = $html->find('.news', 0);
  $list_array = $list->find('a');

  for ($i = 0; $i < sizeof($list_array); $i++) {
    $link =  $list_array[$i]->href;
    $list_url[] = ($url . $link);
  }
  unset($html);
}

function func ($url) {
  global $team;

  $html = file_get_html($url);
  foreach($html->find('.tab') as $row) {
    $counter = count($row->find('tr'));

    for ($i = 0; $i <= $counter; $i++) {
      $e = ($row->find('tr', $i)->find('td', 1)->plaintext);

      if ($team == $e) {
        $position = $row->find('tr', $i)->find('td', 0)->plaintext;
        $name = $row->find('tr', $i)->find('td', 1)->plaintext;
        $list = $html->find('#container #header', 0);
        $text = $list->find('div', 3)->plaintext;
        echo substr($text,0,7) . " год, " . $name . " " . "Позиция: " . $position;
        echo "<br>";
        }
      }
   }
}

getAllUrl();

// foreach ($list_url as $key) {
//   func($key);
// }

// func($list_url[0]);
func($list_url[1]);
// func($list_url[2]);
// func($list_url[3]);
// func($list_url[4]);
// func($list_url[5]);
// func($list_url[6]);

?>
