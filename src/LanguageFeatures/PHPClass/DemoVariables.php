<?php
$hello = 'world';
$world = 'hello';

echo $$world . "\n"; // ${$world}, $hello , then output 'world'

// price enum list
$priceNameList = array('Original', 'VIP', 'Employee');

// price list
$priceList = array(300, 200, 100);

// dump priceList to meaningful variable name;
for ($i=0; $i < count($priceList); $i++) {
    ${'price'.$priceNameList[$i]} = $priceList[$i];
}

echo 'oringial price: ' . $priceOriginal . "\n";