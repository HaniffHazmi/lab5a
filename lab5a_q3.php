<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication</title>
</head>
<body>
    <?php
        $multiplier = 2;
        // Function to generate multiplication table for a given number
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [$i, $multiplier, $i * $multiplier];
            }
            return $results;
        }
        $multiplicationTable = multiplication($multiplier);
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        // Display the multiplication table
        foreach ($multiplicationTable as $row) {
            echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
