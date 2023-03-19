<?php 
    /*###########################
        CONFIG FILE
    ###########################*/
    $config = parse_ini_file('./configuration.ini');

    /*###########################
        Clone COMMAND
    ###########################*/

    if (!is_dir($config['project_path'])) {
        $url = $config['project_url'];
        $url = substr(strpbrk($url, '/'), 2);
        $url = 'https://' . $config['developer_token'] . '@' . $url . ' ' . $config['project_path'];

        printf('This folder d\'ont exist starting cloning.');
        $process = exec('git clone ' . $url);
    
        printf('%s', $process);
    } else {
        $process = exec('git -C '. $config['project_path'] .' pull');
        printf('%s', $process);
    }
?> 