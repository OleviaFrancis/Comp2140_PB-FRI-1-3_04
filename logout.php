<?php
    
     header('Location: http://' . $_SERVER['HTTP_HOST'] . 'homepage.html', true, 303);
     exit;
     
      // session_start();
    
    // if (isset($_SESSION['welcome'])){
    //     session_destroy();
        
    //     echo "<script>location.href='homepage.html'</script>";
    // }
    // else{
    //     echo "<script>location.href='homepage.html'</script>";
    // }
    
?>
