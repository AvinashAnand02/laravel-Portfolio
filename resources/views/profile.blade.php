<!DOCTYPE html>
<html>
<head>
    <style>
        .welcome-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .welcome-message {
            font-size: 90px;
            font-weight: bold;
            text-align: center;
            color: #336699;
            margin-bottom: 20px;
        }

        .user-name {
            font-size: 90px;
            color: #FF9933;
        }

        .logout-button {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-message">
            <p>Welcome, <span class="user-name">{{ $Name }}</span>!</p>
        </div>
        <div class="logout-button">
            <a href="/logout">
                <button style="background-color: #FF9933; color: white; padding: 10px 20px;">Logout</button>
            </a>
        </div>
    </div>
</body>
</html>
