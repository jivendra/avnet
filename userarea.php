<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    .userdata{
        padding-left: 100px;
    }
    table{
    background-color: #f3f3f3;
    text-align: center;
    display: block;
    width: 350px;
    border-collapse: collapse;
    margin: auto;
    top: px;
    
    position: absolute;
    left: 38%;
    top: 25%;
    font-size: 0.9em;
    text-transform: uppercase;
}
table h1{
    font-size: 40px;
    padding-top: 50px;
    
}
table td{
    padding: 12px 15px;
}

table table{
    
    padding: 25px;
    width: 100%;
    text-align: center;
    
}
thead{
    font-weight: bold;
    font-size: 18px;
    
    
}
thead td{
    background-color: #6c969d;
}
table tbody{
    font-size: 1.2em;
}
</style>
<body>
    <!--------------------------Navbar---------------------------------------->
    <nav class="navbar">
        <div class="logo"><h2>AvNET</h2></div>
        <ul class="nav-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="customerzone.php">Customer zone</a></li>
            <li><a href="plans.html">Plans</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
    </nav>
    <!--------------------------Main---------------------------------------------->
    <main>
        <div class="userdata">
        <table>
            <thead>
                <tr>
                <td>UPLOAD</td>
                <td>DOWNLOAD</td>
                <td>PLAN</td>
                </tr>
            </thead>
            <tbody>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "avnet");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
            if(isset($_POST['submit']))
            {
                $uname = $_POST['username'];
                $pass = $_POST['password'];
            }
            $sql = "SELECT upload, download, plan FROM userdata where id='$uname' and pass='$pass'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "";
                  echo "<tr><td>" . $row["upload"]. "MB</td><td>" . $row["download"]. "MB</td><td>" . $row["plan"]. "</td></tbody></table><br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
        ?>
        </div>

    </main>
    <!---------------------------Footer---------------------------------------------->
    <footer>
        <p>AvNET Pvt Ltd &copy; <script>var year = new Date();document.write(year.getFullYear());</script></p>
    </footer>
</body>