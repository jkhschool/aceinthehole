<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=jenhirsc_ace', 'jenhirsc_ace_client', 'myP4ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}


if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $comment = $_POST['comment'];


    try {
        $sql = 'INSERT INTO contact SET
                      name = :name,
                      email = :email,
                      status = :status,
                      comment = :comment';

        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':status', $status);
        $s->bindValue(':comment', $comment);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted contact form: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    include '../includes/success.html.php';

}else {
    include 'contact.html.php';
}
?>
