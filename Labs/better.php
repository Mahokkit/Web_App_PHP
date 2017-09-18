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
                    while ($pounds <= 100) : ?>
                        <tr>
                            <td>
                                <?php echo $pounds; ?>
                            </td>
                            <td>
                                <?php echo convert($pounds); ?>
                            </td>
                        </tr>
                        <?php $pounds += 10; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </body>
</html>