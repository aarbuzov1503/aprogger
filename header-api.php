<?

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $dbname = '';
    $dbuser = '';
    $dbpass = '';

   $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->prepare('INSERT INTO header_api (name, phone, email) VALUES(:name, :phone, :email)');

    
    $stmt->bindValue(':name', $_POST['header-form__name']);
    $stmt->bindValue(':phone', $_POST['header-form__phone']);
    $stmt->bindValue(':email', $_POST['header-form__email']);
    

    if ($stmt->execute()) {
        echo '1';
    }
    ?>
