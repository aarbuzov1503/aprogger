<?
// Подключение к базе данных MySQL
$servername = "localhost";
$dbuser = "";
$dbpass = "";
$dbname = "";

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM moderate ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
    <head>
    	<!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
    	  <link rel="shortcut icon" href="https://aprogger.ru/access/img/ico.svg" type="image/x-icon"/>
        <title>Список сервера</title>
        <style>
            table {
                border: 1px solid darkgray;
                border-collapse: collapse;
            }

            th {
                background-color: lightblue;
            }

            th, td {
                border: 1px solid darkgray;
                padding: 5px;
            }
            
            .section-form-1 {
            	margin-bottom: 100px;
            }
            
              .container {
            	max-width: 1360px;
            	padding: 0 50px;
            	margin: 0 auto;
            }
        </style>
        <script src="https://aprogger.ru/access/js/console.js" defer></script>
    </head>
    <body>
    	<!-- Yandex.RTB R-A-6902447-1 -->
<script>
window.yaContextCb.push(()=>{
	Ya.Context.AdvManager.render({
		"blockId": "R-A-6902447-1",
		"type": "floorAd",
		"platform": "desktop"
	})
})
</script>
       <section class="section-form-1">
       	<div class="container">
       		<h2>Таблица мероприятий ПК</h2>
        <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Стоимость билета</th>
            <th>Диапазон дат</th>
            <th>Время</th>
            <th>ФИО</th>
            <th>Афиша</th>
            <th>Фотография</th>
             <th>Дата поступления</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['description'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['date_range'] . '</td>';
                    echo '<td>' . $row['date_time'] . '</td>';
                    echo '<td>' . $row['fullname'] . '</td>';
                    echo '<td> https://app.aprogger.ru/moderate-app/access/' . $row['image1'] . ' </td>';
                    echo '<td> https://app.aprogger.ru/moderate-app/access/' . $row['image2'] . ' </td>';
                    echo '<td> ' . $row['datetime'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
       		 </div>
       
        </section>
        <?

    $dbname = '';
    $dbuser = '';
    $dbpass = '';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM aprogger_task ORDER BY id DESC');

?>
<div class= "container">
	
	<h2>Таблица Подвал</h2>
        <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>E-mail</th>
            <th>Текст</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['text'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
</div>


  <?

    $dbname = '';
    $dbuser = '';
    $dbpass = ';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM header_api ORDER BY id DESC');

?>
<div class= "container">
	
	<h2>Таблица HEADER</h2>
        <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>E-mail</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
</div>
    </body>
</html>
