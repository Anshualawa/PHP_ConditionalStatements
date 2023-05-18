<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Armstrong Number</title>
    <style>
        fieldset {
            width: 50vh;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>
            <h2>Check Armstrong Number</h2>
        </legend>
        <pre>Armstrong Number is :-  0  1  2  3  5  6  7  8  9 153  370  371  407 </pre>
        <form method="post">
            Enter Number <input type="number" name="armstNum">
            <button type="submit">Check</button>
        </form>
        <fieldset style="width:35vh">
            <legend>Status</legend>
            <?php

            $num = $_POST['armstNum'];
            echo "<br>";
            echo 'Input : ' . $num;
            $power = strlen($num);
            $result = 0;
            echo "<br>";

            for ($i = 0; $i < $power; $i++) {
                $result += ($num[$i] ** $power);
            }
            echo 'output : ' . $result;
            echo "<br>";

            if ($result == $num) {
                echo '<h2 style="color:#00b008">' . $num . ' is a Armstrong Number </h2>';
            } else {
                echo '<h2 style="color:#ff0000">' . $num . ' is not a Armstrong Number </h2>';
            }

            function MyFun(&$h)
            {
                $num1 = 56;
                $h=8;
            }

            ?>

        </fieldset>
    </fieldset>
</body>

</html>