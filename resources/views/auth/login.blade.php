<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Salex</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 50%, #0f0f0f 100%);
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-logo {
            height: 50px;
            margin-bottom: 20px;
        }
        
        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 8px;
        }
        
        .login-subtitle {
            color: #9ca3af;
            font-size: 16px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            color: #ffffff;
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: #ffffff;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #2f80ed;
            box-shadow: 0 0 0 3px rgba(47, 128, 237, 0.1);
        }
        
        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #2f80ed 0%, #9333ea 100%);
            border: none;
            border-radius: 12px;
            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(47, 128, 237, 0.3);
        }
        
        .login-links {
            text-align: center;
        }
        
        .login-links a {
            color: #2f80ed;
            text-decoration: none;
            font-size: 14px;
        }
        
        .login-links a:hover {
            text-decoration: underline;
        }
        
        .divider {
            text-align: center;
            margin: 20px 0;
            color: #9ca3af;
            position: relative;
        }
        
        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }
        
        .divider span {
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 50%, #0f0f0f 100%);
            padding: 0 15px;
            position: relative;
            z-index: 2;
        }
        
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #ffffff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <a href="/" class="back-link">
        <i class="fas fa-arrow-left"></i>
        Back to Home
    </a>
    
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <img src="{{ asset('images/logo1.png') }}" alt="Salex Logo" class="login-logo">
                <h1 class="login-title">Welcome Back</h1>
                <p class="login-subtitle">Sign in to your Salex account</p>
            </div>
            
            <form>
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" class="form-input" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-input" placeholder="Enter your password" required>
                </div>
                
                <button type="submit" class="login-btn">Sign In</button>
                
                <div class="login-links">
                    <a href="#">Forgot your password?</a>
                </div>
                
                <div class="divider">
                    <span>or</span>
                </div>
                
                <div class="login-links">
                    <p style="color: #9ca3af; margin-bottom: 8px;">Don't have an account?</p>
                    <a href="#" style="font-weight: 600;">Create a free account</a>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
</body>
</html>