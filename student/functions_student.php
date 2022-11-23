<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $database = "students";
    // Create connection
//-------------------------------------
    $conn = mysqli_connect($servername, $username, $password, $database);

    // ------Check connection-------
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
function get_student()
{
    $sql = "SELECT * FROM student";
    $result = mysqli_query(connect(), $sql);
    // $first_row = mysqli_fetch_assoc($result);
    // $second_row = mysqli_fetch_assoc($result);
    // $third_row = mysqli_fetch_assoc($result);
    $student = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $student[] = $row;
        }
    }
    return $student;
}
function get_student($id)
{
    $sql = "SELECT * FROM student WHERE id=$id";
    $result = mysqli_query(connect(), $sql);

    return mysqli_fetch_assoc($result);
}

function create_student($firstname, $lastname, $email, $phone, $city)
{
    $connection = connect();
    $sql = "INSERT INTO student (firstname, lastname, email, phone,city) VALUES ('$firstname', '$lastname', '$email', '$phone', '$city')";
    $result = mysqli_query($connection, $sql);
    $id = $connection->insert_id;
    return $id;
}

function update_student($firstname, $lastname, $email, $phone, $city, $id)
{
    $sql = <<<EOD
    UPDATE student
        SET firstname='$firstname',
            lastname='$lastname',
            email='$email',
            phone='$phone',
            city=$city
        WHERE id=$id;
    EOD;
    $result = mysqli_query(connect(), $sql);
}