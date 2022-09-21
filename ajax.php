<?php
$data = [
  [
      'dep' => 'А',
      'agent' => 1,
      'sum' => 100,
    ],
    [
      'dep' => 'Б',
      'agent' => 2,
      'sum' => 150,
    ],
    [
      'dep' => 'Б',
      'agent' => 3,
      'sum' => 200,
    ],
    [
      'dep' => 'Г',
      'agent' => 4,
      'sum' => 250,
    ],
    [
      'dep' => 'Г',
      'agent' => 5,
      'sum' => 300,
    ],
    [
      'dep' => 'Г',
      'agent' => 6,
      'sum' => 350,
    ],
    [
      'dep' => 'Г',
      'agent' => 7,
      'sum' => 400,
    ],
    [
      'dep' => 'Д',
      'agent' => 8,
      'sum' => 450,
    ],
    [
      'dep' => 'Д',
      'agent' => 9,
      'sum' => 500,
    ],
    [
      'dep' => 'Д',
      'agent' => 10,
      'sum' => 50,
    ],
];

if(!empty($_POST['getDataDep'])){
  $dep = $_POST['getDataDep'];
  $table = '<table>
    <tr>
      <th>ОТДЕЛ</th>
      <th>КОНТРАГЕНТ</th>
      <th>СУММА</th>
    </tr>';
  foreach ($data as $v) {
    if($v['dep'] == $dep){
      $table .= '<tr><th>Отдел '.$v['dep'].' </th>';
      $table .= '<th>Контрагент '.$v['agent'].' </th>';
      $table .= '<th> '.$v['sum'].' </th></tr>';
    }
  }
  $table .= '</table>';
  echo $table;
}
 ?>
