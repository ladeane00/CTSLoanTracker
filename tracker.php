<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="tracker.css">
    <script type='text/javascript'>
        function onClick(){
            window.location.href = 'detail.php';
        }
    </script>
    <script src= 
        "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
</head>
<body>

<div id="header">
<img class = "center" src="images/Villanova.png" alt="Villanova">
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
        <li><a href="info.html">Info</a></li>
    </ul>
</nav>
<button onclick="window.location.href='add.php'" id = "add" href= "add.php" type="submit">Add</button>
<button id = "delete" type="submit">Delete</button>
<input class="search" id = "se" type="text" placeholder="Search" name="search" required>

<div style="overflow:scroll">
<table class="content-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Item</th>
      <th>Professor</th>
      <th>Date out</th>
    </tr>
  </thead>
  <tbody id = "tickets">
    <tr onclick="onClick(this);">
        <td>1</td>
        <td>DVD</td>
        <td>Albert Einstein</td>
        <td>need to put date</td>
    </tr>
    <tr onclick="onClick(this);">
        <td>2</td>
        <td>DVD</td>
        <td>Donald Trump</td>
        <td>need to put date</td>
    </tr>
    <tr onclick="onClick(this);">
        <td>3</td>
        <td>Adapter</td>
        <td>Christopher Columbus</td>
        <td>need to put date</td>
    </tr>

  </tbody>
</table>

<script> 
            $(document).ready(function() { 
                $("#se").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#tickets tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
</script> 
</div>



</div>

<div id="columnRight">
<div id=loginID>
<h3 id="loginTitle">Logged in as:</h3>
<?php include 'authen_login.php';
    echo "<p id = 'loginP'>ladeane00</p>";
    echo "<p id = 'loginP'>Admin</p>";
?>
</div>
</div>

<div id="footer">
  <p>Made by Lucas Deane</p>
</div>



</body>
</html>