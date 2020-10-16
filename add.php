<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="tracker.css">
    <link rel="stylesheet" href="add.css">
</head>
<body>

<div id="header">
<img id="centImg" src="images/Villanova.png" alt="Villanova">
<h1 style = "">CTS Loan Tracker</h1>
<p>A ticketing system to keep track <br />
    of equipment loans from CTS.
</div>

<div id="columnLeft">

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

    <div id="add">
  <form action="/action_page.php">
    <label for="item">Item</label>
    <select id="item" name="item">
      <option value="dvdPlayer">DVD Player</option>
      <option value="adapter">Adapter</option>
      <option value="ladybug">Ladybug</option>
    </select>

    <label for="pfname">Professor's First Name</label>
    <input type="text" id="pfname" name="pfirstname" placeholder="Professor name">

    <label for="plname">Professor's Last Name</label>
    <input type="text" id="plname" name="plastname" placeholder="Professor last name">

    <label for="department">Department</label>
    <input type="text" id="dep" name="depName" placeholder="Department">

    <label for="givenBy">Administered By</label>
    <select id="givenBy" name="givenBy">
      <option value="eDorsey">Evan Dorsey</option>
      <option value="lDeane">Lucas Deane</option>
    </select>

    <label for="start">Loan Date</label>
    <input type="datetime-local" id="loaned" name="dateLoaned"
       >
  
    <input type="submit" value="Submit">
  </form>
</div>
</nav>



</div>

<div id="columnRight">
<div id="loginID">
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