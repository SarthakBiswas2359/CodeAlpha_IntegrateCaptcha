<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
    
<?php
if (isset($_POST['submit'])) {
     $email = $_POST['email'];
     $password = $_POST['password'];

    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha = $_POST['g-recaptcha-response'];

        if (!$recaptcha) {
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>PLEASE</strong> GO BACK AND CHECK THE CAPTCHA BOX!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

            exit;
        } else {
            $secret = "6Leb7LMnAAAAAB3Dwnc1mr1Mz7DCc6biARJ5HuKh";
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $recaptcha;
            $response = file_get_contents($url);
            $responseKeys = json_decode($response, true);
            
            if($responseKeys['success']){
                echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successful! </strong>Your records matched.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                echo "<br>".$email;   
                echo "<br>".$password ;
               
    
                

            }
        }
    }


}
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>





