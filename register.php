<?php
ob_start();
session_start();
require "db_connection.php";

if (isset($_POST['fullname']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['bloodgroup']) && 
    isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['state']) && isset($_POST['town']) && 
    isset($_POST['username']) && isset($_POST['password'])) {
    
    if (!empty($_POST['fullname']) && !empty($_POST['gender']) && !empty($_POST['dob']) && !empty($_POST['bloodgroup']) && 
        !empty($_POST['mobile']) && !empty($_POST['email']) && !empty($_POST['state']) && !empty($_POST['username']) && 
        !empty($_POST['password'])) {
        
        $user = $_POST['username'];
        $pw = md5($_POST['password']);
        $f_name = $_POST['fullname'];
        $birthday = $_POST['dob'];
        $sex = $_POST['gender'];
        $blood = $_POST['bloodgroup'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $town = $_POST['town'];
        $state = $_POST['state'];

        if (isset($_SESSION['sess_user_id']) && !empty($_SESSION['sess_user_id'])) {
            $sess = $_SESSION['sess_user_id'];
            $SQL = "UPDATE donors SET username='$user', password='$pw', fullname='$f_name', dob='$birthday', 
                    sex='$sex', bloodgroup='$blood', mobile='$mobile', email='$email', town='$town', 
                    state='$state' WHERE id='$sess'";
        } else {
            $SQL = "INSERT INTO donors (username, password, fullname, dob, sex, bloodgroup, mobile, email, town, state) 
                    VALUES ('$user', '$pw', '$f_name', '$birthday', '$sex', '$blood', '$mobile', '$email', '$town', '$state')";
        }

        $query_run = mysqli_query($con, $SQL);

        if ($query_run) {
            echo '<div class="alert alert-success">Registration successful!</div>';
            if (isset($_SESSION['sess_user_id']) && !empty($_SESSION['sess_user_id'])) {
                header("Location: logout.php");
            }
        } else {
            echo '<div class="alert alert-danger">Registration failed. Please try again.</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Please fill all required fields.</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="find_blood.php">Find Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="register.php">Be A Donor</a>
                </li>
                <?php
                if (isset($_SESSION['sess_user_id']) && !empty($_SESSION['sess_user_id'])) {
                    echo '<li class="nav-item"><a class="nav-link logout" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
        </nav>
        <h1 class="page-title">Register as Donor</h1>
    </header>

    <main class="container">
        <div class="form-container">
            <form action="register.php" method="post">
                <div class="form-group">
                    <label class="form-label">Username<span class="required">*</span></label>
                    <input class="form-control" type="text" name="username" placeholder="You can use your email as username" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Password<span class="required">*</span></label>
                    <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Full Name<span class="required">*</span></label>
                    <input class="form-control" type="text" name="fullname" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Date of Birth<span class="required">*</span></label>
                    <input class="form-control" type="date" name="dob" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Gender<span class="required">*</span></label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="gender" value="male" checked>
                            Male
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="female">
                            Female
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="other">
                            Other
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Blood Group<span class="required">*</span></label>
                    <select class="form-control" name="bloodgroup" required>
                        <option value="">Select Blood Group</option>
                        <option value="A pos">A+</option>
                        <option value="A neg">A-</option>
                        <option value="B pos">B+</option>
                        <option value="B neg">B-</option>
                        <option value="O pos">O+</option>
                        <option value="O neg">O-</option>
                        <option value="AB pos">AB+</option>
                        <option value="AB neg">AB-</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Mobile Number<span class="required">*</span></label>
                    <input class="form-control" type="text" name="mobile" placeholder="Enter 10 digit mobile number" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Email<span class="required">*</span></label>
                    <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Town</label>
                    <input class="form-control" type="text" name="town" placeholder="Enter town">
                </div>

                <div class="form-group">
                    <label class="form-label">State<span class="required">*</span></label>
                    <input class="form-control" type="text" name="state" placeholder="Enter state" required>
                </div>

                <button type="submit" class="btn btn-primary">Register as Donor</button>
            </form>
        </div>
    </main>
</body>
</html>