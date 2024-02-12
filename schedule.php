<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Chilufya Mwamba">
    <title>My Schedule</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.png" alt="Logo" style="width:40px;">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="schedule.php">My Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Include/session_end.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="jumbotron">
        <div class="container-fluid justify-content-center">
            <form class=action="Include/schedule.inc.php" method="post">
                <h2>Edit Scheduled Tasks:</h2>

                <div class="form-group">
                    <label for="client">Name</label>
                    <input type="text" id="yourname" name="yname" class="form-control mb-2 mr-sm-2" placeholder="Your Name...." required>
                </div>

                <div class="form-group">
                    <label for="client">Name Of Client</label>
                    <input type="text" id="client" name="cname" class="form-control mb-2 mr-sm-2" placeholder="Client Name...." required>
                </div>

                <div class="form-group">
                    <label for="duration">Project Duration</label>
                    <input type="text" id="duration" name="duration" class="form-control mb-2 mr-sm-2" placeholder="Project Duration...." required>
                </div>

                <div class="form-group">
                    <label for="enddate">Date of Project Handover</label>
                    <input type="date" id="edate" name="edate" class="form-control mb-2 mr-sm-2" placeholder="End Date" required>
                </div>

                <div class="form-group">
                    <label for="description">Project Description</label>
                    <textarea id="description" class="form-control mb-2 mr-sm-2" name="description" placeholder="Project Description...." style="height: 100px" required></textarea>
                </div>
                <button type="submit" name="task-submit" class="btn btn-primary">Enter</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid">
            <h2>Tasks Summary:</h2>

            <?php
                $mysqli = new mysqli('localhost', 'root', '', 'ET_System') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM task") or die($mysqli_error);
                //pre_r ($result)

                ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Your Name</th>
                        <th>Client Name</th>
                        <th>Project Duration</th>
                        <th>Date of Project Handover</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['ClientName']; ?></td>
                    <td><?php echo $row['Duration']; ?></td>
                    <td><?php echo $row['EndDate']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td>
                        <a href="schedule.php?edit=<?php echo $row['ID']; ?> " class="btn btn-info">Edit</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <?php

function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    } 
?>
    </div>
</body>

</html>
