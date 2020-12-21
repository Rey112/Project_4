<?php

class AccountDB
{
    public static function validate_login($email, $password)
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        if(count($user) > 0) {
            $user = new Account($user['id'], $user['email'], $user['fname'], $user['lname'], $user['phoneNumber'],
                $user['birthday'], $user['password']);
            return $user;
        } else {
            return false;
        }
    }




    /*
    function validate_login($email, $password) {
        global $db;
        $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        if (count($user) > 0) {
            return $user['id'];
        } else {
            return false;
        }
    }
    */

    function register_user($firstName, $lastName, $birthday, $email, $password) {
        $db = Database::getDB();
        $query = 'INSERT INTO accounts
                        (email, fname, lname, birthday, password)
                      VALUES
                        (:email, :fname, :lname, :birthday, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':fname', $firstName);
        $statement->bindValue(':lname', $lastName);
        $statement->bindValue(':birthday', $birthday);
        $statement->bindValue(':password', $password);

        $statement->execute();
        $statement->closeCursor();
    }


    public static function get_user($userId)
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts WHERE id = :userId';
        $statement = $db->prepare($query);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        return $user;
    }
}
