
<?php
if (isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "lbrce");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    $imageName = $_FILES['image']['name'];

    $sql = "INSERT INTO images (name, image) VALUES ('$imageName', '$imgContent')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ImageUpload.php?status=success');
        exit();
    } else {
        echo "Error inserting image: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
