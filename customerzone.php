<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>background: url();</style>
    
<body>
        <!--------------------------Navbar---------------------------------------->
    <nav class="navbar">
        <div class="logo"><h2>AvNET</h2></div>
        <ul class="nav-list">
            <li><a href="index.html">Home</a></li>
            <li id="active"><a href="#">Customer zone</a></li>
            <li><a href="plans.html">Plans</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
    </nav>
    <!--------------------------Main---------------------------------------------->
    <main style='background: #99d5c9;'>
        <!---------------------------login----------------------------------------------->
        <div class="loginbox">
            <img src="images/login.png" alt="login">
            <h1>Login</h1>

                <form method="post" action="userarea.php">
                
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Username" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Login">
                </form>
        </div>
    </main>
    <!---------------------------PHP------------------------------------------------->
    
    
    <!---------------------------Footer---------------------------------------------->
    <footer>
        <p>AvNET Pvt Ltd &copy; <script>document.write(new Date().getFullYear());</script></p>
    </footer>
</body>
</html>
