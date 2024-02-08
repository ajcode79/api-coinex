<?php
header('Content-type: application/json');

$response = json_decode(file_get_contents("https://api.coinex.com/v1/market/ticker/all"), true);

foreach ($response['data']['ticker'] as $name => $currency) {
    $aj[$name] = [
        'Price' => $currency['last'],
    ];
    
}
echo json_encode($aj, 448);
?>
