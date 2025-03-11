<?php
$tomb = array(3,1,6,4,11);
for($i=0;i<=$tomb.count();$i++)
{
    if($tomb[$i]>5 && $tomb[$i]<=9)
    {
        print_r($tomb[$i]);
    }
}