<?php
session_start();



 
 
 
 
 
  
 $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
           $sql = mysqli_select_db ($conn,'vcet') or die("unable to connect to database"); 
 
 
 
 
 //code to insert into db...
 $user_name=$_POST['user_name']; 
 $roll_number=$_POST['roll_number'];
 $user_batch=$_POST['user_batch'];
 $user_from=$_POST['user_from'];
 $user_year=$_POST['user_year'];
 $user_level=$_POST['user_level'];
 $email_id=$_POST['email_id'];
 $F_name=$_POST['F_name'];
 $m_name=$_POST['m_name'];
 $g_name=$_POST['g_name'];
 $mob_number=$_POST['mob_number'];
 $addressline1=$_POST['addressline1'];
 $addressline2=$_POST['addressline2'];
 $city=$_POST['city'];
 $pmob_number=$_POST['pmob_number'];
 $land_number=$_POST['land_number'];
 $cutoff=$_POST['cutoff'];
 $dept=$_POST['dept'];
 $medium = $_POST['medium'];
 $locality=$_POST['locality'];
 $intrest=$_POST['intrest'];
 $scholar=$_POST['scholar'];
 $income=$_POST['income'];
 $user_caste=$_POST['user_caste'];
 $user_admit=$_POST['user_admit'];
 $user_stay=$_POST['user_stay'];
 
 
$_SESSION['user_name'] = $_POST['user_name'];
$_SESSION['roll_number'] = $_POST['roll_number'];
$_SESSION['user_batch'] = $_POST['user_batch'];
$_SESSION['user_from'] = $_POST['user_from'];
$_SESSION['user_year'] = $_POST['user_year'];
$_SESSION['user_level'] = $_POST['user_level']; 
$_SESSION['email_id'] = $_POST['email_id'];
$_SESSION['F_name'] = $_POST['F_name'];
$_SESSION['m_name'] = $_POST['m_name'];
$_SESSION['g_name'] = $_POST['g_name'];
$_SESSION['mob_number'] = $_POST['mob_number'];
$_SESSION['addressline1'] = $_POST['addressline2'];





if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
   echo '<script language="javascript">';
echo 'alert("Sorry...You entered an invalid email id..!!!")';
echo '</script>';
//mysqli_query("delete from studentinfo where roll_number='$roll_number'");
header( "refresh:1;url=http://localhost/DB/home.php" );
}else
{
	//executes the rest of the code



	

    $mob_number1=$mob_number;
	if(!preg_match('/^\d{10}$/',$mob_number1)) // phone number is valid
    {
      
	  echo '<script language="javascript">';
echo 'alert("Sorry...You entered a wrong Mobile number..!!!")';
echo '</script>';
//mysqli_query("delete from studentinfo where roll_number='$roll_number'");
header( "refresh:1;url=http://localhost/DB/home.php" );
	  
    }
    else // phone number is  valid
    {
      
    

	
	
	
	
	
	
	


 

	
	
	
	
	
	


		$msg="";
	
		
		$num_length = strlen((string)$pmob_number);

		if($num_length!=10){
			








		
			
           echo '<script language="javascript">';
echo 'alert("Sorry...You entered a wrong Mobile number..!!!")';
echo '</script>';
//mysqli_query("delete from studentinfo where roll_number='$roll_number'");
header( "refresh:1;url=http://localhost/DB/home.php" );
			
		}else
        
            
        
{
 
 
 
 
 
 $user_info = "INSERT INTO studentinfo"."(user_name,roll_number,user_batch,user_from,user_year,user_level,email_id,F_name,m_name,g_name,mob_number,addressline1,addressline2,city,pmob_number,land_number,cutoff,dept,medium,locality,intrest,scholar,income,user_caste,user_admit, user_stay)". "VALUES ('$user_name', '$roll_number','$user_batch','$user_from','$user_year','$user_level','$email_id','$F_name','$m_name','$g_name','".$mob_number."','$addressline1','$addressline2','$city','$pmob_number','$land_number','$cutoff','$dept','$medium','$locality','$intrest','$scholar','$income','$user_caste','$user_admit','$user_stay')"; 
 if (!mysqli_query($conn,$user_info)) { die('Error: ' . mysqli_error($conn)); } echo '<script language="javascript">';
			echo 'alert("Awesome!! your INFORMATION  was added to the DATABASE")';
			echo '</script>';
			header( "refresh:1;url=http://localhost/DB/home.php" ); 
 mysqli_close($conn); 
}

}
 
}
 ?> 
 



