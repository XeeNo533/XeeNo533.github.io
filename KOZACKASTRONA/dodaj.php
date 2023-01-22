<?php 	
       



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jeden=$_POST['name'];
            $dwa = $_POST['email'];
            $trzy = $_POST['phone'];
            $cztery = $_POST['message'];
        
            $conn = mysqli_connect('localhost','root','','test');
    
            $add ="INSERT INTO `test` (`id`, `imie`, `email`, `telefon`, `wiadomosc`) VALUES ( 'NULL', '$jeden', '$dwa', '$trzy', '$cztery');";
    
            $result = mysqli_query($conn, $add);
            
            mysqli_close($conn);
            header("Location: index.html");
            exit;
          }
?>

