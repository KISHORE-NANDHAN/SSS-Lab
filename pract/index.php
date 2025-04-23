<?php include './links.html'; ?>


<form action="index.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required />

    <label for="email">Email</label>
    <input type="email" name="mail" id="email" required />

    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd" required />

    <input type="submit" name="submit" value="Submit" />
</form>

<?php

if(isset($_POST['submit'])){
    
    include './db.php';

    $name = $_POST['name']; $email = $_POST['mail']; $password = $_POST['pwd'];

    $sql = 'INSERT into users(Name,Email,Password) values (?,?,?)';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);

    if($stmt->execute()){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $stmt->error;
    }
}
?>