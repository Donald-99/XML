<?php 
include_once('includes/dbh.inc.php');
mysqli_select_db($conn,$dbName);
$sql = "DELETE FROM my_schema WHERE cedi = 1";
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully delete.";
}
?>