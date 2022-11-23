<?php
include './header.php';
$customer = get_customer($_GET['id']);
if (!$customer)
    die('customer is not existed');

?>

<div class="mb-5">
    <a class="btn btn-warning mr-3" href="./edit.php?id=<?= $customer['id'] ?>">Edit</a>
    <a class="btn btn-danger" href="./delete.php?id=<?= $customer['id'] ?>">Delete</a>
</div>

<p>
    <strong>ID:</strong>
    <?= $customer['id'] ?>
