<html>
    <head>
        <link rel="stylesheet" href="CSS/style.css"/>
        <title>
        </title>
    </head>
    <body>
        <center>
            <div id="logo"></div>
            <div id="heading"></div>
        </center>
        <div id="navbar">
            <ul>
                <li>
                    <a href="/NPSHSRAlum/login.php">Home</a>
                </li>
                <li>
                    <a href="/NPSHSRAlum/search.php">Search</a>
                </li>
                <li>
                    <a href="/NPSHSRAlum/about.php">About</a>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="signup">
                <form action="home.php">
                    Name: <input name ="name" type="text"/>      
                    Admission Number<input name = "admission" type="text"/>
                    Email Address<input name ="email" type="text"/>
                    Password<input name = "password" type="text">
                    Confirm password<input name = "confirm" type="text"/>
                    <button name = "submit" type="submit">Sign up</button>
                </form>
            </div>
            <div class="signin">
                <form action="home.php">
                    Email Address<input name ="email" type="text"/>
                    Password<input name ="password" type="text"/>
                    <button name ="submit" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </body>
</html>