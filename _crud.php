<?php
//$fileAddress = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {    

    if(isset($_POST['formType']) && $_POST['formType'] == 'contact'){

        $name = clean($_POST['name']);
        $surname = clean($_POST['surname']);
        $phone = clean($_POST['phone']);
        $email = clean($_POST['email']);
        $message = clean($_POST['message']);

        saveContactDtl($name, $surname, $phone, $email, $message);

    } else {

        if (!empty($_POST["fileAddress"])) {
            $fileAddress = $_POST['fileAddress'];
            $email = clean($_POST['email']);
            chkSubsEmail($email, $fileAddress);
        } else {
            header('Location : 404.php');
        }

    }
}

function saveContactDtl($name, $surname, $phone, $email, $message){
    $conn = connection();
    $sql = "INSERT INTO `contact` (`id`, `name`, `surname`, `phone`, `email`, `message`, `status`) VALUES (NULL, '$name', '$surname', '$phone', '$email', '$message', 'incomplete');";
    if ($conn->query($sql) === TRUE) {
        header('Location: contact.php?mode=conSuccess');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: contact.php?mode=conFail');
    }
}

function chkSubsEmail($email, $fileAddress){
    
    $email = clean($email);
    $conn = connection();
    //die('still work');
    $sql = "SELECT * FROM `subscribers` WHERE `email` = '$email';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //Email exists
        header('Location: '.$fileAddress.'?mode=emailExist');
    } else {
        //email does not exist
        addEmailToList($email, $conn, $fileAddress);
    }

}

function addEmailToList($email, $conn, $fileAddress){
    $sql = "INSERT INTO `subscribers` (`id`, `email`) VALUES (NULL, '$email'); ";
    if ($conn->query($sql) === TRUE) {
        header('Location: '.$fileAddress.'?mode=subSuccess');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: '.$fileAddress.'?mode=subFail');
    }
    
}

function connection(){
    $servername = DATABASE_HOST;
    $username = DATABASE_USER;
    $password = DATABASE_PASS;
    $dbname = DATABASE_Name;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        header('Location : 404.php?msg=connection');
        die();
    }
    return $conn;
}
function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>