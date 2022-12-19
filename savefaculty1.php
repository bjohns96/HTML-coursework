<html>

<body>

 

 

<?php

   // saving script

   

     $dbcnx = @mysql_connect("localhost", "quickme1_4211",
   "csci4211");
 

if (!$dbcnx) { 

    echo( "<p>Unable to connect to the " . 

          "database server at this time.</p>" 

   ); 

    exit(); 

   } 

 

   

 

// Select the Registration database 

  if (! @mysql_select_db("quickme1_4211") ) {

    echo( "<p>Unable to locate the registration " . 

          "database at this time.</p>" ); 

    exit(); 

  } 

   

   // get the variables from the URL request string

   $facultyID = $_REQUEST['facultyID'];

   $firstname = $_REQUEST['firstname'];

   $lastname = $_REQUEST['lastname'];

   $email = $_REQUEST['email'];
   
   $phone = $_REQUEST['phone'];
    
   $Office_no = $_REQUEST['Office_no'];

   $speciality = $_REQUEST['speciality'];

    

    

   echo("$facultyID<br>");

   echo("$lastname<br>");

   

      $query = "INSERT INTO `faculty` ( `facultyID`,`firstname`, `lastname`, `email`, `phone`, `Office_no`, `speciality` )

         VALUES ('$facultyID','$firstname', '$lastname','$email', '$phone', '$Office_no', '$speciality')";

 

 

   // save the info to the database

   $results = mysql_query( $query );

 

   // print out the results

   if( $results )

   {

      echo( "Successfully saved the entry." );

   }

   else

   {

      echo( "Trouble saving information to the database: ");

   }

   

?>

 

</body>

</html>
