<?php
// on va tester la classe Themessage
use model\Themessage;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisation mapping de themessage</title>
</head>
<body>
<h1>Utilisation mapping de themessage</h1>
<?php
    include "public_menu.php";
?>
<?php
    $message1 = new Themessage([]);
    $message2 = new Themessage([

    ]);
    try {
        $user3 = new Themessage([

        ]);
    } catch (Exception $e) {
        echo "<p>{$e->getMessage()}</p>";
    }
    var_dump($themessage1,$message2);
?>
</body>
</html>