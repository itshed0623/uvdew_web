<?php
    
    
    if(isset($_POST['username'])){
        $_SESSION['username'] = $_POST['username'];
        echo "Sucess";
        
    }else{
        echo "error";
    }

?>