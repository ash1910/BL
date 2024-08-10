<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <style>
        /* Basic Reset */
        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .container {
            display: flex;
            flex: 1;
        }

        .sidebar {
            background-color: #f4f4f4;
            width: 250px;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        .sidebar nav ul {
            list-style: none;
        }

        .sidebar nav ul li {
            margin-bottom: 1rem;
        }

        .sidebar nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .sidebar nav ul li a.logout {
            color: #e74c3c;
        }

        .main-content {
            flex: 1;
            padding: 1rem;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <div class="container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    <li><span><button class="logout-button"><i class="bi bi-box-arrow-right"></i> Logout</button></span></li>
                    @csrf
                  @method('POST')
                </form>
                </ul>
            </nav>
        </aside>
        @session('success')
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endsession
        <main class="main-content">
            <h2>Welcome to the Dashboard</h2>
            <p>This is where your main content goes.</p>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 TechnoMole Creations Ltd. All rights reserved.</p>
    </footer>
</body>
</html>
