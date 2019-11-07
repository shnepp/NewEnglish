<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array fetch and sort</title>
</head>
<body>
<?php
		
	
	echo "это фетч это фетч!";
	
	//Подключаемся к базе
		include_once ('connect.php');

		
		//$user = 'root';
        //$pass = '';
        //$dbh = new PDO('mysql:host=localhost;dbname=new_english', $user, $pass);
        //$dbh->exec("set names utf8");
        
		//Запрашиваем слова из базы данных        
        $sql = 'SELECT word FROM words where qq_id = 1';

        $stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    	$stmt->execute();
    	 
	    //Объявляем массив для слов
	    $array = array();

		//Пушим слова из БД в массив
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
		    
		    array_push ($array, $row[0]);
	    
	    }
        
        
	    //Запрашиваем из базы данных вопрос
        $sql = 'SELECT sen_rus FROM questions';
    	
    	$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    	$stmt->execute();
    	$q_row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
	    //echo $q_row[0];

	    $stmt = null;
	    
	    //Перемешиваем архив
	    $array_sorted = $array; 
	    shuffle($array_sorted);

	    //считаем количество слов
	    $count = count($array_sorted);


	    $json = json_encode($array);

	    
		
  
?>
	
</body>
</html>
