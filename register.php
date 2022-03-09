<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Spoofify</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>

            <p>
            <label for="loginUsername">Username</label>    
            <input type="text" name="loginUsername" placeholder="username" id="loginUsername" required></p>
            <p><input type="password" name="loginPassword" placeholder="password" id="loginPassword" required></p>
            <button name="loginButton" type="submit" >Login</button>
        </form>

        <form action="register.php" id="loginForm" method="POST">
            <h2>Create your free account</h2>

            <p>
                <label for="registerUsername">Username</label>    
                <input type="text" name="registerUsername" placeholder="username" id="registerUsername" required>
            </p>

            <p>
                <label for="firstName">First Name</label>    
                <input type="text" name="firstName" placeholder="John" id="firstName" required>
            </p>

            <p>
                <label for="lastName">Last Name</label>    
                <input type="text" name="lastName" placeholder="Doe" id="lastName" required>
            </p>

            <p>
                <label for="loginEmail">Email</label>    
                <input type="text" name="loginEmail" placeholder="test@gmail.com" id="loginEmail" required>
            </p>
            
            <p>
                <label for="registerPassword">Password</label>    
                <input type="password" name="registerPassword" placeholder="password" id="registerPassword" required>
            </p>
            <p>
                <label for="confirmPassword">Confirm Password</label>    
                <input type="password" name="confirmPassword" placeholder="password" id="confirmPassword" required>
            </p>
            
            <button name="registerButton" type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>