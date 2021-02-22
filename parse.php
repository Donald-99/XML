<?php

$xml = simplexml_load_file("dataset.xml") or die("cant load xml");

//echo dashes(79)."\n";
foreach($xml as $records)
{
    // echo"<pre>";
    // print_r($records->detailsData->cedi);
    $row = "| ".pad(6,$records->detailsData->childWeightFrom." | ".$records->detailsData->childWeightTo." | ".$records->detailsData->color_code." |
    ".$records->detailsData->color_description." | ".$records->detailsData->countryImages." | ".$records->detailsData->defaultSku." |
    ".$records->detailsData->preferredEan." | ".$records->detailsData->sapAssortmentLevel." | ".$records->detailsData->sapPrice." |
    ".$records->detailsData->season." | ".$records->detailsData->showOnLineSku." | ".$records->detailsData->size_code." | ".$records->detailsData->size_description." |
    ".$records->detailsData->skuID." | ".$records->detailsData->skuName." | ".$records->detailsData->stateOfArticle." | ".$records->detailsData->umSAPprice." | ".$records->detailsData->volume." | ".$records->detailsData->weight." |\n") ;

    echo $row;
 }

echo dashes(79)."\n";

function pad($length, $value)
{
    if(strlen($value) < $length)
    {
        for($i = strlen($value); $i < $length-1; $i++ )
        {
            $value.=" ";
        }
    }
    return $value;
}

function dashes($length)
{
    $str = "";
    for($i = 0; $i < $length; $i++)
    {
        $str.="-";
    }
    return $str;
}


?>