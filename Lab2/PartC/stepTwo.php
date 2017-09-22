<!DOCTYPE html>
<html>
    <head>
        <title>Process Page for Get</title>
    </head>
    <body>

        <?php

        echo "Hello, " . $_GET['firstName'] . " " . $_GET['lastName'] . "! ";

        if ($_GET['day'] <= 19 && $_GET['month'] = 1)
        {
            $date = $_GET['day'] .  "-" . $_GET['month'] . "-2013";
        }
        else
        {
            $date = $_GET['day'] .  "-" . $_GET['month'] . "-2012";
        }

        $current = strtotime($date);

        if($current >= strtotime('20-1-2012') && $current <= strtotime('18-2-2012'))
        {
            echo "Your Zodiac sign is Aquarius";
        }
        elseif($current >= strtotime('19-2-2012') && $current <= strtotime('20-3-2012'))
        {
            echo "Your Zodiac sign is Pisces";
        }
        elseif($current >= strtotime('21-3-2012') && $current <= strtotime('19-4-2012'))
        {
            echo "Your Zodiac sign is Aries";
        }
        elseif($current >= strtotime('20-4-2012') && $current <= strtotime('20-5-2012'))
        {
            echo "Your Zodiac sign is Taurus";
        }
        elseif($current >= strtotime('21-5-2012') && $current <= strtotime('20-6-2012'))
        {
            echo "Your Zodiac sign is Gemini";
        }
        elseif($current >= strtotime('21-6-2012') && $current <= strtotime('22-7-2012'))
        {
            echo "Your Zodiac sign is Cancer";
        }
        elseif($current >= strtotime('23-7-2012') && $current <= strtotime('22-8-2012'))
        {
            echo "Your Zodiac sign is Leo";
        }
        elseif($current >= strtotime('23-8-2012') && $current <= strtotime('22-9-2012'))
        {
            echo "Your Zodiac sign is Virgo";
        }
        elseif($current >= strtotime('23-9-2012') && $current <= strtotime('22-10-2012'))
        {
            echo "Your Zodiac sign is Libra";
        }
        elseif($current >= strtotime('23-10-2012') && $current <= strtotime('21-11-2012'))
        {
            echo "Your Zodiac sign is Scorpio";
        }
        elseif($current >= strtotime('22-11-2012') && $current <= strtotime('21-12-2012'))
        {
            echo "Your Zodiac sign is Sagittarius";
        }
        elseif($current >= strtotime('22-12-2012') && $current <= strtotime('19-1-2013'))
        {
            echo "Your Zodiac sign is Capricorn";
        }
        else
        {
            echo "Invalid input!";
        }
        ?>

    </body>
</html>