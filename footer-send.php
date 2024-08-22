<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "cl92747_verstak";
$password = "cl92747_verstakPass";
$dbname = "cl92747_verstak";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение данных из формы
$name1 = $_POST["name"];
$phone2 = $_POST["phone"];
$email3 = $_POST["email"];
$text4 = $_POST["text"];




// Вставка данных в таблицу базы данных
$sql = "INSERT INTO list-back (name, phone, email, text )
        VALUES ('$name', '$phone', '$email', '$text')";

if ($conn->query($sql) === TRUE) {
    echo "Форма успешно доставлена, эту вкладку можно закрыть";

      ?>    
        
        <?php
    $timer = 5; // начальное значение таймера
?>

<p style="font-size:32px;">Форма успешно доставлена, эту вкладку можно закрыть. Через <span id="timer"><?php echo $timer; ?></span> секунд будет произведено перенаправление на главную страницу</p>
console.log($sql);

<script>
  var timer = <?php echo $timer; ?>;
  var timerElement = document.getElementById('timer'); // элемент, содержащий значение таймера

  function countdown() {
    timer--;

    // обновляем значение таймера на странице
    timerElement.textContent = timer;

    if (timer <= 0) {
      window.location = 'https://aprogger.ru'; // перенаправляем на страницу 
    } else {
      setTimeout(countdown, 1000); // обновляем таймер каждую секунду
    }
  }

  // запускаем таймер при загрузке страницы
  setTimeout(countdown, 1000);
</script>

<?php
    
} else {
    echo "Ошибка при добавлении данных сообщите администратору на почту aprogger@mail.ru: " . $conn->error;
}

$conn->close();
?>