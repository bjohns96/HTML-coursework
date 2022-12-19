<html>
<body>


Results of Locations Database<br><br>

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
   $query = "SELECT * FROM `Locations` ORDER BY `Location_Name`";
   
   $results = mysql_query( $query );

   // print out the results
   if( $results )
   {
      while( $Locations = mysql_fetch_object( $results ) )
      {
         // print out the info
         $LocationID = $Locations -> $LocationID;
         $Location_Name = $Locations -> Location_Name;
         $Description = $Locations -> Description;
         
         
         echo( "$Locations_no<br>, $Locations_name<br>, $Description<br>" );
      }
   }
   else
   {
      echo( "Trouble getting contacts from database: ");
   }
   
?>

</body>
</html>
