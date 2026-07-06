<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$company = array(
    array("Name" => "HP", "Model" => "victus", "Price" => 52000),
    array("Name" => "apple", "Model" => "macbook", "Price" => 150000),
);

foreach ($company as $laptop) {
    echo "Name: " . $laptop["Name"] . 
         ", Model: " . $laptop["Model"] . 
         ", Price: ₹" . $laptop["Price"] . "<br>";
}
?>
</body>
</html>