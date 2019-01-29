<?php
$pdo = new PDO('mysql:host=localhost;dbname=Etudiants', 'root', 'rtlry'); 
$sql = 'SELECT firstname, lastname, email FROM Personnes';
$req = $pdo->query($sql);
while($row = $req->fetch()) {
    echo '<li>'.$row['firstname'].',';
    echo $row['lastname'];
    echo '('.$row['email'].')</li>';
}
$req->closeCursor();
?>
