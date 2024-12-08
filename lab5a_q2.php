<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $students = [
            [
                "name" => "Alice",
                "program" => "BIP",
                "age" => 21
            ],
            [
                "name" => "Bob",
                "program" => "BIS",
                "age" => 20
            ],
            [
                "name" => "Raju",
                "program" => "BIT",
                "age" => 22
            ]
        ];
    ?>

    <h2>Student Information</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student["name"]; ?></td>
                <td><?php echo $student["program"]; ?></td>
                <td><?php echo $student["age"]; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
