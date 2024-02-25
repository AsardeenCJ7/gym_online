	<style>
/* Custom CSS for BMI Calculator Modal */

/* Modal container */
#bmiModal {
    background-color: rgba(0, 0, 0, 0.7);
}

/* Modal content */
#bmiModal .modal-content {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Modal header */
#bmiModal .modal-header {
    background-color: #2e3337;
    color: #fff;
    border-radius: 10px 10px 0 0;
}

/* Close button in the header */
#bmiModal .close {
    color: #fff;
}

/* Modal title */
#bmiModal .modal-title {
    color: #fff;
}

/* Modal body */
#bmiModal .modal-body {
    padding: 20px;
}

/* Form labels */
#bmiModal label {
    margin-bottom: 5px;
    color: #333;
}

/* Form input fields */
#bmiModal input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Calculate BMI button */
#bmiModal .btn-primary {
    background-color: #27ae60;
    border-color: #27ae60;
}

#bmiModal .btn-primary:hover {
    background-color: #218c53;
    border-color: #218c53;
}

/* BMI result display */
#bmiModal #bmiResult {
    margin-top: 15px;
    font-weight: bold;
    color: #333;
}

/* Modal footer */
#bmiModal .modal-footer {
    border-radius: 0 0 10px 10px;
    padding: 15px;
    background-color: #f0f0f0;
}

/* Close button in the footer */
#bmiModal .modal-footer .btn-secondary {
    background-color: #ccc;
    border-color: #ccc;
}

#bmiModal .modal-footer .btn-secondary:hover {
    background-color: #b3b3b3;
    border-color: #b3b3b3;
}





/* Add this CSS to your existing styles or create a new stylesheet */

/* Login Modal Styles */
.loginMenu {
    text-align: center;
}

.form {
    display: inline-block;
    text-align: left;
}

.loginForm input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.loginForm button {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.loginForm button:hover {
    background-color: #0079b2;
}

.message {
    margin-top: 15px;
}

/* Close Button Styles */
.close {
    font-size: 30px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
}

.close:hover {
    color: #777;
}

/* Background Overlay Styles */
.modal-backdrop {
    background-color: #007bff !important;
}
	</style>

	<header class="header-section">
	    <div class="header-top">
	        <div class="row m-0">
	            <div class="col-md-6 d-none d-md-block p-0">
	            </div>
	            <div class="col-md-6 text-left text-md-right p-0">
	                <?php if(strlen($_SESSION['uid'])==0): ?>
	                <div class="header-info d-none d-md-inline-flex">
	                    <i class="material-icons">account_circle</i>
	                    <a href="#" data-toggle="modal" data-target="#loginModal">
	                        <p>Login</p>
	                    </a>
	                </div>
	                <?php else :?>
	                <div class="header-info d-none d-md-inline-flex">
	                    <i class="material-icons">account_circle</i>
	                    <a href="profile.php">
	                        <p>My Profile</p>
	                    </a>
	                </div>
	                <div class="header-info d-none d-md-inline-flex">
	                    <i class="material-icons">brightness_7</i>
	                    <a href="changepassword.php">
	                        <p>Change Password</p>
	                    </a>
	                </div>
	                <div class="header-info d-none d-md-inline-flex">
	                    <i class="material-icons">logout</i>
	                    <a href="logout.php">
	                        <p>Logout</p>
	                    </a>
	                </div>
	                <?php endif;?>
	            </div>
	        </div>
	    </div>
	    <div class="header-bottom">
	        <a href="index.php" class="site-logo" style="color:#fff; font-weight:bold; font-size:26px;">
	            Fitness Fusion Hub
	            <div class="container">
	                <ul class="main-menu">
	                    <li><a href="index.php" class="active">Home</a></li>
	                    <li><a href="about.php">About</a></li>
	                    <li><a href="contact.php">Contact</a></li>
	                    <li><a href="#" data-toggle="modal" data-target="#bmiModal">BMI</a></li>
	                    <li><a href="registration.php">Registration</a>
	                    </li>

	                    <?php if(strlen($_SESSION['uid'])==0): ?>
	                    <li><a href="admin/">Admin</a></li>
	                    <?php else :?>
	                    <li><a href="booking-history.php">Booking History</a></li>
	                    <?php endif;?>
	                </ul>
	            </div>
	    </div>
	</header>


	<!-- Add this modal where you want the BMI calculator modal to appear -->
	<div class="modal fade" id="bmiModal" tabindex="-1" role="dialog" aria-labelledby="bmiModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="bmiModalLabel">BMI Calculator</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <!-- BMI Calculator Form -->
	                <form id="bmiForm">
	                    <label for="weight">Weight (kg):</label>
	                    <input type="number" id="weight" name="weight" required>

	                    <label for="height">Height (cm):</label>
	                    <input type="number" id="height" name="height" required>

	                    <button type="button" class="btn btn-primary" onclick="calculateBMI()">Calculate BMI</button>

	                    <!-- Display BMI result here -->
	                    <div id="bmiResult"></div>
	                </form>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                <!-- You can add a "Save changes" button here if needed -->
	            </div>
	        </div>
	    </div>
	</div>


	<?php
session_start();
error_reporting(0);
require_once('include/config.php');
$msg = "";

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    if ($email != "" && $password != "") {
        try {
            $query = "select id, fname, lname, email, mobile, password, address, create_date from tbluser where email=:email and password=:password";
            $stmt = $dbh->prepare($query);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($count == 1 && !empty($row)) {
                $_SESSION['uid']   = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['name']  = $row['fname'];
                header("location: index.php");
            } else {
                $msg = "Invalid username and password!";
                echo "<script>
                        document.getElementById('loginErrorMessage').innerHTML = '$msg';
                        document.getElementById('loginErrorMessage').style.display = 'block';
                      </script>";
            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
        echo "<script>
                document.getElementById('loginErrorMessage').innerHTML = '$msg';
                document.getElementById('loginErrorMessage').style.display = 'block';
              </script>";
    }
}
?>


	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
	    aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="loginModalLabel">User LogIn</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <div class="loginMenu">
	                    <div class="form">
	                        <form class="loginForm" method="post" action="">
	                            <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off"
	                                required />
	                            <input type="password" name="password" id="password" placeholder="Password"
	                                autocomplete="off" required />
	                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Login</button>

	                            <!-- Error message display area -->
	                            <?php if ($msg): ?>
	                            <div class="alert alert-danger mt-3" role="alert">
	                                <?php echo $msg; ?>
	                            </div>
	                            <?php endif; ?>

	                            <p class="message">Don't have an account? <a href="registration.php">Create an account</a>
	                            </p>
	                        </form>
	                    </div>
	                    <div id="loginErrorMessage" class="alert alert-danger mt-3" role="alert" style="display:none;">
	                    </div>

	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                <!-- You can add a "Save changes" button here if needed -->
	            </div>
	        </div>
	    </div>
	</div>


	<!-- ... Your existing HTML code ... -->

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
	    aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="loginModalLabel">User LogIn</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <div class="loginMenu">
	                    <div class="form">
	                        <!-- Add onsubmit="return false;" to prevent default form submission -->
	                        <form class="loginForm" method="post" action="" onsubmit="return false;">
	                            <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off"
	                                required />
	                            <input type="password" name="password" id="password" placeholder="Password"
	                                autocomplete="off" required />
	                            <button type="button" id="submit" name="submit" class="btn btn-primary"
	                                onclick="login()">Login</button>
	                            <p class="message">Don't have an account? <a href="registration.php">Create an account</a>
	                            </p>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Your existing JavaScript code -->

	<script>
function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Add your login logic here...

    // For demonstration purposes, show an alert with the login status
    var loginStatus = "Login successful!"; // Replace with your actual login status
    alert(loginStatus);

    // If login is successful, you can close the modal manually or perform other actions
    // $('#loginModal').modal('hide'); // Uncomment this line to hide the modal
}
	</script>

	<!-- ... Your existing JavaScript code ... -->








	<script>
function calculateBMI() {
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;

    // BMI calculation logic
    var bmi = weight / ((height / 100) * (height / 100));

    // Display the BMI result
    var bmiResult = document.getElementById("bmiResult");

    if (isNaN(bmi) || bmi <= 0) {
        // Handle invalid input
        bmiResult.innerHTML = "Invalid input. Please enter valid weight and height.";
    } else {
        var bmiCategory = getBMICategory(bmi);
        bmiResult.innerHTML = "Your BMI is: " + bmi.toFixed(2) + "<br>Category: " + bmiCategory;
    }
}

function getBMICategory(bmi) {
    if (bmi < 18.5) {
        return "Underweight";
    } else if (bmi >= 18.5 && bmi < 25) {
        return "Normal weight";
    } else if (bmi >= 25 && bmi < 30) {
        return "Overweight";
    } else {
        return "Obese";
    }
}
	</script>