<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="account-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            position: relative; /* Needed for absolute positioning of the back button */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .account-box {
            width: 400px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .info-form, .password-form {
            margin-bottom: 20px;
            text-align: left;
        }

        h3 {
            margin-bottom: 15px;
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

        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 20px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .back-btn:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="/dashboard" class="back-btn"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="container">
        <div class="account-box">
            <h2>User Account</h2>
            <!-- User Information Form -->
            <form action="#" class="info-form">
                <h3>Account Information</h3>
                <div class="textbox">
                    <input type="text" placeholder="First Name" required>
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Last Name" required>
                </div>
                <div class="textbox">
                    <input type="email" placeholder="Email" required>
                </div>
                <input type="submit" class="btn" value="Update Information">
            </form>

            <!-- Change Password Form -->
            <form action="#" class="password-form">
                <h3>Change Password</h3>
                <div class="textbox">
                    <input type="password" placeholder="Current Password" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="New Password" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Confirm New Password" required>
                </div>
                <input type="submit" class="btn" value="Change Password">
            </form>

            <a href="logout.html" class="logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>
