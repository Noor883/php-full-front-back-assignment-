<?php include './header_student.php';

if (empty($_GET['id']))
    die('You are accessing directly');

$student = get_customer($_GET['id']);


?>
<form class="w-50" method="POST" action="./update.php">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="firstname" required value="<?= $student['firstname'] ?>">
    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lastname" required value="<?= $student['lastname'] ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $student['email'] ?>">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?= $student['phone'] ?>">
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">city</label>
        <input type="text" class="form-control" id="city" name="city" value="<?= $student['city'] ?>">
    </div>

    <button type="submit" class="btn btn-warning">Update</button>
</form>
<?php include './footer.php' ?>