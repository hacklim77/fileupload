<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Cash</th>
            <th>Credit</th>
            <th>Total</th>
        </tr>
        
        <?php
         $b1 = json_decode($cek->cash);
         $b2 = json_decode($cek->kredit);
         $b3 = json_decode($cek->total);
        //  $no = 0;
        // for ($no=0; $no < 18 ; $no++) {
         array_map(function($bi1,$bi2,$bi3) {
            static $no = 0;
            $no++;
         
            
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $bi1 ?></td>
                    <td><?= $bi2 ?></td>
                    <td><?= $bi3 ?></td>
                </tr>
                <?php
        }, $b1,$b2,$b3);
        // }
        ?>
        <?php /* } */ ?>
    </table>
    <?php
        // $b1 = $num1["biaya1"];
        // $b2 = $num1["biaya2"];
        // $b3 = $num1["biaya3"];

        // array_map(function($bi1,$bi2,$bi3) {
        //     echo "<br>".$bi1, $bi2, $bi3;
        // }, $b1,$b2,$b3);
    ?>
</body>
</html>