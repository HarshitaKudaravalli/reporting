<?php include 'conn.php'; ?>

<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
#s2 {
  color:white;
  background-color: #1f3d7a;
height:50px;
width:120px;
margin-top:3%;
margin-left:75%;
font-size:20px;
}
.ta1{
padding:15px;
border-collapse:collapse;
color:black;
text-align:center;
height:50px;
}
.ta3{
width:100%;
padding:15px;
border:1px solid pink;
border-collapse:collapse;
text-align:center;
height:50px;
font-weight:bold;
}


header {
   padding: 0.5em;
    color: white;
    background-color: #1f3d7a;
    clear: left;
    text-align: center;
}
header h1{
padding: 1em;
}

body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding:70px 0px 0px 0px;
    width: 18%;
    background-color: #1f3d7a;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>
<header>
<img src="paceofficiallogo.jpg" height="150" width="18%" style="float:left;margin-left:0px;padding:0px;">
   <h1>Assignment</h1>
</header>
 <ul>
    <li><a href="home.html">HOME</a></li>
    <li><a href="announcement.html">ANNOUNCEMENT</a></li>
    <li><a href="syllabus.html">SYLLABUS</a></li>
    <li><a href="course.html">COURSE SCHEDULE</a></li>
    <li><a href="quizes.html">QUIZES</a></li>
    <li><a href="discussion.html">DISCUSSION BOARD</a></li>
  </ul>

<div style="margin-left:20%;padding:1px 16px;">
	<a href="line1.html"><button id="search">View graph</button></a>
	<a href="assignments.html"><button id="s2">back</button></a>

<table table align='left' border='1'>

<tr> <td>Assignment Title </td> <td> 2nd skills survey </td></tr>
<tr> <td>Assignment Abv </td> <td> SS2 </td></tr>
<tr> <td>Submission Type </td> <td> Webform </td></tr>
<tr> <td>Total points </td>  <td>10 </td></tr>
<tr> <td>Available start </td>  <td>04/20/2017 23:59 </td></tr>
<tr> <td>Available end </td>  <td>05/02/2017 23:59 </td></tr>
<tr> <td>Due date </td> <td>04/30/2017 23:59 </td></tr>

</table>
	<?php

  $result= mysqli_query($conn,"select AssignmentID,UserID,Score from Assignments where AssignmentID='779071' order by Score ASC");
  if ($result->num_rows > 0) {
       // output data of each row
  echo"<table border='1' align='center' padding='100px'>";
  echo"<tr><td class='ta1'> Assignment ID </td> <td class='ta1'> User ID </td> <td class='ta1'> Score </td></tr>";
       while($row = $result->fetch_assoc()) {

           echo  "<tr><td class='ta1'> ". $row["AssignmentID"]. " </td><td class='ta1'> ". $row["UserID"]. "</td><td class='ta1'> " . $row["Score"] . "</td></tr>";

       }
  		 echo"</table>";
  	 }
  	 else {
  	echo "<table align='center' border='1'><tr><td> Error</td></tr></table>";

  	echo mysqli_error ($conn);
  }
  ?>
		</div>
	</body>
	</html>