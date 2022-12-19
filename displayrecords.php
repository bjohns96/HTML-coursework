<html>
<body>


Results of Student Database<br><br>

<?php
   // Display Data in the database
   
   // connect to the server
   $dbcnx = @mysql_connect("localhost", "quickme1_4211",
   "csci4211");


if (!$dbcnx) { 
    echo( "<p>Unable to connect to the " . 
          "database server at this time.</p>" 
   ); 
    exit(); 
  }

 
// Select the personal database 
  if (! @mysql_select_db("quickme1_4211") ) { 
    echo( "<p>Unable to locate the patient " . 
          "database at this time.</p>" ); 
    exit(); 
  } 
  
  
   // retrieve all the rows from the database
   $query = "SELECT * FROM `student` ORDER BY `lastname`";
   
   $results = mysql_query( $query );

   // print out the results
   if( $results )
   {
      while( $student = mysql_fetch_object( $results ) )
      {
         // print out the info
         $studentid = $student -> studentid;
  echo"StudentID: $studentid";
         $lastname = $student -> lastname;
  echo"LastName: $lastname";
         $firstname = $student -> firstname;
echo"First Name:$firstname";
       
         
         echo( "$studentid, $lastname, $firstname, $address<br>" );
      }
   }
   else
   {
      echo( "Trouble getting contacts from database: ");
   }
   
?>

</body>
</html>
