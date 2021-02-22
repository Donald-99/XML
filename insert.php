<?php 
include_once('includes/dbh.inc.php');//Database configuration file
mysqli_select_db($conn, $dbName);
$sql = "INSERT INTO `my_schema`(`cedi`, `childWeightFrom`, `childWeightTo`, `color_code`, `color_description`, `countryImages`, `defaultSku`, `preferredEan`, `sapAssortmentLevel`, `sapPrice`, `season`, `showOnLineSku`, `size_code`, `size_description`, `skuID`, `skuName`, `stateOfArticle`, `umSAPprice`, `volume`, `weight`)
 VALUES (0,0,0,032,'AZUL','false','true',2147483647,'TB','4.2','A/I','true','M05','53 cm - 1-5 Meses 593430003', 000000000593430002,'Cárdigan en tricot azul cielo de algodón con cuello redondo y cierre por botones frontales',
'true','€',489.51,52.0)";
$query = mysqli_query($conn, $sql);
if (!$query) {
    echo "User does not inserted. Error : " . mysqli_error($conn);
} else {
    echo "User inserted successfully.";
}
?>