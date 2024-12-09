<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        .datetime {
            font-size: 1.2em;
            color: #555;
        }
    </style>
</head>
<body>
    <?php
        // Set the timezone
        date_default_timezone_set('America/New_York');
        
        // Greeting message based on the time of day
        $hour = date('H');
        if ($hour < 12) {
            $greeting = "Good morning!";
        } elseif ($hour < 18) {
            $greeting = "Good afternoon!";
        } else {
            $greeting = "Good evening!";
        }
    ?>
    
    <h1>Welcome to My PHP Page</h1>
    <p><?php echo $greeting; ?></p>
    <p class="datetime">Current date and time: <?php echo date('l, F j, Y, g:i A'); ?></p>
</body>
</html>
