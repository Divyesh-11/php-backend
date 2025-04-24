<!DOCTYPE html>
<html a="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        /* border: 3px solid black; */
        width: 200px;
        height: 500px;
    }

    .first-patten {
        /* border: 3px solid black; */
        width: 200px;
        height: 200px;
    }

    .secons-patten {
        /* border: 3px solid black; */
        width: 200px;
        height: 200px;
    }

    .third-patten {
        /* border: 3px solid black; */
        width: 200px;
        height: 200px;
    }
</style>

<body>

    <div class="container">
        <div class="first-patten">
            <h1>first-patten</h1>
            <?php
            $n = 5;
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            ?>

        </div>




        <div class="secons-patten">
            <h1>second-patten</h1>

            <?php
            $n = 5;
            for ($i = $n; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            echo "<br>";
            ?>
        </div>



        <pre class="third-patten">
            <h1>Third-patten</h1>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "  ";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "* ";
    }
    echo "\n";
}
?>
</pre>

    </div>
</body>

</html>