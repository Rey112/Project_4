<?php include('header.php'); ?>
<table>
    <a href=".?action=display_edit_question&userId=<?php echo $userId; ?>&listType=mine">Display Users Question</a>
    <tr>
        <th>Question Of Choice</th>
        <th>Question Body</th>
        <th>Question Skills</th>
    </tr>
</table>
<br>
<table>
    <tr>
        <td><?php echo $questions['title']; ?><br></td>
        <td><?php echo $questions['body']; ?></td>
        <td><?php echo $questions['skills']; ?></td>
    </tr>
</table>

<?php include('footer.php'); ?>

