<?php include('header.php'); ?>

    <h1>Ask New Question</h1>

    <form action="index.php" method="post">
        <input type="hidden" name="action" value="submit_question">
        <input type="hidden" name="userId" value="<?php echo $userId; ?>">

        <div class="form-group">
            <label for="title">Question Of Choice</label>
            <input type="text" name="title" value="<?php echo $questions['title']; ?>">
        </div>

        <div class="form-group">
            <label for="title">Question Body</label>
            <input type="text" name="body" value="<?php echo $questions['body'];?>">
        </div>

        <div class="form-group">
            <label for="title">Question Skills</label>
            <input type="text" name="skills" value="<?php echo $questions['skills'];?>">
        </div>

        <input type="submit" class="btn btn-primary" value="Add Question">

    </form>

<?php include('footer.php'); ?>
