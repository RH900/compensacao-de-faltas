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
        
        //Inciando curl
        $curl = curl_init();
        
        //designando a URL da api
        curl_setopt($curl, CURLOPT_URL, 'http://dummy.restapiexample.com/api/v1/employees');
        
        //convertendo os dados do retorno da api em string
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        //armazenando os dados optidos em uma variavel
        $data = curl_exec($curl);
        
        //fechando o recurso
        curl_close($curl);
        
        // JSON -> ARRAY nos dados obtidos
        $arrayData = json_decode($data);
        
        //Obtendo a 'data' da estrutura JSON da API
        $myData = $arrayData->data;
        
        //Obtendo os 10 primeiros elementos do 'data'
        $myData = array_slice($myData, 0, 9);
        
        foreach ($myData as $employees)
        {
            echo "Id: ".$employees->id ."   ";
            echo "-- Name: ".$employees->employee_name ."   ";
            echo "-- Salary: ".$employees->employee_salary ."   ";
            echo "-- Age: ".$employees->employee_age ."   ";
            echo "-- Profile Image: ".$employees->profile_image ."   ";
            echo "<br></br>";
            
        }
        
        
        
        ?>
    </body>
</html>
