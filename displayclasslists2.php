<html>
<body>


Results of faculty_courses Database<br><br>

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
   $query = "SELECT * FROM `faculty_courses` ORDER BY `facultyID`";
   
   $results = mysql_query( $query );

   // print out the results
   if( $results )
   {
      while( $faculty_courses = mysql_fetch_object( $results ) )
      {
         // print out the info
         $facultyID = $faculty_courses -> facultyID;
         $CourseID = $faculty_courses -> CourseID;
         $Room_No = $faculty_courses -> Room_No;
         $Office_hours = $faculty_courses -> Office_hours;
         echo( "$facultyID<br>, $CourseID<br>, $Room_No<br>, $Office_hours<br><br><br>" );
      }
   }
   else
   {
      echo( "Trouble getting contacts from database: ");
   }
   
?>

</body>
</html>
