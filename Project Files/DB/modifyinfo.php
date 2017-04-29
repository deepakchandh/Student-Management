<?php 
 $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
           $sql = mysqli_select_db ($conn,'vcet') or die("unable to connect to database"); 
 
		
     
 
 





 
 //code to insert into db...
 $user_name01=$_POST['user_name01']; 
 $roll_number01=$_POST['roll_number01'];
 $user_batch01=$_POST['user_batch01'];
 $user_from01=$_POST['user_from01'];
 $user_year01=$_POST['user_year01'];
 $user_level01=$_POST['user_level01'];
 $email_id01=$_POST['email_id01'];
 $F_name01=$_POST['F_name01'];
 $m_name01=$_POST['m_name01'];
 $g_name01=$_POST['g_name01'];
 $mob_number01=$_POST['mob_number01'];
 $addressline101=$_POST['addressline101'];
 $addressline201=$_POST['addressline201'];
 $city01=$_POST['city01'];
 $pmob_number01=$_POST['pmob_number01'];
 
	
			
		
	
	
 
 $land_number01=$_POST['land_number01'];
 $cutoff01=$_POST['cutoff01'];
 $dept01=$_POST['dept01'];
 $medium01= $_POST['medium01'];
 $locality01=$_POST['locality01'];
 $intrest01=$_POST['intrest01'];
 $scholar01=$_POST['scholar01'];
 $income01=$_POST['income01'];
 $user_caste01=$_POST['user_caste01'];
 $user_admit01=$_POST['user_admit01'];
 $user_stay01=$_POST['user_stay01'];
 
 

if (!filter_var($email_id01, FILTER_VALIDATE_EMAIL)) {
    
    echo '<script language="javascript">';
    echo 'alert("Sorry...You entered an invalid email id!!!")';
    echo '</script>';
    header( "refresh:1;url=http://localhost/DB/modifydisp.php" );

}else
{
	//executes the rest of the code



	

    $mob_number101=$mob_number01;
	if(!preg_match('/^\d{10}$/',$mob_number101)) // phone number is valid
    {
      
	    echo '<script language="javascript">';
        echo 'alert("Sorry...You entered a wrong Mobile number..!!!")';
        echo '</script>';
        header( "refresh:1;url=http://localhost/DB/modifydisp.php" );
	  
    }
    else // phone number is  valid
    {
      $msg="";
	
		
		$num_length01 = strlen((string)$pmob_number01);

		if($num_length01!=10){
			 echo '<script language="javascript">';
echo 'alert("Sorry...You entered a wrong Mobile number..!!!")';
echo '</script>';
header( "refresh:1;url=http://localhost/DB/modifydisp.php" );
	  
		}else
{
 
 
 
 
 
 $user_info = "UPDATE studentinfo SET user_name='$user_name01',roll_number='$roll_number01',user_batch='$user_batch01',user_from='$user_from01',user_year='$user_year01',user_level='$user_level01',email_id='$email_id01',F_name='$F_name01',m_name='$m_name01',g_name='$g_name01',mob_number='$mob_number01',addressline1='$addressline101',addressline2='$addressline201',city='$city01',pmob_number='$pmob_number01',land_number='$land_number01',cutoff='$cutoff01',dept='$dept01',medium='$medium01',locality='$locality01',intrest='$intrest01',scholar='$scholar01',income='$income01',user_caste='$user_caste01',user_admit='$user_admit01', user_stay='$user_stay01' WHERE roll_number = '$roll_number01'"; 
 if (!mysqli_query($conn,$user_info)) { die('Error: ' . mysqli_error($conn)); } echo "Your information  added to the database.";header( "refresh:1;url=http://localhost/DB/modifyget.php" );
 mysqli_close($conn); 
}

}
 
}
 ?> 
 



