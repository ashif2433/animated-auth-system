<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome | Animated Auth System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: radial-gradient(circle at top left, #6d28d9, #4c1d95);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      color: white;
      text-align: center;
      overflow: hidden;
    }

    h1 {
      font-size: 3.5rem;
      font-weight: 800;
      line-height: 1.2;
      background: linear-gradient(90deg, #c084fc, #9333ea, #8b5cf6, #6366f1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: textGlow 3s ease-in-out infinite alternate;
      margin-bottom: 2rem;
    }

    @keyframes textGlow {
      from { text-shadow: 0 0 20px #a78bfa, 0 0 40px #7c3aed; }
      to { text-shadow: 0 0 30px #c4b5fd, 0 0 60px #8b5cf6; }
    }

    .buttons {
      display: flex;
      gap: 1rem;
    }

    .buttons a {
      background: white;
      color: #6d28d9;
      font-weight: 600;
      padding: 0.8rem 2rem;
      border-radius: 0.7rem;
      transition: all 0.4s ease;
      box-shadow: 0 5px 15px rgba(255,255,255,0.2);
    }

    .buttons a:hover {
      background: #ddd6fe;
      transform: scale(1.1);
      box-shadow: 0 8px 25px rgba(255,255,255,0.4);
    }

    p {
      font-size: 1.1rem;
      color: #e9d5ff;
      margin-bottom: 2rem;
      letter-spacing: 1px;
      animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <h4 style="font-weight: 600; font-size: 1.5rem;">Hello Everyone 👋<br>Let’s Start the Journey 🚀</h4>
  

  <div class="buttons" style="margin-top: 30px">
    <a href="{{ route('register.form') }}">Register</a>
    <a href="{{ route('login.form') }}">Login</a>
  </div>

</body>
</html>
