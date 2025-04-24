    <!-- Chessboard Pattern: Use a nested loop to create a chessboard pattern (8x8 grid). -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        .black {
            background-color: black;
            height: 200px;
            width: 200px;
        }

        .container {
            
            display: grid;
            grid-template-columns: repeat(8, 200px);
        }

        .white {
            background-color: white;
            height: 200px;
            width: 200px;
        }
    </style>

    <body>
        <div class="container">

            <?php

            for ($i = 0; $i < 8; $i++) {
                for ($j = 0; $j < 8; $j++) {
                    if (($i + $j) % 2 == 0) {
            ?>
                        <div class="black">

                        </div>
                    <?php


                    } else {
                    ?>
                        <div class="white">

                        </div>
            <?php
                    }
                }
            }

            ?>


        </div>
    </body>

    </html>