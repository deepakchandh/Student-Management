 <?php



 $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
           $sql = mysqli_select_db ($conn,'vcet') or die("unable to connect to database"); 

    
$roll_numbervalid = $_POST['roll_numberval'];
$query = "delete from studentinfo where roll_number = '$roll_numbervalid'";
if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}