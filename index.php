<?php
	require_once 'news.php';

	$articles = array();
	$articles = new News('Долой долгострой: как изменится регулирование проблем дольщиков',
		'<strong>В России изменились критерии включения объектов недвижимости в реестр проблемных. Инициатива Минстроя позволит хотя бы объективно оценить число пострадавших граждан<strong>
		<p>С 23 февраля у чиновников будет больше оснований для включения объекта недвижимости в реестр проблемных. Это следует из приказа «О внесении изменений в критерии отнесения граждан, чьи денежные средства привлечены для строительства многоквартирных домов и чьи права нарушены, к числу пострадавших граждан…», который Минстрой утвердил в конце января 2018 года.</p>',
		'23.02.2018 09:00','news_0001.jpg');
	/*$articles = new News('','','','');
	$articles = new News('','','','');
	$articles = new News('','','','');
	$articles = new News('','','','');*/

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Новости</title>
</head>
<body>

<?php 
	foreach ($articles as $article) {
		$article->printThis();
	}
?>

</body>
</html>