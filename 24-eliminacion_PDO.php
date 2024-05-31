  <?php
$id=$_POST["id"];
  $servername = "localhost";
    $username = "root";
    $password ="pass";    
    $dbname = "covid";    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        
        $conn->beginTransaction();
        $sql="DELETE * FROM pacientes
        WHERE  `id`=$id;";

        $conn->exec($sql);
        $conn->commit();
        echo "Fue editado correctamente.";
    }
    catch(Exception $e) {
        echo "Error : ".$e->getMessage();
    }