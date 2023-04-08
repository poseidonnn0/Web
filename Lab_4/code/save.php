<?php

require __DIR__ . '/vendor/autoload.php';
function redirectToHome(): void
{
    header('Location: index.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];
$ema = $_POST['email'];

$client = new Google_Client();
$client->setApplicationName('Google_table');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$data = [
    [
        $category,
        $ema,
        $title,
        $desc
    ]
];

$values = new Google_Service_Sheets_ValueRange([ 'values' => $data ]);

$range_1 = 'A:D';
$options = [ 'valueInputOption' => 'RAW' ];
$spreadsheetId = '1IbVe8g1RQHnAS1hDpZIxvOEvrsn-cNqDSe1J4ToFSFo';

$response = $service->spreadsheets_values->get($spreadsheetId, $range_1);

$rows = $response->getValues();
$counts = $rows ? count($rows) + 1 : 1;
$range = 'A'.$counts.':D'.$counts;
$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

// read

$response = $service->spreadsheets_values->get($spreadsheetId, $range);

var_dump($response->getValues());

//chmod($filePath, 0777);
redirectToHome();