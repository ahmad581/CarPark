<?php include "database/db.php"; ?>
<?php include "database/db_functions.php"; ?>
<?php include "database/functions.php"; ?>
<?php SignUpAsAdmin(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Queries.css">
    <link rel="icon" type="image/x-icon" href="Images/logo.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Sign Up As A Officer</title>
</head>
<body>
    <div class="page-container">
        <header class="welcome-header">
            <button class="icon-btn">
                <span class="material-icons-outlined" onclick="back()">arrow_back_ios</span>
            </button>
              
              <div class="go-to-sign-up">
                <h2>Already have an account?</h2>

                <button class="registration-btn btn" onclick="logIn()">
                    log in
                </button>
              </div>
        </header>

        <section class="registration-section">
            <div class="registration-form">
                <h2 style="color:#ff6105">CarPark</h2>
                <h2>Sign Up As A Officer</h2>
                <form action="SignUpAsOfficer.php" method="post">
                    <div class="input-box">
                        <input type="text" name="fullName" placeholder="FullName">
                        <label for="">FullName</label>
                    </div>

                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email">
                        <label for="">Email</label>
                    </div>
                    <!-- Ask the doctor for this one -->
                    <!-- <div class="input-box">
                        <input type="unmber" name="ssn" placeholder="SSN">
                        <label for="">SSN</label>
                    </div> -->
                    
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password">
                        <label for="">Password</label>
                    </div>

                    <div class="input-box">
                        <input type="password" name="confirmedPassword" placeholder="Confirm Password">
                        <label for="">Confirm Password</label>
                    </div>

                    <input type="submit" name="submit" id="" value="Sign Up">
                </form>
            </div>
        </section>
    </div>

    <script>
        function back() {
            window.history.back();
        }

        function logIn() {
            window.location.href="http://localhost/CarPark/LogIn.php";
        }
    </script>
</body>
</html>