<?php 
include_once('includes/dbh.inc.php');
mysqli_select_db($conn,$dbName);
$sql = "SELECT * FROM my_schema";
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
while($data = mysqli_fetch_array($query))
{
    echo "Cedi = ".$data['cedi']."<br>";
    echo "ChildWeightFrom = ".$data['childWeightFrom']."<br>";
    echo "ChildWeightTo = ".$data['childWeightTo']."<br>";
    echo "Color_code = ".$data['color_code']."<br><hr>";
    echo "Color_description = ".$data['color_description']."<br><hr>";
    echo "CountryImages = ".$data['countryImages']."<br><hr>";
    echo "DefaultSku = ".$data['defaultSku']."<br><hr>";
    echo "PreferredEan = ".$data['preferredEan']."<br><hr>";
    echo "SapAssortmentLevel = ".$data['sapAssortmentLevel']."<br><hr>";
    echo "SapPrice = ".$data['sapPrice']."<br><hr>";
    echo "Season = ".$data['season']."<br><hr>";
    echo "ShowOnLineSku = ".$data['showOnLineSku']."<br><hr>";
    echo "Size_code = ".$data['size_code']."<br><hr>";
    echo "Size_description = ".$data['size_description']."<br><hr>";
    echo "SuID = ".$data['skuID']."<br><hr>";
    echo "SkuName = ".$data['skuName']."<br><hr>";
    echo "StateOfArticle = ".$data['stateOfArticle']."<br><hr>";
    echo "UmSAPprice = ".$data['umSAPprice']."<br><hr>";
    echo "Volume = ".$data['volume']."<br><hr>";
    echo "Weight = ".$data['weight']."<br><hr>";
}