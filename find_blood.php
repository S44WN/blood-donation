<?php
ob_start();
session_start();
require "db_connection.php";
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
        <div id="comname" class="company-name"></div>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link active" href="find_blood.php">Find Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Be A Donor</a>
                </li>
                <?php
                if (isset($_SESSION['sess_user_id']) && !empty($_SESSION['sess_user_id'])) {
                    echo '<li class="nav-item"><a class="nav-link logout" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div class="blood-group-container">
            <form>
                <select name="bloodgroup" onchange="showUser(this.value)" id="sel" class="blood-group-select">
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
            </form>
        </div>
        <div id="txtHint" class="donors-results"></div>
    </main>

    <?php
    if (isset($_GET)) {
        $a = $_GET["bloodgroup"] ?? "A pos";
    } else {
        $a = "";
    }
    ?>

    <script>
        window.onload = function() {
            var val = '<?php echo $a; ?>';
            var sel = document.getElementById('sel');
            var opts = sel.options;
            for (var opt, j = 0; opt = opts[j]; j++) {
                if (opt.value == val) {
                    sel.selectedIndex = j;
                    break;
                }
            }
            var va = '<?php echo $a; ?>';
            showUser(va);
        }
    </script>
</body>
</html>