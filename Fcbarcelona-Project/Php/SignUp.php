<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC BARCELONA</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" type="image/x-icon" href="images/Giannis-Zographos-Spanish-Football-Club-FC-Barcelona.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/index.js"></script>
</head>

<body>

    <div class="content">
        <div class="left">
            <a href="Barça TV+.php"><img src="images/logo.png"></a>
            <h1> Subscribe to Culers </h1>
            <div>
                <h3>create your subscription:</h3>
                <form action="SignUpCheack.php" method="post">

                    <input name="name" type="text" placeholder="Name " required><br><br>
                    <input name="email" class="email" type="email" placeholder="Email  " required><br><br>
                    <input name="password" type="password" placeholder="Password  " required><br><br>
                    <input name="Country" type="text" placeholder="Country" required>
                        <br>
                        <div class="alreadyhaveanaccount">  <span >already have an account,</span>
                        <a href="Login.php">Sign in</a>
                        </div>
                      

                   
                    <div class="separator">
                        <span>
                            Or
                        </span>
                    </div>
                    <div>
                        <button class="S"> Facebook </button>
                        <button class="S"> Google </button>

                    </div>


                    <button class="submet" type="submit"> LET'S GO </button>
                </form>



            </div>
        </div>
        <div class="photo"></div>
    </div>



</body>

</html>