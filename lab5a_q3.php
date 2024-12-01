<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 3.html</title>
</head>
    <body>

        <?php 
            // Function to calculate the area of a rectangle
            function calculateArea($length, $width) {
                return $length * $width;
            }

            // Call the function with example values
            $length = 25;
            $width = 8;
            $area = calculateArea($length, $width);
        ?>

        <h2>Calculate Area of a Rectangle</h2>
        <p>Length: <?php echo $length; ?> </p>
        <p>Width: <?php echo $width; ?> </p><br>

        <?php
            echo "<strong>The area of a rectangle with a length of $length and width of $width is $area</strong>";
        ?>

    </body>
</html>
