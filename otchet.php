<?php
session_start();
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$servername = "localhost";
$database = "techshop";
$username = "root";
$db_password = "";
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $db_password, $opt);
$stmt = $pdo->query("SELECT sum(count * price) as 'total',
       sum(count * price) * 0.2 as 'profit'
FROM order_products
JOIN products p on order_products.product_id = p.id");
$stmt = $stmt->fetchAll();
$total = 0;
$profit = 0;
$date = date('Y-m-d');

foreach ($stmt as $key => $value) {
  $total = $value['total'];
  $profit = $value['profit'];
}


$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('C1', 'Магазин бытовой техники TECHSHOP');
$sheet->mergeCells('C1:G1');
$sheet->getStyle('C1')->applyFromArray([
  'font' => [
    'name' => 'Arial',
    'bold' => true,
    'italic' => false,
    'underline' => Font::UNDERLINE_DOUBLE,
    'strikethrough' => false,
    'color' => [
      'rgb' => '808080'
    ]
  ],
  'borders' => [
    'allBorders' => [
      'borderStyle' => Border::BORDER_THIN,
      'color' => [
        'rgb' => '808080'
      ]
    ],
  ],
  'alignment' => [
    'horizontal' => Alignment::HORIZONTAL_CENTER,
    'vertical' => Alignment::VERTICAL_CENTER,
    'wrapText' => true,
  ]
]);

$sheet->setCellValue('D2', 'Отчет продаж');
$sheet->mergeCells('D2:E2');
$sheet->getStyle('D2')->applyFromArray([
  'font' => [
    'bold' => true
  ]
]);
$sheet->setCellValue('A3', 'Дата отчета:');
$sheet->mergeCells('A3:B3');
$sheet->setCellValue('C3', $date);
$sheet->mergeCells('C3:D3');

$sheet->setCellValue('A4', 'Продано за:');
$sheet->mergeCells('A4:B4');
$sheet->setCellValue('C4', 'Все время');
$sheet->mergeCells('C4:D4');

$sheet->setCellValue('A5', 'Общая прибыль');
$sheet->mergeCells('A5:B5');
$sheet->setCellValue('C5', $total);
$sheet->mergeCells('C5:D5');

$sheet->setCellValue('A6', 'Чистая прибыль:');
$sheet->mergeCells('A6:B6');
$sheet->setCellValue('C6', $profit);
$sheet->mergeCells('C6:D6');

try {
  $writer = new Xlsx($spreadsheet);
  $writer->save('qwe.xlsx');

} catch (PhpOffice\PhpSpreadsheet\Writer\Exception $e) {
  echo $e->getMessage();
}