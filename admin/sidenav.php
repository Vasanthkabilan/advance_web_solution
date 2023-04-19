<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: loggin.php');
	exit;
}
?>

<!DOCTYPE html> 
<htmI lang="en">
<head> 
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Admin.css">
</head>

<body>
  <nav>
        <div class="container">
            <img src="../images/profile.jpg" class="logo">
         <div class="profile-area">
            <div class="profile">
                <h4>Welcome! <?php echo($_SESSION['email']); ?></h4>
            </div>
        </div>
      </div>
    </nav>

    <main>
        <aside>

            <div class="sidebar">
                <a href="./Admin.php">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h4>Dashboard</h4>
                </a>
                <a href="./Client.php">
                    <span class="material-symbols-sharp">group</span>
                    <h4>Employees</h4>
                </a>
                <a href="./invest.php">
                    <span class="material-symbols-sharp">monitoring</span>
                    <h4>Investments</h4>
                </a>
                <a href="./services.php">
                    <span class="material-symbols-sharp">real_estate_agent</span>
                    <h4>Services</h4>
                </a>
                <a href="./approve.php">
                    <span class="material-symbols-sharp">checklist</span>
                    <h4>Approved Ideas</h4>
                </a>
                <a href="./login.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h4>Logout</h4>
                </a>
            </div>

        </aside>
</body>
</html>
    