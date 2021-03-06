<?php
    require_once 'news.php';

    $articles = array();
    $articles[] = new News(
        'Долой долгострой: как изменится регулирование проблем дольщиков',
        '<strong>В России изменились критерии включения объектов недвижимости в реестр проблемных. Инициатива Минстроя позволит хотя бы объективно оценить число пострадавших граждан</strong>
        <p>С 23 февраля у чиновников будет больше оснований для включения объекта недвижимости в реестр проблемных. Это следует из приказа «О внесении изменений в критерии отнесения граждан, чьи денежные средства привлечены для строительства многоквартирных домов и чьи права нарушены, к числу пострадавших граждан…», который Минстрой утвердил в конце января 2018 года.</p>',
        '23.02.2018 09:00',
        'news_0001.jpg'
    );
    $articles[] = new News(
        'С аптечкой и без тюнинга: что такое техосмотр по новым правилам',
        '<strong>Шипы на всех колесах, тонировка фар вне закона, лицензия на дополнительное оборудование и другие изменения, которые затронули процедуру техосмотра. Да, и не забудьте выяснить, в порядке ли у вас демпфер</strong>
        <p>СВ России вступили в действие новые правила прохождения технического осмотра автомобилей — все изменения носят технический характер. Снимать процесс техосмотра на камеры по-прежнему необязательно, Российский союз автостраховщиков не привлекли к содержанию общей базы данных, не был введен и штраф за отсутствие оформленной диагностической карты. Тем не менее, пройти техосмотр теперь стало намного труднее.</p>',
        '23.02.2018 09:15',
        'news_0002.jpg'
    );
    $articles[] = new News(
        'Театральное дело: кто стоит за хищениями при строительстве театра Додина',
        '<strong>ФСБ возбудила уголовное дело о мошенничестве при строительстве новой сцены петербургского Театра Европы Льва Додина; в среду у фигурантов прошли обыски.</strong>
        <p>21 февраля разразился очередной скандал, связанный с хищением госсредств, выделенных на культуру. У подрядчиков строительства новой сцены для одного из ведущих театров Санкт-Петербурга — Академического малого драматического театра (Театр Европы, МДТ) — прошли обыски, несколько человек задержаны. Но пока среди фигурантов дела нет чиновников и сотрудников театра.</p>
        <p>Управление ФСБ по Санкт-Петербургу и Ленинградской области утром 21 февраля сообщило о возбуждении уголовного дела в связи с хищением не менее 45 млн руб., выделенных на проектирование новой сцены МДТ, по ст. 159 УК РФ (мошенничество). В ФСБ «в интересах следствия» не назвали имена задержанных, отметив, что хищение было совершено группой лиц.</p>',
        '23.02.2018 09:20',
        'news_0003.jpg'
    );

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
