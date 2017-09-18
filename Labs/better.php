<?php
    function convert($pounds)
    {
        return round($pounds / 2.2, 2);
    }
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <title>Better Table</title>
    <style>
        table
        {

            border: 1px solid rebeccapurple;
            border-collapse: collapse;
        }

        table tr td
        {
            border: 1px solid rebeccapurple;
        }

        table tr th
        {
            background: burlywood;
        }

    </style>
</head>
    <body>
        <table>
             <thead>
                 <tr>
                     <th>
                         Pounds
                     </th>
                     <th>
                         Kilos
                     </th>
                 </tr>
             </thead>
             <tbody>
             <?php
            $pounds = 0;
            while ($pounds <= 100)
            {
                // fill in rows
                 echo "<tr>";
                     echo "<td>";
                         echo $pounds;
                     echo "</td>";
                     echo "<td>";
                         echo convert($pounds);
                     echo "</td>";
                 echo "</tr>";
                $pounds += 10;
            }
            ?>
             </tbody>
        </table>
    </body>
</html>