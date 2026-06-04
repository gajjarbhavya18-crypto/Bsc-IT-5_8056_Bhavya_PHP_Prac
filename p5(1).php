<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$fruits = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

foreach ($fruits as $key => $value) {
    echo "Key: $key, Value: $value<br>";
}
?>
</body>
</html>