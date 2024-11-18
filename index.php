<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Include custom CSS if needed -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- Include Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Include custom JavaScript -->
    <script type="text/javascript" src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</head>

<body>
    <!-- Use Materialize container class -->
    <div class="container">
        <?php include "find_blood.php"; ?>
        <!-- Example form using Materialize classes -->
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field">
                        <select name="bloodgroup" onchange="showUser(this.value)" id="sel">
                            <option value="" disabled selected>Select Blood Group</option>
                            <option value="A pos">A+</option>
                            <option value="A neg">A-</option>
                            <option value="B pos">B+</option>
                            <option value="B neg">B-</option>
                            <option value="O pos">O+</option>
                            <option value="O neg">O-</option>
                            <option value="AB pos">AB+</option>
                            <option value="AB neg">AB-</option>
                        </select>
                        <label>Blood Group</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>