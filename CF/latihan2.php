<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>

    <style>
        .warna-baris {background-color: greenyellow;}
    </style>

</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">

<?php 
// for ($i=1; $i <= 5; $i++) {
//     echo "<tr>";
//     for ($j= 1; $j <= 10; $j++) {
//         echo "<td>$i,$j</td>";
//     }
//     echo "</tr>";
// }
?>

<?php 

for ($i = 1; $i <= 5; $i++) : ?>

<!-- Pengkondisian -->
<?php if ($i % 2 == 0) : ?>
    <tr class="warna-baris">
<?php else : ?>
    <tr>
<?php endif; ?>

<!-- Perulangan -->
     <?php for ($j = 1; $j <= 5; $j++) : ?>

        <td> <?= "$i, $j"; ?> </td>

     <?php endfor;?>

    </tr>

<?php endfor; ?>

</table>
</body>
</html>