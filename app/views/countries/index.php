<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Country</th>
            <th>Capital</th>
            <th>Continent</th>
            <th>Population</th>
        </tr>
        <?php foreach($data['countries'] as $country): ?>
            <tr>
                <td><?=$country->id?></td>
                <td><?=$country->name?></td>
                <td><?=$country->capitalCity?></td>
                <td><?=$country->continent?></td>
                <td><?=number_format($country->population)?></td>
            </tr>    
        <?php endforeach; ?>
     </table>
</body>
</html>