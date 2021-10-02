<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $nilai = 85;
        $nama = "Amir ";
        if ($nilai >= 85) {
            echo $nama . "mendapat nilai a";
        } else if ($nilai >= 70) {
            echo $nama . "mendapat nilai b";
        } else if ($nilai >= 60) {
            echo $nama . "mendapat nilai c";
        } else {
            echo $nama . "mendapat nilai d";
        }
    ?>
</body>
</html>