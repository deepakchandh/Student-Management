 
 










<?php
session_start();


   if( isset( $_SESSION['user_name'] ) ) {
     
   
   
   }else {
      $_SESSION['user_name'] = '';
   }


?>

<head>
    <php
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Entry Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
</head>
    <body>
 	 <form action="info1.php" method="post">
       <h1>DATA ENTRY</h1>
        <fieldset>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" input value='<?php echo $_SESSION['user_name']; ?>' required/>
          <label for="rollnumber">Roll number</label>
          <input type="text" id="rollnum" name="roll_number" required/>
           <label for="batch">Batch</label>
            <select id="batch" name="user_batch" required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="2013-2017">2013-2017</option>
            <option value="2014-2018">2014-2018</option>
            <option value="2015-2019">2015-2019</option>
            <option value="2016-2020">2016-2020</option>
               </select>
        </fieldset>
        
		 <label for="from">Came from</label>
        <select id="from" name="user_from" required/>
        
              <option value="NoneSelected">---Click to Select---</option>
			<option value="+2">+2</option>
            <option value="Diploma">Diploma</option>
                           </select>
	   
	   <label for="year">Year</label>
        <select id="year" name="user_year" required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
               </select>
          <label for="level">Level</label>
        <select id="level" name="user_level"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="UG">UG</option>
            <option value="PG">PG</option>
           
               </select>
			   <label for="email">Email:</label>
          <input type="text" id="email_id" name="email_id" required/>
			   <label for="name">Father`s Name:</label>
          <input type="text" id="fname" name="F_name" required/>
		   <label for="name">Mother`s Name:</label>
          <input type="text" id="mname" name="m_name" required/>
		  <label for="name">Guardian`s Name:</label>
          <input type="text" id="gname" name="g_name" >
		   <label for="mob_number">Students Mobile Number</label>
          <input type="number" id="mob_number" name="mob_number"required/>
		  
		 </select>
			   <label for="addressline1">Address Line 1</label>
          <input type="text" id="addressline1" name="addressline1" required/>
		   
		   </select>
			   <label for="addressline2">Address Line2</label>
          <input type="text" id="addressline2" name="addressline2" required/>
		  
		    </select>
			   <label for="city">City</label>
          <input type="text" id="city" name="city" required/>
		  
		   
		    <label for="pmobnumber">Parents Mobile Number</label>
          <input type="number" id="pmob_num" name="pmob_number" required/>
           <label for="landnumber">LandLine Number or Parents Number</label>
          <input type="number" id="landnum" name="land_number"required/>
		  
		  
		  <label for="cutoff">+2 cutoff</label>
          <input type="number" id="cutoff" name="cutoff">
		  
		  
		   <label for="dept">Department</label>
        <select id="dept" name="dept" required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="CSE">CSE</option>
            <option value="IT">IT</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
			<option value="MECH">MECH</option>
            <option value="CIVIL">CIVIL</option>
               </select>
		  
		  <label for="medium">Medium of Instruction</label>
        <select id="medium" name="medium"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="ENGLISH">English</option>
            <option value="TAMIL">Tamil</option>
           
               </select>
		  
			<label for="locality">Locality</label>
        <select id="locality" name="locality"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="RURAL">Rural</option>
            <option value="URBAN">Urban</option>
           
               </select>
			
			
			<label for="intrest">Intrested In</label>
        <select id="intrest" name="intrest"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="PLACEMENTS">Placements</option>
            <option value="HIGHER STUDIES">Higher Studies</option>
			 <option value="Entrepreneurship">Entrepreneurship</option>
           
               </select>
			   
			   
			   <label for="scholar">Scholarship</label>
        <select id="scholar" name="scholar"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="GOVERNMENT">Government</option>
            <option value="PRIVATE">Private</option>
			            
               </select>
			   
			   
			   <label for="income">Parents Annual Income</label>
        <select id="income" name="income" required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="Less than 50,000">Less than 50,000</option>
            <option value="Less than 1,00,000">Less than 1,00,000</option>
            <option value="Less than 2,00,000">Less than 2,00,000</option>
            <option value="Less than 5,00,000">Less than 5,00,000</option>
			<option value="Less than 10,00,000">Less than 10,00,000</option>
            <option value="OTHERS">others</option>
               </select>
			
		  
		  <label for="year">Caste</label>
        <select id="caste" name="user_caste" required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="OC">OC</option>
            <option value="BC">BC</option>
            <option value="MBC">MBC</option>
            <option value="BCM">BCM</option>
			<option value="SC">SC</option>
			<option value="ST">ST</option>
               </select>
			   <label for="admit">Admitted through</label>
        <select id="admit" name="user_admit"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="Government Quota">Government Quota</option>
            <option value="Manegement Quota">Manegement Quota</option>
			 			    </select>
			 <label for="stay">Staying In</label>

        <select id="stay" name="user_stay"required/>
        
            <option value="NoneSelected">---Click to Select---</option>
			<option value="With parents">With parents</option>
            <option value="College Hostel">College Hostel</option>
			<option value="Outside Room">Outside Room</option>
           
               </select>
		 
        </fieldset>
        
		<button type="submit" onclick="phonenumber(pmob_number)">ENTER DATA</button>
      </form>


      <script src="js/mob_valid.js"></script>

    </body>
</html>

















 
 
 
 
 
 