<!DOCTYPE html>
<html>
<head>
    <title>SYSTEM RESOURCES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkbCvNp7Ahd4k_AoYTWNPDEJiJmZo0RijGYw&usqp=CAU'); /* Replace with your image path */
            background-size: cover;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.5); /* Fallback color with opacity */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 500px;
            width: 50%;
            max-height: 500px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Background color with opacity */
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.4) -5px 5px, rgba(0, 0, 0, 0.3) -10px 10px, rgba(0, 0, 0, 0.2) -15px 15px, rgba(0, 0, 0, 0.1) -20px 20px, rgba(0, 0, 0, 0.05) -25px 25px;
        }

        h1 {
            color: #123456;
        }

        .info {
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .info-box {
            padding: 10px;
            margin: 10px;
            border: 2px solid #123456;
            border-radius: 5px;
            /* background-color: #ffffff; */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            cursor: pointer;
        }

        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        
        }

        .cyan-text {
            color: #123456;
        }
        .info-box {
            animation: fadeInUp 1s ease-out both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1 {
            color: #123456;
            position: relative;
            animation: fadeInUp 1s ease-out both, textSlide 2s ease-in-out 1s forwards;
        }

       
    </style>
</head>
<body>

<div class="container">
    <h1>WELCOME  <?php echo trim(shell_exec("hostname"));?></h1>
    <h2>YOUR SYSTEM RESOURCES </h2>
    <div class="info">
        <div class="info-box">
            <p class="cyan-text"><h3>HOSTNAME</h3></p>
            <p><h4><?php echo trim(shell_exec("hostname")); ?></h4></p>
        </div>
        <div class="info-box">
            <p class="cyan-text"><h3>PUBLIC IP</h3></p>
            <p><h4><?php echo trim(shell_exec("curl -s icanhazip.com")); ?></h4></p>
        </div>
    </div> 
</div>
</body>
</html>
