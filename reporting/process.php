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
   <h1>ATTENDANCE</h1>
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
<a href="bargraph.html"><button id="search">View graph</button></a>
<a href="home.html"><button id="s2">back</button></a>



	<?php

$result= mysqli_query($conn,"select * from attendance order by missedclasses DESC");

if ($result->num_rows > 0) {
     // output data of each row
echo"<table align='center' padding='100px'>";
echo"<tr><td class='ta1'> Student ID </td> <td class='ta1'> Missed Classes </td>";
echo" <td class='ta1'> Marks </td><td class='ta1'> week1 </td><td class='ta1'> week2 </td><td class='ta1'> week3 </td>";
echo"<td class='ta1'> week4 </td><td class='ta1'> week5 </td><td class='ta1'> week6 </td><td class='ta1'> week7 </td> ";
echo"<td class='ta1'> week8 </td><td class='ta1'> week9 </td><td class='ta1'> week10 </td><td class='ta1'> week11 </td> ";
echo"<td class='ta1'> week12 </td><td class='ta1'> week13 </td><td class='ta1'> week14 </td></tr> ";
     while($row = $result->fetch_assoc()) {

         echo  "<tr><td class='ta1'> ". $row["Stud_ID"]. " </td><td class='ta1'> ". $row["missedclasses"]. "</td><td class='ta1'> " . $row["marks"] . "</td>";
				 if($row["week1"]=='a')
				 echo"<td class='ta1'>X</td>";
				 else
				 	echo"<td></td>";
				if($row["week2"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
				if($row["week3"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
                                if($row["week4"]=='a')
				 echo"<td class='ta1'>X</td>";
				 else
				 	echo"<td></td>";
				if($row["week5"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
				if($row["week6"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
                               if($row["week7"]=='a')
				 echo"<td class='ta1'>X</td>";
				 else
				 	echo"<td></td>";
				if($row["week8"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
				if($row["week9"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
                                if($row["week10"]=='a')
				 echo"<td class='ta1'>X</td>";
				 else
				 	echo"<td></td>";
				if($row["week11"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
				if($row["week12"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
                                 if($row["week13"]=='a')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";

				if($row["week14"]=='a')
				echo"<td class='ta1'>X</td></tr>";
				else
				 echo"<td></td></tr>";
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