<?php
    include 'functions.php';

    $colors = array( 'red', 'lightgreen', 'lightblue', 'purple', 'white', 'pink', 'green', 'lime', 'amber' );

    // Pick background color
    $bg_color = $colors[rand( 0, count( $colors ) - 1 )];

    // Need to ensure text color is not same as background color
    $box_colors = array_delete( $bg_color, $colors );

    // Random Text color
    $text_color = $box_colors[rand( 0, count( $box_colors ) - 1 )];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    body{

    }
    article, .box{
        float:left;
        margin:1rem;
        box-shadow:1px 1px 4px red;
     }
     article{
         padding:4rem;
         background-color:<?php echo $bg_color; ?>;
         color:<?php echo $text_color; ?>
        }

    .box {
        width:100px;
        height:100px;
        cursor: pointer;
    }
    .box::after{
        content:'Box';
        font-size:2rem;
        padding:1rem

    }



    </style>
</head>

<body>
    <h1 style="text-align:center; padding:2rem"> Refresh The Page </h1>
    <section>
        <article>
            <?php
                echo "Color Pallet:<br />";
                echo "<pre>";
                print_r( $colors );
                echo "</pre>";

                echo "Background: {$bg_color}<br />";

            ?>
        </article>
        <article>
            <?php
                echo "Box colors:<br />";
                echo "<pre>";
                print_r( $box_colors );
                echo "</pre>";

                echo "Text color: {$text_color}<br />";
            ?>
        </article>
    </section>

    <hr>

    <main>


        <?php

            for ( $i = 0; $i <= 100; $i++ ) {

                echo "<div class=\"box\" style=\"background-color:{$colors[rand( 0, count( $colors ) - 1 )]}; color:{$box_colors[rand( 0, count( $box_colors ) - 1 )]} \"></div>";
            }

        ?>
</main>

</body>

</html>
