<?php
$tasks = [
    [
        'classname' => 'mbdatastore_standarddb\durable_message_cleaner',
        'blocking' => 0,
        'minute' => 'R',
        'hour' => '*/3',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*'
    ]
];
