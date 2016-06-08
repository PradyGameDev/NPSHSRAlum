<html>
    <head>
        <link rel="stylesheet" href="CSS/style.css"/>
        <title>
        </title>
    </head>
    <body>
    <center>
        <div id="heading">
        </div>
        </center>
        <div id="navbar">
            <ul>
                <li>
                    <a href="/home.php">Home</a>
                </li>
                <li>
                    <a href="/home.php">Search</a>
                </li>
                <li>
                    <a href="/home.php">About</a>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="signup">
                <form action="home.php">
                    Name: <input name ="name" type="text"/>      
                    Admission Number: <input name = "admission" type="text"/>
                    Password: <input name = "password" type="text">
                    Confirm password<input name = "confirm" type="text"/>
                    Sign up<input name = "submit" type="submit"/>
                </form>
            </div>
            <div class="signin">
                <form action="home.php">
                    Email Address: <input name ="email" type="text"/>
                    Password: <input name ="password" type="text"/>
                    Sign in <input name ="submit" type="submit"/>
                </form>
            </div>
        </div>
    </body>
</html>