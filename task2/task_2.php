<?php
// 2. Реализовать Тест Струпа
// - на экран вывести сообщение 5 строк по 5 слов в каждом
// - цвета|слова - red, blue, green, yellow, lime, magenta, black, gold, gray, tomato
// - цвет и слово не должны совпадать (например слово lime может быть покрашено в любой из цветов кроме lime),
//   выбор цвета - случайный
$list_words = ['red'=>'red', 'blue'=>'blue', 'green'=>'green', 'yellow'=>'yellow', 'lime'=>'lime',
               'magenta'=>'magenta', 'black'=>'black', 'gold'=>'gold', 'gray'=>'gray', 'tomato'=>'tomato'];
$res = array_chunk($list_words_1, 5);
$list_unique1 = [];

foreach ($list_words as $key => $value)
{
  $list_without_item = $list_words;
  unset($list_without_item[$key]);
  $list_unique1[$key] = array_rand($list_without_item, 1);
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>task_2</title>
</head>
<body>
  <div>
    <?php foreach ($list_unique1 as $key=> $value) { ?>
      <spam> <font color = <?= $value; ?>>  <?= $key; ?> </spam>
    <?php } ?>
  </div>
</body>
</html>

 
