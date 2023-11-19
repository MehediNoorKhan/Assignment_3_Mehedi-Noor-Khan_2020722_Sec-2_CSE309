<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Contact Us Information</title>

</head>

<body>
    <h2>Contact Us Information</h2>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'assignment3');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM contactus");

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Email</th><th>Contact</th><th>Message</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['contact'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No records found.';
    }

    $conn->close();
    ?>
</body>

</html>