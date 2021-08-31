<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form{
                width: 30%;
                height: 200px;
                border: 1px solid;
                padding: 10px;
                box-shadow: 5px 10px #FBEEC1;
                background-color: #BC986A;
                margin-left: 2.5%;
            }
            h3{
                color: WHITE;
            }
            h1{
                color: black;
                margin-left: 2.5%;
            }
            h2{
                color: black;
               margin-left: 2.5%;
            }
            input{
                width: 50%;
                height: 15px;
            }
            button{
                border: none;
                background-color: #FBEEC1;
                text-align: center;
                text-decoration: none;
                font-size: 15px; 
                color: black;
                cursor: pointer;
            }
            ul{
                text-align: inline;
                list-style-type: none;
                width: 200px;
                border:green;
            }
            li{
                font-size: 25px;
            }
            a{
                color: black;
                text-decoration: none;
            }
            a:active{
                color: blue;
                background-color: grey;
            }
            a:hover{
                cursor: pointor;
                color: white;
            }
            body{
                background-color: #659DBD;
            }
            li a {
                display: block;
            }
            li a:hover{
                background-color: grey;
            }
            input{
                border-bottom: 2px solid blue;
                border: none;
                box-sizing: border-box;
                background-color: #FBEEC1;
            }
            header{
                background-color: #FBEEC1;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }
            #ipsom{
                background-color: black;
                width: 30%;
                height: 200px;
                display: flex;
                margin-top: 20px;
                margin-left: 35%;
                border: 1px solid;
                padding: 10px;
                box-shadow: 5px 10px #FBEEC1;
                background-color: #BC986A;
            }
            p{
                color: white;
            }
            
            #footer{
                background-color: #FBEEC1;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }
            /*  #contact{
                background-color: black;
                width: 30%;
                height: 200px;
                display: flex;
                justify-content: flex-end;
                border: 1px solid;
                padding: 10px;
                box-shadow: 5px 10px #FBEEC1;
                background-color: #BC986A;
            } */
    </style>
</head>
<!-- alternative link -> http://localhost/PhpProject1/index.php -->
<!-- apache netbeans/localhost:80 -->
<!-- please refer to 'web capture' within images folder -->
<body>
    <?php
       // put your code here
       $lhost = 'localhost';
       $user = 'root';
       $pass = '';
       $dbase = 'ecommerce_db';
       
       // create connection
       
       $conn =  mysqli_connect($lhost, $user, $pass, $dbase);
       
       // check connection
       
       if ($conn->connect_error){
           die ("Connection failed: " . $conn->connect_error);
       }
       echo '<script> alert("Connected successfully") </script>';
       mysqli_close($conn);
    ?>
        <header>
            <h2 class="head">lorem ipsum.</h2>
            <h1 class="head">Ecommerce Web.</h1>
            <nav>
                <ul>
                    <li><a href="#">Home |</a></li>
                    <li><a href="#">Blog |</a></li>
                    <li><a href="#">Support |</a></li>
                    <li><a href="#">Contact |</a></li>
                </ul>
            </nav>
        </header>
        <div id="form">
            <h3>Customer Registration</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="fname" placeholder="First Name"><br>
                <input type="text" name="lname" placeholder="Last Name"><br>
                <input type="email" name="email" placeholder="Email"><br>
                <input type="text" name="uname" placeholder="Username"><br>
                <input type="password" name="pword" placeholder="Password"><br><br>
                <button type="submit" onclick="submit()">Submit</button>
            </form>
        </div>
        <!-- <div id="details">
            <main>
                <h3>Contact</h3>
            </main>
        </div> -->
        <div id="ipsom">
            <aside>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s
                </p>
            </aside>
        </div>
        <div id="footer">
            <footer>
                <nav>
                    <ul>
                        <li><a href="#">Home |</a></li>
                        <li><a href="#">Blog |</a></li>
                        <li><a href="#">Support |</a></li>
                        johndoe@gmail.com |
                    </ul>
                </nav>
            </footer>
        </div>
</body>
</html>