<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Animated Auth</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(135deg, #764ba2, #667eea);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }
    .login-container {
      animation: fadeIn 1s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="bg-white rounded-2xl shadow-2xl p-8 w-[400px] login-container">
    <h2 class="text-2xl font-bold text-center mb-4 text-purple-700">Welcome Back</h2>

    @if(session('success'))
      <div class="bg-green-100 text-green-700 p-2 rounded mb-3 text-sm">{{ session('success') }}</div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
      @csrf
      <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" required value="{{ old('email') }}">
      @error('email')
        <div class="text-red-500 text-sm">{{ $message }}</div>
      @enderror

      <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded" required>
      @error('password')
        <div class="text-red-500 text-sm">{{ $message }}</div>
      @enderror

      <button class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition-all duration-300">
        Login
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-4">
      Don’t have an account? <a href="/register" class="text-purple-700 font-semibold hover:underline">Register</a>
    </p>
  </div>

</body>
</html>
