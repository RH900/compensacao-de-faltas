<?php


//Lendo um campo
$xml = simplexml_load_file('students.xml');
echo "<br>Lendo um campo</br>";
echo $xml->aluno[1]->nome."<br></br>";


//Lendo varios campos
echo "<br>lendo varios campos</br>";
foreach($xml->aluno as $key)
{
    foreach ($key->nome as $nomes) {
        
        echo $nomes.' ,';
    }
}

//Lendo todo array
echo"<br></br><br>Lendo todo array</br>";
print_r($xml);



?>


