<?php
// Start the session to pass data between pages
session_start();

// PHP section for processing the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['role'] = $_POST['role'];

    // Redirect to display page
    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Registration Form</title>
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
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-size: 16px;
            color: #555;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-group input[type="file"] {
            padding: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-btn {
            text-align: center;
            margin-top: 20px;
        }
        .success-message {
            display: block;
            padding: 10px;
            margin: 20px 0;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 5px;
        }
        .uploaded-photo {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
            border: 2px solid #ddd;
            border-radius: 5px;
        }
        .form-group .dynamic-fields {
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enhanced Registration Form</h2>

    <form action="form.php" method="post" enctype="multipart/form-data" id="registrationForm">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" id="phone" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <select name="country" id="country" required>
                <option value="">Select Country</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="India">India</option>
                <option value="UK">UK</option>
            </select>
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="">Select Role</option>
                <option value="Student">Student</option>
                <option value="Employee">Employee</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group dynamic-fields" id="studentFields">
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" placeholder="Enter course name for students">
        </div>

        <div class="form-group dynamic-fields" id="employeeFields">
            <label for="employeeId">Employee ID:</label>
            <input type="text" name="employeeId" id="employeeId" placeholder="Enter employee ID for employees">
        </div>

       

        <button type="submit">Submit</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Show dynamic fields based on role selection
        $('#role').change(function () {
            var selectedRole = $(this).val();
            $('.dynamic-fields').hide(); // Hide all dynamic fields
            if (selectedRole === 'Student') {
                $('#studentFields').show();
            } else if (selectedRole === 'Employee') {
                $('#employeeFields').show();
            }
        });

        // Photo preview before submission
        $("#photo").change(function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                if ($("#photo-preview").length) {
                    $("#photo-preview").attr("src", e.target.result);
                } else {
                    $("<img />", {
                        id: "photo-preview",
                        src: e.target.result,
                        class: "uploaded-photo"
                    }).insertAfter("#photo");
                }
            };
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

</body>
</html>
