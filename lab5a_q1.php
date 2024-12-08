<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Muhammad Haniff Hazmi Bin Mohd Daros";
        $matricNo = "AI220156";
        $course = "Software Engineering";
        $year = 3;
        $address = "Universiti Tun Hussein Onn Malaysia"

    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"?></td>
        </tr>
        <tr>
            <td>Matric No</td>
            <td><?php echo "$matricNo"?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><?php echo "$year"?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"?></td>
        </tr>
    </table>
</body>
</html>