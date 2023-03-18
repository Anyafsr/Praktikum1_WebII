<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak105.php</title>
    <!-- mengatur tampilan web -->
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
        th {
            font-weight:bold;
            font-size:23px;
            background-color:red;
            padding:20px 25px;

        }
    </style>
</head>
<body>
    <?php
    //membuat variabel menggunakan Associative array numerik index
    $smartphone = [1 => "Samsung Galaxy S22", 2 => "Samsung Galaxy S22+", 3 => "Samsung Galaxy A03", 4 => "Samsung Galaxy Xcover 5"];
    ?>

     <!-- penyusunan tabel  -->
    <table>
        <tr><th>Daftar Smartphone Samsung</th></tr>
        <tr>
            <?php foreach ($smartphone as $sg) : ?>
            <td><?php echo ($sg)?></td>
            </tr>
            <?php endforeach?>
            </table>
</body>
</html>