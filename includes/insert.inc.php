<?php
include_once 'conn.inc.php';
// Show database
error_reporting(0);
if(isset($_POST['select'])){
$sql ="SELECT * FROM infos;";
$data = mysqli_query($connection, $sql);
$total = mysqli_num_rows($data);

if($total !=0) {
    while ($result = mysqli_fetch_assoc($data))
    {
        echo "
        <table border='2' margin='auto'>
        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Operation</th>
        </tr>
        <tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['username'] . "</td>
        <td>" . $result['first_name'] . "</td>
        <td>" . $result['last_name'] . "</td>
        <td>" . $result['email'] . "</td>
        <td><a href = 'includes/delete_database.inc.php?a=$result[id]'>Delete</td>
        </tr>
        </table>
        ";
    }
} else {
    echo "No records";
}
}

// Post to database
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $sqlPost ="INSERT INTO infos(username, first_name, last_name, email) VALUES ('$user', '$first', '$last', '$email');";
    
    mysqli_query($connection, $sqlPost);
    }

// Delete all
if(isset($_POST['delete'])){
    
    $sqlDel = "DELETE FROM infos";
    if($connection->query($sqlDel) === true) {
        echo "Record deleted successfully";
    }
}
mysqli_close($connection);