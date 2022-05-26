<?php
$array = [
   'SKLAD1' => ['EDA' => ['TOVAR1' => ['NAME' => '....','PRICE' => 1234],'TOVAR2' => ['NAME' => '....','PRICE' => 1234],],
                'NAPITKI' => ['TOVAR55' => ['NAME' => '....','PRICE' => 1234],'TOVAR54' => ['NAME' => '....','PRICE' => 1234],],
   ],
   'SKLAD2' => ['EDA' => ['TOVAR66' => ['NAME' => '....','PRICE' => 1234],'TOVAR67' => ['NAME' => '....','PRICE' => 1234],],
                'NAPITKI' => ['TOVAR77' => ['NAME' => '....','PRICE' => 1234],'TOVAR78' => ['NAME' => '....','PRICE' => 1234],],
   ],
];

//Вывод массива со складом/продуктом/товаром

foreach ($array as $sklad => $massiv1) {
    foreach ($massiv1 as $products => $massiv2){
        foreach ($massiv2 as $tovar => $massiv3){
            foreach ($massiv3 as $price => $value){
                if($value == 1234) echo "[$sklad][$products][$tovar] = $value\n";
            }    
        }    
    }
}
echo "\n";

//Вывод массива с товаром и его ценой

foreach ($array as $sklad => $massiv1) {
    foreach ($massiv1 as $products => $massiv2){
        foreach ($massiv2 as $tovar => $massiv3){
            foreach ($massiv3 as $price => $value){
                if($value == 1234) echo "[$tovar] = $value\n";
            }    
        }    
    }
}
?>