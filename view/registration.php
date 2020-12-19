<?php include('header.php')?>

    <h1>Registration</h1>

    <form action="index.php" method="post">
    <input type="hidden" name="action" value="submit_registration">
        <div>
            <label for="Firstname">Firstname:</label><br>
            <input type="text" name="firstName" id="Firstname">
            <br><br>

            <label for="Lastname">Lastname:</label><br>
            <input type="text" name="lastName" id="Lastname">
            <br><br>

            <label for="Birthday">Birthday:</label><br>
            <input type="text" name="birthday" id="Birthday">
            <br><br>

            <label for="Email">Email:</label><br>
            <input type="text" name="email" id="Email">
            <br><br>

            <label for="Password">Password:</label><br>
            <input type="text" name="password" id="Password">
            <br><br>
        </div>
        <div style="text-align: center"><input type="submit" value="Submit"></div>

<?php include('footer.php')?>
