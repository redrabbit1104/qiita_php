<?php

function validation($filter_value)
{   //$_POST 連想配列

    $messages = [];

    if (
        empty($filter_value['input_name']) ||
        16 < mb_strlen($filter_value['input_name'])   // 追記
    ) {
        $messages[] = '8文字以下の「氏名」を入力してください。'; //修正
    }

    if (!isset($filter_value['licence'])) {
        $messages[] = '「免許」のチェックは必須です。';
    }

    return $messages;
}
