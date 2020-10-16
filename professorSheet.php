<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="add.css">
</head>
<body style="background-color:#003e7e">

<div id="container">
<div id="add">
  <form action="/action_page.php" id="professorForm">
    <div>
    <img id="formImg" src="images/Villanova.png" alt="Villanova">
    <h2>Request Form </h2>
    </div>
    <label for="item">Item</label>
    <select id="item" name="item">
      <option value="dvdPlayer">DVD Player</option>
      <option value="adapter">Adapter</option>
      <option value="ladybug">Ladybug</option>
    </select>

    <label for="pfname">First Name</label>
    <input type="text" id="pfname" name="pfirstname" placeholder="Enter First name">

    <label for="plname">Last Name</label>
    <input type="text" id="plname" name="plastname" placeholder="Enter Last name">

    <label for="department">Department</label>
    <input type="text" id="dep" name="depName" placeholder="Department">

    <label for="building">Building</label>
    <input type="text" id="building" name="buildingName" placeholder="Enter Building">

    <label for="roomNum">Room Number</label>
    <input type="text" id="room" name="roomNumName" placeholder="Enter Room Number">

    <label for="banID">Banner ID</label>
    <input type="text" id="bannerID" name="bannerIDName" placeholder="Enter Banner ID">

    <label for="email">Email</label>
    <input type="text" id="email" name="emailName" placeholder="Enter University Email">

    <p>Purpose</p>
    <textarea name="purpose" form="professorForm" placeholder="Enter Purpose For Request"></textarea>

    <label for="dateLoaned">Date Needed For</label>
    <input type="datetime-local" id="loanDate" name="dateLoaned">

    <label for="dateOfReturn">Date Of Return By</label>
    <input type="datetime-local" id="returnDate" name="dateOfReturn">
  
    <input type="submit" value="Submit">
  </form>

</div>
</div>

</body>
</html>