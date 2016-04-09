
<?php
$autores = array("Steinbeck", "Kafa","Tolkien","Dickens");
$miLibro = array("titulo"=>"The Grapes of wrarth",
		"autor"=>"John Seteinbeck",
		"anioPub"=>1939);
echo $autores[2];//muestra tolkin
echo $autores;//muestra Array
echo $miLibro[1];
echo $miLibro["autor"];
echo print_r($miLibro);
?>
