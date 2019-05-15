<?php
//$fileAddress = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["fileAddress"])) {
        $fileAddress = $_POST['fileAddress'];
        $email = clean($_POST['email']);
        chkSubsEmail($email, $fileAddress);
    } else {
        header('Location : 404.php');
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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

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