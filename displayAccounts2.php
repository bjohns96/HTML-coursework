<html>
<body>


Results of Accounts Database<br><br>

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
   $query = "SELECT * FROM `Accounts` ORDER BY `StudentID`";
   
   $results = mysql_query( $query );

   // print out the results
   if( $results )
   {
      while( $Accounts = mysql_fetch_object( $results ) )
      {
         //print out the info
         $StudentID = $Accounts -> StudentID;
         $Amountowed = $Accounts -> Amountowed;
         $Hold = $Accounts -> Hold;
        
         echo( "$StudentID<br>, $Amountowed<br>, $Hold<br>" );
      }
   }
   else
   {
      echo( "Trouble getting contacts from database: ");
   }
   
?>

</body>
</html>
