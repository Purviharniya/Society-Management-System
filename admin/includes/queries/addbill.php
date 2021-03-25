<?php

if (isset($_POST['block_select']) && isset($_POST['flat_select']) && $_POST['block_select'] != '' && $_POST['flat_select'] != '') {
    $block = $_POST['block_select'];
    $flat = $_POST['flat_select'];
    
    $flat_series = substr($flat,-2); //to get the series to which the flat belongs to

    //now we have to get all the information of this particular flat from the database: owner's name,contact,alternate contact,email, flat's area, rate psq, floor

}