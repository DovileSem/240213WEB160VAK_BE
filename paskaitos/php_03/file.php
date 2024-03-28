<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $filename = 'failas.txt';
        $file = fopen($filename, 'a+');

        $tekstas = "Kazimiras Jarmolovskis\n";
        // Galima naudoti ir su naujos linijos konstanta . PHP_EOL (reiškia \n)
        // $tekstas = "Kazimiras Jarmolovskis" . PHP_EOL;
        fwrite($file, $tekstas);

        $tekstas = "Dovile Semaskiene\n";
        // Galima naudoti ir su naujos linijos konstanta . PHP_EOL (reiškia \n)
        // $tekstas = "Dovile Semaskiene" . PHP_EOL;
        fwrite($file, $tekstas);



        fclose($file);

        $file = fopen($filename, 'r');

        $size = filesize($filename); 

        echo $size;

        $failoTurinys = fread($file, $size);

 

        echo nl2br($failoTurinys);



        fclose($file);


?>
</body>
</html>