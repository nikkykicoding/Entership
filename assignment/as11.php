<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even-Odd Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('https://img.freepik.com/free-photo/passenger-model-airplane-blue-background_94046-2760.jpg?size=626&ext=jpg');
        }

        .container {
            background-color: yellowgreen;
            border-radius: 10px;
            padding: 30px;
            width: 300px;
            margin: 100px auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid red;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: orange;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Even-Odd Number Checker</h1>
        <form method="post">
            <input type="text" name="number" placeholder="Enter a number">
            <button type="submit">Check</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            if (is_numeric($number)) {
                $result = ($number % 2 == 0) ? "Even" : "Odd";
                echo "<p>The number $number is $result.</p>";
            } else {
                echo "<p>Please enter a valid number.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
