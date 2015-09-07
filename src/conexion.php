<?php
    
    $config =array( 'host'=>'localhost',
                    'username'=> 'root',
                    'password'=> '',
                    'database'=> `2015`);

        

    $db= new mysqli($config['host'],
                    $config['username'],
                    $config['password'],
                    $config['database']);

    if(mysqli_connect_errno()){
        echo "Error: No se pudo conectar al servidor de bases de datos";
    }

