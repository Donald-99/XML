<?php
include_once('includes/dbh.inc.php');
mysqli_select_db($conn, $dbName);
$sql = "UPDATE `my_schema` SET `cedi`=0,`childWeightFrom`=1,`childWeightTo`=1,
`color_code`=031,`color_description`='AZUL',`countryImages`='false',`defaultSku`='false',
`preferredEan`=8052473552489,`sapAssortmentLevel`='TB',`sapPrice`='4.2',`season`='A/I',
`showOnLineSku`='true',`size_code`='M09',`size_description`='50 cm - 0-1 Meses',`skuID`=000000000593430001,
`skuName`='CHAQUETA TRICOT ALGODOÓN AZUL / AZUL / 50 cm - 0-1 Meses',`stateOfArticle`='true',`umSAPprice`='€',`volume`=489.51,`weight`=52.0 WHERE cedi = 1";
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully updated";
}
?>