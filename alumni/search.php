<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $regd  = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "gugudigu2","alumini");
    
    // mysql search query
    $query ="SELECT `full_name`, `branch`, `registration_number`, `mail_id`, `mobile_number`, `gender`, `current_address`, `permanent_address`, `blood_group`, `job_description` FROM `register` WHERE `registration_number`=$regd  LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
		echo
		"FULL NAME :{$row['full_name']}  <br> ".
		"BRANCH	 : {$row['branch']} <br> ".
        "REGD NO. 		 : {$row['registration_number']} <br> ".
         "MAIL ID		 : {$row['mail_id']} <br> ".
         "MOBILE	 : {$row['mobile_number']} <br> ".
         "GENDER : {$row['gender']} <br> ".
         "CURRENT ADDRESS	 : {$row['current_address']} <br> ".
         "PERMANENT ADDRESS	 : {$row['permanent_address']} <br> ".
		 "BLOOD GROUP	 : {$row['blood_group']} <br> ".
         "JOB DESCRIPTION : {$row['job_description']} <br> ".
         "--------------------------------<br>";
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined REGD NO.";
        
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}



?>
<!DOCTYPE html>

<html>

    <head>

        <title> Search </title>

        <meta charset="UTF-8"> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body><br><br><br>

    <form style="  font-family:ariel; text-align:center;" action="search.php" method="post">

        REGD NO.:<input type="text" name="id"><br><br>
        

        <input type="submit" name="search" value="Find">

           </form><br><br><br>
		   <div style="  font-family:ariel; text-align:center;">
			<a  href="logout.php"> Logout</a></div>
    </body>

</html>
