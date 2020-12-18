<?php

    require('database.php');

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if (strpos($email, '@') == false ) {
        echo 'Email must contain an @ character';
        echo '<br>';
}

    if (empty($password)) {
        echo 'password is required';
    } elseif (strlen($password) <= 8){
        echo 'password must be 8 characters';
        echo "<br>";
    }


    function input_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


   function validate_login($email, $password) {
       global $db;
       $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
       $statement = $db->prepare($query);
       $statement->bindValue(':email', $email);
       $statement->bindValue(':password', $password);
       $statement->execute();
       $user = $statement->fetch();
       $statement->closeCursor();

       if(count($user)>0){
           return $user['id'];
       } else {
           return false;
       }

   }

?>

<html>
<head>
    <title>Display Login Information</title></head>
    <link rel="stylesheet" type="text/css" href="main.css">
<body>

    <h2>Login Inputs</h2>
    <div>
        Email: <?php echo $email; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>
    <div style="text-align: center"><a href="question_form.php">Click Next to go to Questions</a></div>
</body>
</html>



