<?php
include './header_student.php';
$student = get_student($_GET['id']);
if (!$student)
    die('student is not existed');

?>

<div class="mb-5">
    <a class="btn btn-warning mr-3" href="./edit.php?id=<?= $student['id'] ?>">Edit</a>
    <a class="btn btn-danger" href="./delete_student.php?id=<?= $student['id'] ?>">Delete</a>
</div>

<p>
    <strong>ID:</strong>
    <?= $student['id'] ?>
</p>
<p>
    <strong>First Name:</strong>
    <?= $student['firstname'] ?>
</p>
<p>
    <strong>Last Name:</strong>
    <?= $student['lastname'] ?>
</p>
<p>
    <strong>Email:</strong>
    <?= $student['email'] ?>
</p>
<p>
    <strong>Phone:</strong>
    <?= $student['phone'] ?>
</p>
<p>
    <strong>city:</strong>
    <?= $student['city'] ?>
</p>
<p>
    <strong>Updated On:</strong>
    <?= $student['updated_on'] ?>
</p>
<p>
    <strong>Created On:</strong>
    <?= $student['reg_date'] ?>
</p>
<?php include './footer.php' ?>