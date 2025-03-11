<?php
$tombBe = array("B","B");
$tombki = array("","","","");
$betu="A";
$indexMax = count($tombBe)-1;
for($i=0;$i<=$indexMax;$i++)
{
    $tombki[$i]=$tombBe[$i].$betu;
    $tombki[$i]=$tombki[$i].$tombki[$i];
}

print_r($tombBe); print"<br>";
print_r($tombki); print"<br>";
