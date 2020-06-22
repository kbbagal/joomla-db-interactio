<?php
require __DIR__ . '/alarm.php';

function process() {
    $alarms = new AlarmModel();
    print "Started processing         " . "\n\n\n";

    $alarms->getData();

}

process();
