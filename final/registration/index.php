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
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $accommodations = $_POST['accommodations'];
    $emergencyname = $_POST['emergencyname'];
    $emergencyphone = $_POST['emergencyphone'];
    $statussaturday = $_POST['statussaturday'];
    $eventssaturday = $_POST['eventssaturday'];
    $statussunday = $_POST['statussunday'];
    $eventssunday = $_POST['eventssunday'];


    try {
        $sql = 'INSERT INTO registration SET
                      name = :name,
                      gender = :gender,
                      age = :age,
                      email = :email,
                      accommodations = :accommodations,
                      emergencyname = :emergencyname,
                      emergencyphone = :emergencyphone,
                      statussaturday = :statussaturday,
                      eventssaturday = :eventssaturday,
                      statussunday = :statussunday,
                      eventssunday = :eventssunday';

        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':age', $age);
        $s->bindValue(':email', $email);
        $s->bindValue(':accommodations', $accommodations);
        $s->bindValue(':emergencyname', $emergencyname);
        $s->bindValue(':emergencyphone', $emergencyphone);
        $s->bindValue(':statussaturday', $statussaturday);
        $s->bindValue(':eventssaturday', $eventssaturday);
        $s->bindValue(':statussunday', $statussunday);
        $s->bindValue(':eventssunday', $eventssunday);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted registration: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    include '../includes/success.html.php';

}else {
    include 'registration.html.php';
}
?>