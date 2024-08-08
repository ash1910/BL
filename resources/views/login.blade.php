<!DOCTYPE html>
<html lang="en">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.form-box {
    width: 360px;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    position: relative;
}

.form-content {
    display: flex;
    flex-direction: column;
}

.login-form,
.signup-form {
    display: none;
}

.form-active {
    display: block;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.textbox {
    margin-bottom: 15px;
}

.textbox input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

.switch-form {
    margin-top: 10px;
}

.switch-form a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.switch-form a:hover {
    text-decoration: underline;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="form-content">
                <!-- Login Form -->
                <div class="login-form form-active">
                    <h2>Login</h2>
                    <form action="{{ route('dashboard') }}" method="POST">
                        @csrf
                        @session('status')
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                        @endsession
                        <div class="textbox">
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        <div class="textbox">
                            <input type="password" name="passoword" placeholder="Password" required>
                        </div>
                        <input type="submit" class="btn" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
