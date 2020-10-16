<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="tracker.css">
</head>
<body>

<div id="header">
<img class = "center" src="images/Villanova.png" alt="Villanova">
<h1 style = "">CTS Loan Tracker</h1>
<p>A ticketing system to keep track <br />
    of equipment loans from CTS.
</div>

<div id="columnLeft">
    <p>Test</p>

</div>

<div id="columnMain">
<nav>
    <ul>
                    <!--Navigation Menu-->
        <li><a href="all.php">All</a></li>
        <li><a href="loaned.php">Loaned</a></li>
        <li><a href="returned.php">Returned</a></li>
        <li><a href="inventory.php">Inventory</a></li>
    </ul>
</nav>



</div>

<div id="columnRight">

<div id=loginID>
<h3 id="loginTitle">Logged in as:</h3>
<p id="user"><?php
    echo $_COOKIE["user"];
?></p>
<p><?php
    echo $_COOKIE["permission"];
?></p>
</div>
</div>

<div id="footer">
  <p>Made by Lucas Deane</p>
</div>

</body>
</html>