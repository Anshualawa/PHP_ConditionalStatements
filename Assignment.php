<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements PHP program</title>

    <style>
        input {
            width: 50px;
        }

        fieldset {
            width: 50vh;
        }

        h3 {
            color: #00b008;
        }

        h4 {
            color: #ff0000;
        }

        div {
            display: flex;
        }
    </style>
</head>

<body>
    <div>
        <fieldset>
            <h1>Q1. write a PHP program to enter marks of five subjects Physics, Chemistry, Biology, Mathematics and
                Computer, calculate percentage and grade by if else.</h1>
            <legend>Calculate Percentage & Grade</legend>
            <fieldset>
                <form method="post">
                    <label for="physics">Physics</label>
                    <input type="number" name="physics">
                    <label for="chemistry">Chemistry</label>
                    <input type="number" name="chemistry">
                    <label for="biology">Biology</label>
                    <input type="number" name="biology"><br><br>
                    <label for="maths">Mathematics</label>
                    <input type="number" name="maths">
                    <label for="computer">Computer</label>
                    <input type="number" name="computer"><br><br>
                    <button type="submit">Calculate</button>
                    <?php
                    $Physics = $_POST['physics'];
                    $Chemistry = $_POST['chemistry'];
                    $Biology = $_POST['biology'];
                    $Mathematics = $_POST['maths'];
                    $Computer = $_POST['computer'];
                    $Total = ($Physics + $Chemistry + $Biology + $Mathematics + $Computer);
                    echo '<br><br>';
                    echo '<table border="1px"><tr><th>Physics</th><th>Chemistry</th><th>Biology</th><th>Mathematics</th><th>Computer</th><th>Total Marks</th></tr><tr><td>' . $Physics . '</td><td>' . $Chemistry . '</td><td>' . $Biology . '</td><td>' . $Mathematics . '</td><td>' . $Computer . '</td><td>' . $Total . '</td></tr></table>';
                    echo '<br><h2>Status</h2>Your Percentage : ';
                    $percentage = $Total / 5;

                    echo $percentage . ' % <br>';

                    if ($percentage < 38) {
                        echo '<h4> your Grage is E you are Failed!</h4>';
                    } else if ($percentage <= 33 && $percentage <= 40) {
                        echo '<h3>Congratulation your clear the exam you are Grage is D </h3>';
                    } else if ($percentage <= 41 && $percentage <= 50) {
                        echo '<h3>Congratulation your clear the exam you are Grage is C2 </h3>';
                    } else if ($percentage <= 51 && $percentage <= 60) {
                        echo '<h3>Congratulation your clear the exam you are Grage is C1 </h3>';
                    } else if ($percentage <= 61 && $percentage <= 70) {
                        echo '<h3>Congratulation your clear the exam you are Grage is B2 </h3>';
                    } else if ($percentage <= 71 && $percentage <= 80) {
                        echo '<h3>Congratulation your clear the exam you are Grage is B1 </h3>';
                    } else if ($percentage <= 81 && $percentage <= 90) {
                        echo '<h3>Congratulation your clear the exam you are Grage is A2 </h3>';
                    } else if ($percentage <= 91 && $percentage <= 100) {
                        echo '<h3>Congratulation your clear the exam you are Grage is A1 </h3>';
                    } else {
                        echo '<h3> invalid Entery!</h3>';
                    }

                    // using Switch statement
                    // echo '<h2> Switch Statement</h2>';
                    switch ($percentage) {
                        case ($percentage >= 1 && $percentage < 33):
                            echo '<h4> your Grage is E you are Failed!</h4>';
                            break;
                        case ($percentage <= 33 && $percentage <= 40):
                            echo '<h3>Congratulation your clear the exam you are Grage is D </h3>';
                            break;
                        case ($percentage <= 41 && $percentage <= 50):
                            echo '<h3>Congratulation your clear the exam you are Grage is C2 </h3>';
                            break;
                        case ($percentage <= 51 && $percentage <= 60):
                            echo '<h3>Congratulation your clear the exam you are Grage is C1 </h3>';
                            break;
                        case ($percentage <= 61 && $percentage <= 70):
                            echo '<h3>Congratulation your clear the exam you are Grage is B2 </h3>';
                            break;
                        case ($percentage <= 71 && $percentage <= 80):
                            echo '<h3>Congratulation your clear the exam you are Grage is B1 </h3>';
                            break;
                        case ($percentage <= 81 && $percentage <= 90):
                            echo '<h3>Congratulation your clear the exam you are Grage is A2 </h3>';
                            break;
                        case ($percentage <= 91 && $percentage <= 100):
                            echo '<h3>Congratulation your clear the exam you are Grage is A1 </h3>';
                            break;
                        default:
                            echo '<h3> invalid Entery!</h3>';
                            break;
                    }
                    ?>
            </fieldset>
            </form>
        </fieldset>
        <fieldset>
            <legend>Check Leap Years</legend>
            <h1>Q2. Write a PHP program to check Leap Years between 1901 to 2016 using nested if.</h1>
            <fieldset>

                <form method="post">
                    <label for="year">Enter Year</label>
                    <input type="text" name="year">
                    <button type="submit">Check</button>
                    <?php
                    $year = $_POST['year'];
                    echo '<br> Year : ' . $year;
                    if ($year % 4 == 0 || $year % 400 == 0) {
                        echo '<br><p style="color:#00b008">' . $year . ' is  a Leap Year.</p>';
                    } else {
                        echo '<br><p style="color:#ff0000">' . $year . ' is not a Leap Year.</p>';
                    }
                    ?>
                </form>

            </fieldset>
        </fieldset>
        <fieldset>
            <legend>find small and larget number</legend>
            <h1>Q3. write a PHP program in which take three numbers by form and find the minimum and maximum numbers
                from it.</h1>
            <fieldset>

                <form method="post">
                    x = <input type="text" name="x">
                    y = <input type="text" name="y">
                    z = <input type="text" name="z">
                    <button type="submit">Find</button><br>
                    <?php
                    $x = $_POST['x'];
                    $y = $_POST['y'];
                    $z = $_POST['z'];
                    echo 'x = ' . $x, '<br> y=' . $y, '<br> x=' . $z;
                    $smallest = $x;
                    $largest = $x;

                    if ($y < $smallest) {
                        $smallest = $y;
                    } else if ($z < $smallest) {
                        $smallest = $z;
                    }

                    if ($y > $largest) {
                        $largest = $y;
                    } else if ($z > $largest) {
                        $largest = $z;
                    }

                    echo "<br><b style='color:#ff0000'>The smallest number is $smallest"."</b>";
                    echo "<br><b style='color:#00b008'>The largest number is $largest"."</b>";
                    ?>

                </form>

            </fieldset>
        </fieldset>
    </div>
</body>

</html>