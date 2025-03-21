<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $email = $_POST['email'] ?? '';

    // Create an associative array
    $data = [
        'name' => $name,
        'age' => $age,
        'email' => $email
    ];

    // Encode to JSON
    $jsonData = json_encode($data);

    // Decode JSON back to PHP array
    $decodedData = json_decode($jsonData, true);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>JSON Encode and Decode in PHP</title>
</head>
<body>
    <h2>Enter User Details</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Submit</button>
    </form>

    <?php if (isset($jsonData)): ?>
        <h2>JSON Encoded Data</h2>
        <pre><?php echo htmlspecialchars($jsonData); ?></pre>

        <h2>JSON Decoded Data</h2>
        <pre><?php print_r($decodedData); ?></pre>
    <?php endif; ?>
</body>
</html>
