<?php
include 'ArkaDB/ArkaDB.php';

// Path to the JSON file
$database = new ArkaDB('data' , 'db');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        // Handle delete request
        $documentId = $_POST['delete'];
        $database->delete($documentId);
    } else {
        // Extract form data
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Create a new document
        $documentId = $database->insert(['name' => $name, 'email' => $email]);
    }
}

// Display all documents
$documents = $database->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>ArkaDB Form Example</title>
    
    <style>
    *{
      margin-top: 10px;
    }
    body {
        background-color: #222;
        color: #fff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    h1, h2 {
        color: #fff;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"] {
        padding: 5px;
        width: 300px;
        outline: none;
        border: 1px solid #000;
    }

    input[type="submit"] {
        background-color: #444;
        border: 2px solid white;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
        padding: 8px 16px;
    }

    input[type="submit"]:hover {
        background-color: #666;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .delete-form {
        display: inline;
    }

    .delete-form input[type="submit"] {
        background-color: #c00;
        color: #d20f0f;
        padding: 5px 10px;
    }
    .delete{
      color: red;
      border: 2px solid red;
    }
</style>

</head>
<body>
    <h1>ArkaDB Form Example</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Submit">
    </form>

    <h2>Data From Database :</h2>
    <ul>
        <?php foreach ($documents as $documentId => $document): ?>
            <li>
                <?php echo "ID: $documentId, Name: " . $document['name'] . ", Email: " . $document['email']; ?>
                <form method="POST" action="">
                    <input type="hidden" name="delete" value="<?php echo $documentId; ?>">
                    <input type="submit" class="delete" value="Delete">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
