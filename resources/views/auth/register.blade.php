<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | Animated Auth</title>
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

    .register-container {
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="bg-white rounded-2xl shadow-2xl p-8 w-[400px] register-container">
    <h2 class="text-2xl font-bold text-center mb-4 text-purple-700">Create Account</h2>

    @if(session('success'))
      <div class="bg-green-100 text-green-700 p-2 rounded mb-3 text-sm">{{ session('success') }}</div>
    @endif

    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf

      <input type="text" name="name" placeholder="Full Name" class="w-full p-2 border rounded" required>
      @error('name')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror

      <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" required>
      @error('email')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror

      <input type="text" name="phone" placeholder="Phone (11 digits)" class="w-full p-2 border rounded">
      @error('phone')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror

      <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded" required>
      @error('password')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror

      <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-2 border rounded" required>

      <label class="block text-sm text-gray-600">Profile Image</label>
      <input type="file" name="profile_image" class="w-full border rounded p-2">

      <button class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition-all duration-300">
        Register
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-4">
      Already have an account?
      <a href="{{ route('login.form') }}" class="text-purple-700 font-semibold hover:underline">Login</a>
    </p>
  </div>

</body>
</html>
