<?php

function validation($filter_value){   //$_POST 連想配列
    
    $messages = [];

    if(empty($filter_value['input_name'])){
        $messages[] = '氏名は必須です';
    }

    return $messages;
}