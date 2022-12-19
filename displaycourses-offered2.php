<html>
<body>


Results of courses offered Database<br><br>

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
   $query = "SELECT * FROM `courses_offered` ORDER BY `courseID`";
   
   $results = mysql_query( $query );

   // print out the results
   if( $results )
   {
      while( $courses_offered = mysql_fetch_object( $results ) )
      {
         // print out the info
         $courseID = $courses_offered -> courseID;
         $course_description = $courses_offered -> course_description;
         $Credit_hours = $courses_offered -> Credit_hours;
         $Semester = $courses_offered -> Semester;
         echo( "$courseID<br>, $course_description<br>, $Credit_hours<br>, $Semester<br>" );
      }
   }
   else
   {
      echo( "Trouble getting contacts from database: ");
   }
   
?>

</body>
</html>
