<?php include "db.php"; ?>
<?php


function createRows(){

    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result) {
            die('Query FAILED');
        } else {
            echo "Created!!!";
        }
        
    }

}


function readRows(){
    global $connection;
    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED');
    }

    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<pre>";
        echo "<hr>";
        print_r($row);
        echo "</pre>";
        
    }

}


function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED');
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable(){

    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";


        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED");
        } else {
            echo "Updated!!!";
        }
    }
}

function deleteRows(){

    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";


        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED");
        } else {
            echo "Deleted!!!";
        }
    }
}
