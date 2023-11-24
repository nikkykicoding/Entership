<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 0 auto;
        }

        h1 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 4px;
        }

        button {
            background-color: #0056b3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003a73;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Prime Number Checker</h1>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="text" id="number" name="number" required>
            <button type="submit">Check</button>
        </form>
        <?php
        if (isset($_POST['number'])) {
            $number = intval($_POST['number']);
            $is_prime = is_prime($number);
            if ($is_prime) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        }

        function is_prime($num) {
            if ($num <= 1) return false;
            if ($num <= 3) return true;

            if ($num % 2 == 0 || $num % 3 == 0) return false;

            for ($i = 5; $i * $i <= $num; $i = $i + 6) {
                if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
            }

            return true;
        }
        ?>
    </div>
</body>
</html>
