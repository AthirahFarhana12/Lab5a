<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 1.html</title>
</head>
<body>
    <?php 
        $name = "Nur Athirah Farhana Binti Mohd Hisham";
        $matricNumber = "AI220196";
        $course = "Bachelor of Computer Science (Information Security)";
        $yearOfStudy = "Year 3 2024/2025";
        $address = "38, Jalan Universti 15, 86400, Sri Gading, Johor";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>
