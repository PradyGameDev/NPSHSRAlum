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
            <span class="cyan-heading"><h2>Search</h2></span>
            <div class="signup">
                <form action="home.php">
                    Name: <input name ="name" type="text"/>      
                    Admission Number<input name = "admission" type="text"/>
                    Email Address<input name ="email" type="text"/>
                    <button name = "submit" type="submit">Search</button>
                </form>
            </div>
        </div>
    </body>
</html>