	
    
 <?php



 $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
           $sql = mysqli_select_db ($conn,'vcet') or die("unable to connect to database"); 

    
$roll_numbervalid = $_POST['roll_numberval'];
$query = "select * from studentinfo where roll_number = '$roll_numbervalid'";
    $output = "";
    $result = mysqli_query($conn,$query);

           
	   while ($row = mysqli_fetch_assoc($result)) {
    ?>


<html lang="en">
<head>
	  <link rel="stylesheet" href="DISPCSS.CSS">
    <link rel="stylesheet" href="css/UPDATEBUTTON.CSS">
     
      
    <meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
   

    
<div class="table-title">
 <form action="modifyinfo.php" method="post">
<h3>STUDENT DETAILS</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Student Name</th>
<td class="text-left"> <input name="user_name01" type="text" id="user_name01" value="<?php echo $row['user_name']; ?>"></td>
    
<th class="text-left">Student RollNumber</th>
<td class="text-left"> <input name="roll_number01" type="text" id="roll_number01" value="<?php echo $row['roll_number']; ?>"></td>


<th class="text-left">Batch</th>
<td class="text-left" ><input name="user_batch01" type="text" id="user_batch01" value="<?php echo $row['user_batch']; ?>"></td>

<th class="text-left">From</th>
<td class="text-left"> <input name="user_from01" type="text" id="user_from01" value="<?php echo $row['user_from']; ?>"></td>


<th class="text-left">Year</th>
<td class="text-left"> <input name="user_year01" type="text" id="user_year01" value="<?php echo $row['user_year']; ?>"></td>
</tr>
<tr>
<th class="text-left">Section</th>
<td class="text-left"> <input name="user_section01" type="text" id="user_section01" value="<?php echo $row['user_section']; ?>"></td>

<th class="text-left">Level</th>
<td class="text-left"> <input name="user_level01" type="text" id="user_level01" value="<?php echo $row['user_level']; ?>"></td>

<th class="text-left">Email id</th>
<td class="text-left"> <input name="email_id01" type="text" id="email_id01" value="<?php echo $row['email_id']; ?>"></td>

<th class="text-left">Father`s name</th>
<td class="text-left"> <input name="F_name01" type="text" id="F_name01" value="<?php echo $row['F_name']; ?>"></td>
</tr>
<tr>
<th class="text-left">Mother`s name</th>
<td class="text-left"> <input name="m_name01" type="text" id="m_name01" value="<?php echo $row['m_name']; ?>"></td>

<th class="text-left">Guardian`s name</th>
<td class="text-left"> <input name="g_name01" type="text" id="g_name01" value="<?php echo $row['g_name']; ?>"></td>

<th class="text-left">Mobile Number</th>
<td class="text-left"> <input name="mob_number01" type="text" id="mob_number01" value="<?php echo $row['mob_number']; ?>"></td>

<th class="text-left">Address</th>
<td class="text-left"> <input name="addressline101" type="text" id="addressline101" value="<?php echo $row['addressline1']; ?>"></td> 
</tr>
<tr>
<th class="text-left">Address</th>
<td class="text-left"> <input name="addressline201" type="text" id="addressline201" value="<?php echo $row['addressline2']; ?>"></td>

<th class="text-left">City</th>
<td class="text-left"> <input name="city01" type="text" id="city01" value="<?php echo $row['city']; ?>"></td>

<th class="text-left">Parent`s moblie</th>
<td class="text-left"> <input name="pmob_number01" type="text" id="pmob_number01" value="<?php echo $row['pmob_number']; ?>"></td>

<th class="text-left">Landline Number</th>
<td class="text-left"> <input name="land_number01" type="text" id="land_number01" value="<?php echo $row['land_number']; ?>"></td>
</tr>
<tr>
<th class="text-left">Cutoff</th>
<td class="text-left"> <input name="cutoff01" type="text" id="cutoff01" value="<?php echo $row['cutoff']; ?>"></td>

<th class="text-left">Department</th>
<td class="text-left"> <input name="dept01" type="text" id="dept01" value="<?php echo $row['dept']; ?>"></td>

<th class="text-left">Medium</th>
<td class="text-left"> <input name="medium01" type="text" id="medium01" value="<?php echo $row['medium']; ?>"></td>

<th class="text-left">Locality</th>
<td class="text-left"> <input name="locality01" type="text" id="locality01" value="<?php echo $row['locality']; ?>"></td>
</tr>
<tr>
<th class="text-left">Intrest</th>
<td class="text-left"> <input name="intrest01" type="text" id="intrest01" value="<?php echo $row['intrest']; ?>"></td>

<th class="text-left">Scholar</th>
<td class="text-left"> <input name="scholar01" type="text" id="scholar01" value="<?php echo $row['scholar']; ?>"></td>

<th class="text-left">Income</th>
<td class="text-left"> <input name="income01" type="text" id="income01" value="<?php echo $row['income']; ?>"></td>

<th class="text-left">Caste</th>
<td class="text-left"> <input name="user_caste01" type="text" id="user_caste01" value="<?php echo $row['user_caste']; ?>"></td>
</tr>
<tr>
<th class="text-left">Admission</th>
<td class="text-left"> <input name="user_admit01" type="text" id="user_admit01" value="<?php echo $row['user_admit']; ?>"></td>

<th class="text-left">Staying</th>
<td class="text-left"> <input name="user_stay01" type="text" id="user_stay01" value="<?php echo $row['user_stay']; ?>"></td>
</tr>
<br><br>



</thead>

   
   
 <tbody class="table-hover">
	
	
	
	











                                   

















<?php
        break;
		}
?>
 </tbody>
</table>
<button type="submit" >SUBMIT UPDATED DATA</button> 
     </body>
</html>
      