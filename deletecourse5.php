
<?php
require_once "myfunctions2.php";
myconnect();
    

   $course_no = $_REQUEST['course_no'];

echo "course_no = $course_no";


    $result = mysql_query("DELETE FROM course WHERE course_no = '$course_no'");
$count=mysql_affected_rows();
If ($count==1)
echo "Succesfully deleted";
else
{ 
echo "error deleting";
exit();
}

?>