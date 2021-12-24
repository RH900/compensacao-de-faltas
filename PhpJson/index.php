<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Obtendo valores do aequivo JSON
        
        $JsonContents = file_get_contents("students.json");
        
        
        //Convertendo para array
        
        $array = json_decode($JsonContents, true);
        
        //Adicionando dado
        
        $array['Student'][] = array ('Name' => 'Rubens2', 'StudentID' => 3024121, 'subject' => 'java');
        file_put_contents('students.json', json_encode($array, JSON_FORCE_OBJECT));
        
        
        
        print_r($array);
        
        
        ?>
    </body>
</html>
