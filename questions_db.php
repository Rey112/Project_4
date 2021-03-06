<?php
class QuestionDB
{
    public static function get_users_questions($userId)
    {
        $db = Database::getDB();

        $query = 'SELECT * FROM questions WHERE ownerid = :userId';
        $statement = $db->prepare($query);
        $statement->bindValue(':userId', $userId);
        $statement->execute();

        $questions = $statement->fetchAll();
        $statement->closeCursor();

        return $questions;
    }

    public static function get_question($questionId)
    {
        $db = Database::getDB();

        $query = 'SELECT * FROM questions WHERE id=:questionId';
        $statement = $db->prepare($query);
        $statement->bindValue(':questionId', $questionId);
        $statement->execute();
        $question = $statement->fetch();
        $statement->closeCursor();
        return $question;

    }

    public static function get_all_questions()
    {
        $db = Database::getDB();

        $query = 'SELECT * FROM questions';
        $statement = $db->prepare($query);
        $statement->execute();

        $questions = $statement->fetchAll();
        $statement->closeCursor();

        return $questions;
    }

    public static function create_question($title, $body, $skills, $ownerid)
    {
        $db = Database::getDB();

        $query = 'INSERT INTO questions
                (title, body, skills, ownerid)
              VALUES
                (:title, :body, :skills, :ownerid)';
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':body', $body);
        $statement->bindValue(':skills', $skills);
        $statement->bindValue(':ownerid', $ownerid);
        $statement->execute();
        $statement->closeCursor();

    }

    public static function display_edit_question($title, $body, $skills, $questionId)
    {
        $db = Database::getDB();

        $query = 'UPDATE questions
                  SET title = :title, body = :body, skills = :skills
                  WHERE id = :questionId';

        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':body', $body);
        $statement->bindValue(':skills', $skills);
        $statement->bindValue(':id', $questionId);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function edit_question($questionId)
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM questions WHERE id = :questionId';
        $statement = $db->prepare($query);
        $statement->bindValue(':questionId', $questionId);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function delete_question($questionId)
    {
        $db = Database::getDB();

        $query = 'DELETE FROM questions WHERE id = :questionId';
        $statement = $db->prepare($query);
        $statement->bindValue(':questionId', $questionId);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function newAnswer($title, $body, $skills, $ownerid)
    {
        $db = Database::getDB();
        $query = 'INSERT INTO answers
                  (title, body, skills, ownerid)
                  VALUES
                     (:title, :body, :skills, :ownerid)';
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':body', $body);
        $statement->bindValue(':skills', $skills);
        $statement->bindValue(':id', $ownerid);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function getAnswer()
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM answers';
        $statement = $db->prepare($query);
        $statement->execute();
        $answer = $statement->fetchAll();
        $statement->closeCursor();

        return $answer;
    }
}

?>

