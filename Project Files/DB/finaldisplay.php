	
    
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

if ($result && mysqli_num_rows($result) > 0)

    {
         
    

           
	   while ($row = mysqli_fetch_assoc($result)) {
    ?>


<html lang="en">
<head>
	  <link rel="stylesheet" href="DISPCSS.CSS">
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
   

    
<div class="table-title">
<h3>STUDENT DETAILS</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Student Name</th>
<td class="text-left"><?php echo $row['user_name']?></td>

<th class="text-left">Roll Number</th>
<td class="text-left"><?php echo $row['roll_number']?></td>


<th class="text-left">Batch</th>
<td class="text-left"><?php echo $row['user_batch']?></td>

<th class="text-left">From</th>
<td class="text-left"><?php echo $row['user_from']?></td>


<th class="text-left">Year</th>
<td class="text-left"><?php echo $row['user_year']?></td>
</tr>
<tr>
<th class="text-left">Section</th>
<td class="text-left"><?php echo $row['user_section']?></td>

<th class="text-left">Level</th>
<td class="text-left"><?php echo $row['user_level']?></td>

<th class="text-left">Email id</th>
<td class="text-left"><?php echo $row['email_id']?></td>

<th class="text-left">Father`s name</th>
<td class="text-left"><?php echo $row['F_name']?></td>
</tr>
<tr>
<th class="text-left">Mother`s name</th>
<td class="text-left"><?php echo $row['m_name']?></td>

<th class="text-left">Guardian`s name</th>
<td class="text-left"><?php echo $row['g_name']?></td>

<th class="text-left">Mobile Number</th>
<td class="text-left"><?php echo $row['mob_number']?></td>

<th class="text-left">Address</th>
<td class="text-left"><?php echo $row['addressline1']?></td> 
</tr>
<tr>
<th class="text-left">Address</th>
<td class="text-left"><?php echo $row['addressline2']?></td>

<th class="text-left">City</th>
<td class="text-left"><?php echo $row['city']?></td>

<th class="text-left">Parent`s moblie</th>
<td class="text-left"><?php echo $row['pmob_number']?></td>

<th class="text-left">Landline Number</th>
<td class="text-left"><?php echo $row['land_number']?></td>
</tr>
<tr>
<th class="text-left">Cutoff</th>
<td class="text-left"><?php echo $row['cutoff']?></td>

<th class="text-left">Department</th>
<td class="text-left"><?php echo $row['dept']?></td>

<th class="text-left">Medium</th>
<td class="text-left"><?php echo $row['medium']?></td>

<th class="text-left">Locality</th>
<td class="text-left"><?php echo $row['locality']?></td>
</tr>
<tr>
<th class="text-left">Intrest</th>
<td class="text-left"><?php echo $row['intrest']?></td>

<th class="text-left">Scholar</th>
<td class="text-left"><?php echo $row['scholar']?></td>

<th class="text-left">Income</th>
<td class="text-left"><?php echo $row['income']?></td>

<th class="text-left">Caste</th>
<td class="text-left"><?php echo $row['user_caste']?></td>
</tr>
<tr>
<th class="text-left">Admission</th>
<td class="text-left"><?php echo $row['user_admit']?></td>

<th class="text-left">Staying</th>
<td class="text-left"><?php echo $row['user_stay']?></td>
</tr>


</thead>

   
   
 <tbody class="table-hover">
	
	
	
	











                                   


















<?php
        break;
		}
    
    }
     else {
    echo 'Sorry But The Respective Student information was not found in the Database ';
    header("Refresh:5; url=mentorget.php");
     }
    
?>
 </tbody>
</table>
 
     </body>
</html>
      