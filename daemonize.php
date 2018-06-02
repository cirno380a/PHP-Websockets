<?php
(new Firehed\ProcessControl\Daemon)
    ->setUser('www')
    ->setPidFileLocation('/var/run/websocket.pid')
    ->setStdoutFileLocation(sys_get_temp_dir().'/websocket.log')
    ->setStdErrFileLocation('/dev/null')
    ->setProcessName(basename(__FILE__).' master process')
    ->autoRun();
