<?php

function component($component, $data)
{

    $path = './components/' . $component . '.php';

    extract($data);

    include($path);

};