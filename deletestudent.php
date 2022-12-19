<?php
    
     $dbcnx = @mysql_connect("localhost", "quickme1_4211",
   "csci4211");
 

// Select the Registration database 

  if (! @mysql_select_db("quickme1_4211") ) {

    echo( "<p>Unable to locate the registration " . 

          "database at this time.</p>" ); 

    exit(); 

  } 

   
 

   
    $result = mysql_query("delete from student where studentid='900345877'");

?>