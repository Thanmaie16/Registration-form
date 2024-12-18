<?php
// Start the session to retrieve the submitted data
session_start();

// Check if the session has the required data
if (!isset($_SESSION['name'])) {
    echo "No data submitted.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Registration Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .details {
            margin-bottom: 20px;
            font-size: 16px;
            color: #555;
        }
        .details strong {
            font-weight: bold;
        }
        .back-btn {
            text-align: center;
            margin-top: 20px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Details</h2>

    <div class="details">
        <p><strong>Full Name:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Email Address:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $_SESSION['phone']; ?></p>
        <p><strong>Gender:</strong> <?php echo $_SESSION['gender']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $_SESSION['dob']; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($_SESSION['address']); ?></p>
        <p><strong>Country:</strong> <?php echo $_SESSION['country']; ?></p>
        <p><strong>Role:</strong> <?php echo $_SESSION['role']; ?></p>
    </div>

    <div class="back-btn">
        <button onclick="window.location.href='form.php'">Back to Form</button>
    </div>
</div>

</body>
</html>
