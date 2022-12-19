<html>
<body>


Results of course Database<br><br>

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
    echo( "<p>Unable to locate registration database " . 
          "database at this time.</p>" ); 
    exit(); 
  } 
  
  
   // retrieve all the rows from the database
   $query = "SELECT * FROM `course` ORDER BY `lastname`";
   
   $results = mysql_query( $query );

   // print out the results
   if( $results )
   {
      while( $course = mysql_fetch_object( $results ) )
      {
         // print out the info
         $course_no = $course -> course_no;
         $course_name = $course -> course_name;
         $course_description = $course -> course_description;
         
         
         echo( "$course_no<br>, $course_name<br>, $course_description<br>" );
      }
   }
   else
   {
      echo( "Trouble getting contacts from database: ");
   }
   
?>

</body>
</html>
