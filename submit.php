<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $movie = htmlspecialchars($_POST['movie']);
    $snacks = htmlspecialchars($_POST['snacks']);

    echo "<h2 style='text-align: center;'>Your Movie Night Plan</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0' style='margin: 0 auto; border-collapse: collapse; font-family: Arial, sans-serif;'>";
    echo "<tr style='background-color: #007BFF; color: white;'>
            <th style='padding: 10px; text-align: left;'>Field</th>
            <th style='padding: 10px; text-align: left;'>Details</th>
          </tr>";
    echo "<tr>
            <td style='padding: 10px; text-align: left; background-color: #f4f4f4;'>Your Name</td>
            <td style='padding: 10px;'>$name</td>
          </tr>";
    echo "<tr>
            <td style='padding: 10px; text-align: left; background-color: #f4f4f4;'>Email</td>
            <td style='padding: 10px;'>$email</td>
          </tr>";
    echo "<tr>
            <td style='padding: 10px; text-align: left; background-color: #f4f4f4;'>Date</td>
            <td style='padding: 10px;'>$date</td>
          </tr>";
    echo "<tr>
            <td style='padding: 10px; text-align: left; background-color: #f4f4f4;'>Selected Movie</td>
            <td style='padding: 10px;'>$movie</td>
          </tr>";
    echo "<tr>
            <td style='padding: 10px; text-align: left; background-color: #f4f4f4;'>Snacks</td>
            <td style='padding: 10px;'>$snacks</td>
          </tr>";
    echo "</table>";
} else {
    echo "Invalid request.";
}
?>
