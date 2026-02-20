<?php
// Simple PHP logic
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $message = "Hello, $name! This message came from PHP 👋";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP + HTML + CSS + JS Demo</title>

    <!-- CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }

        button {
            padding: 8px 12px;
            border: none;
            background: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background: #0056b3;
        }

        .php-message {
            margin-top: 10px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Simple Demo</h2>

    <!-- HTML + PHP -->
    <form method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <button type="submit">Send to PHP</button>
    </form>

    <?php if ($message): ?>
        <div class="php-message">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <button onclick="sayHello()">JavaScript Button</button>
</div>

<!-- JavaScript -->
<script>
    function sayHello() {
        const name = document.getElementById("name").value;
        if (name === "") {
            alert("Please enter your name first!");
        } else {
            alert("Hello " + name + "! This message came from JavaScript 🚀");
        }
    }
</script>

</body>
</html>
