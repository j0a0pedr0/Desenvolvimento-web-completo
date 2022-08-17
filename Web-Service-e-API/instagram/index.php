<?php 
    $request = file_get_contents("https://www.instagram.com/pedr0_alvez/?__a=1");
    $object = json_decode($request,512,JSON_BIGINT_AS_STRING);

?>