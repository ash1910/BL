<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Of Lading | User Profile</title>
    <link rel="stylesheet" href="account-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
            position: relative; /* Needed for absolute positioning of the back button */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .account-box {
            width: 500px;
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
            <h2>User Profile</h2>
            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endsession   
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </div>
            @endif
            <!-- User Information Form -->
            <form action="{{ route('user-profile.update', ['id' => $user->id]) }}" method="POST" class="info-form">
            @csrf
            @method('PUT') 
                <h3>Profile Information</h3>
                <div class="textbox">
                <label>Full Name:</label><input type="text" name="name" value="{{ old('name',$user->name) }}" placeholder="Full Name" required>
                </div>
                <div class="textbox">
                <label>Email:</label><input type="email" name="email" value="{{ old('email',$user->email) }}" placeholder="Email">
                </div>
                <!-- Status Selection -->
                <div class="status-group">
                <label>Status:</label>
                <div>
                    <label>
                        <input type="radio" name="status" value="1" {{ old('status', $user->status) == '1' ? 'checked' : '' }} required> Active
                    </label>
                    <label>
                        <input type="radio" name="status" value="0" {{ old('status', $user->status) == '0' ? 'checked' : '' }} required> Inactive
                    </label>
                </div>
                </div><br>
                <input type="submit" class="btn" value="Update Information">
            </form>

            <!-- Change Password Form -->
            <form action="{{ route('user-profile.update.password', ['id' => $user->id]) }}" method="POST" class="password-form">
                @csrf
                @method('PUT')
                <h3>Change Password</h3>
                <div class="textbox">
                    <input type="password" name="password" placeholder="New Password" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                </div>
                <input type="submit" class="btn" value="Change Password">
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            <button class="logout-btn">Logout</a>
            </form>
        </div>
    </div>
</body>
</html>
