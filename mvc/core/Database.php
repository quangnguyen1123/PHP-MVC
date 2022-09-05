<?php

class database{

    public $link;

    function __construct()
    {
        $this->link = mysqli_connect ("localhost","root", "","quanlibanhang") or die ("Ko the ket noi Database");
        return $this->link;
    }
}
?>

