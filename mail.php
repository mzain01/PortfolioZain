<?php
include('dbcon.php');
?>
<?php
if(isset($_POST['sendMessege'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];
    $query = $pdo->prepare("insert into messeges (Name , Email , subject , message) values (:cName, :cEmail, :cSubject, :cMessege)");
            $query->bindParam('cName', $Name);
            $query->bindParam('cEmail', $Email);
            $query->bindParam('cSubject' ,$Subject);
            $query->bindParam('cMessege' ,$Message);
            $query->execute();
            echo "<script>alert('Messege send successfully')
            location.assign('index.php')</script>";
        }
    
?>