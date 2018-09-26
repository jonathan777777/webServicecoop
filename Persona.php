<?php



    $hostname_localhost = "localhost";
    $datbase_localhost = "bd_micoop";
    $username_localhost = "root";
    $password_localhost = "localhost";

    $localhost= mysql_connect($hostname_localhost, $username_localhost, $password_localhost)
    or
    trigger_error(mysql_error(), E_USER_ERROR);

    mysql_select_db($datbase_localhost, $localhost);

    $query_search = "select * from persona order where id_persona=?";
    $querry_exec = mysql_query($query_search) or die(mysql_error());

    $json = array();
    if(mysql_num_rows($querry_exec)){
        while($row=mysql_fetch_assoc($querry_exec)){
            $json['persona'][]= row;
        }
    }
    mysql_close($localhost);
    echo json_encode($json);
?>