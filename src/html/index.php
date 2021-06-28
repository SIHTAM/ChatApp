<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
    <link rel="script" href="../js/signUp.js">
    <meta charset="UTF-8">
    <title>ChatApp</title>
</head>
<body>
<div class="container">
    <form action="main.html" name="myForm">
        <div class="row">
            <h2 style="text-align:center">Login with Social Media or Manually</h2>
            <div class="vl">
                <span class="vl-innertext">or</span>
            </div>

            <div class="col">
                <a href="#" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="#" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a>
                <a href="#" class="google btn">
                    <i class="fa fa-google fa-fw"></i> Login with Google+
                </a>
            </div>
            <?php
// definition of variables
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}
// For model purposes
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
            <div class="col">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="hide-md-lg">
                    <p>Or sign in manually:</p>
                </div>
                <label>
                    <input type="text" name="username" placeholder="Username" required>
                </label>
                <label>
                    <input type="password" name="password" placeholder="Password" required>
                </label>
                <a href="main.html">
                    <input type="submit" name="submit" value="Login">
                </a>
                </form>
            </div>
        </div>
    </form>
</div>

<div class="bottom-container">
    <div class="row">
        <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
    <div class="row">
        <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&#10005;</span>
            <form class="modal-content" name="myForm2" action="/" onsubmit="return validateForm()" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label><b>Email</b></label>
                    <label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    </label>
                    <label><b>Password</b></label>
                    <label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                    </label>
                    <label><b>Repeat Password</b></label>
                    <label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    </label>
                    <label>
                        <input type="checkbox"  name="remember" style="margin-bottom:15px"> Remember me
                    </label>
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" value="Submit" class="signup">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
    <form action="/" class="form-container">
        <h1>Chat</h1>

        <label for="msg"><b>Message</b></label>
        <textarea placeholder="Type message.." name="msg" required></textarea>

        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    function validateForm() {
        let x = document.forms["myForm2"]["email"].value;
        let y = document.forms["myForm2"]["psw"].value;
        let z = document.forms["myForm2"]["psw-repeat"].value;
        if (x === "") {
            alert("Email must be filled out");
            return false;
        } else if (y === "") {
            alert("Password must be filled out");
            return false;
        } else if (z === "") {
            alert("Password must be repeated");
            return false;
        } else {
            alert("Fields must be filled out");
            return false;
        }

    }
</script>

</body>
</html>
