<?php
 require_once('../connect.php');

 // récupérer les valeurs 
 $mail = $_POST['mail'];
 $password = $_POST['password'];
 // Requête mysql pour insérer des données
 $stmt = $bdd->prepare("INSERT INTO membre (mail, password) VALUES (:mail, :password)");
 $stmt->bindParam(':mail', $mail);
 $stmt->bindParam(':password', $password);
 $stmt->execute();
 // vérifier si la requête d'insertion a réussi
 // if($stmt){
 //  header('Location:index.php');
 // }else{
 //   echo "Échec de l'opération d'insertion";
 // }
 echo json_encode($_POST);
    


?>