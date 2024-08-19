<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <title>Add User Page</title>
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

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
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

        .status-group {
            margin-bottom: 15px;
        }

        .status-group label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <div class="form-content">               
            <!-- Signup Form -->
            <h2>Add User</h2>
            <form action="{{ route('add-user') }}" method="POST">
                @csrf

                @if (session('status'))
                    <div class="alert alert-success" role="alert"> 
                        {{ session('status') }}
                    </div>
                @endif

                <div class="textbox">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="textbox">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <!-- Status Selection -->
                <div class="status-group">
                    <label>Status:</label>
                    <div>
                        <label>
                            <input type="radio" name="status" value="1" required> Active
                        </label>
                        <label>
                            <input type="radio" name="status" value="0" required> Inactive
                        </label>
                    </div>
                </div>

                <input type="submit" class="btn" value="Add User">
            </form>
        </div>
    </div>
</body>
</html>
