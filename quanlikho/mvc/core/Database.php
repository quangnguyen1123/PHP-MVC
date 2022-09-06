<?php

class database{

    public $Link;

    function __construct()
    {
        $this->Link = mysqli_connect ("localhost","root", "","quanlikho") or die ("Ko the ket noi Database");
        return $this->Link;
    }
}
?>

