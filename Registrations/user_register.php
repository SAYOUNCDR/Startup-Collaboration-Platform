<?php
include("../includes/db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Next-btn"])) {
        $username = $_POST["fullname"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $sql = "INSERT INTO collaborator (name, password, email) VALUES ('$username', '$password', '$email')";

        mysqli_query($conn, $sql);
    }
}
?>

<!-- 
NOTE
1. db_connecction.php is have been configured (db_name => startup_connect)
2. connection sucess full 
3. test data have been sucessfully inserted in table (table_name => collaborator)  
4. test data (name , password , email are only stored as of now for testing)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <!-- Roboto mono font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form action="./user_register.php" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password*</label>
                <input type="password" id="confirm-password" name="confirm-password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="role">Role*</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="">Select Role</option>
                    <option value="developer">Developer</option>
                    <option value="designer">Designer</option>
                    <option value="marketer">Marketer</option>
                    <option value="legal">Legal Expert</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <!-- Education details  -->
            <div class="form-group">
                <label for="education">Education</label>
                <select id="education" name="education" class="form-control">
                    <option value="">Select Education</option>
                    <option value="bachelor">Bachelor</option>
                    <option value="master">Master</option>
                    <option value="phd">PhD</option>
                </select>
            </div>
            <!-- Portfolio URL details  -->
            <div class="form-group">
                <label for="portfolio">Portfolio URL</label>
                <input type="url" id="portfolio" name="portfolio" class="form-control"
                    placeholder="Enter your portfolio/GitHub/LinkedIn URL">
            </div>

            <button type="submit" name="Next-btn" class="Next-btn">Next</button>
        </form>
    </div>
</body>

</html>