<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  body {
    animation: fadeIn 0.8s ease-in-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  button, a {
  transition: all 0.3s ease-in-out;
  }

  a:hover, button:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }
  div.bg-white {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  div.bg-white:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  }
  img {
    transition: transform 0.3s ease;
  }

  img:hover {
    transform: scale(1.1) rotate(3deg);
  }

</style>

<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
  @if(session('success'))
    <div id="alert" class="fixed top-5 right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transition-all opacity-0 translate-y-[-20px]">
      {{ session('success') }}
    </div>
  @endif
  <div class="bg-white p-6 rounded shadow-lg text-center w-[400px]">
    <h2 class="text-xl font-bold text-purple-700 mb-3">Welcome, {{ $user->name }}!</h2>
    <p class="text-gray-600 mb-2">Email: {{ $user->email }}</p>
    <p class="text-gray-600 mb-4">Phone: {{ $user->phone ?? 'Not set' }}</p>

    @if($user->profile_image)
      <img src="{{ asset('uploads/'.$user->profile_image) }}" alt="Profile" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover">
    @endif

    <a href="{{ route('profile.edit') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2">
      Edit Profile
    </a>

    <a href="{{ route('logout') }}" class="inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
      Logout
    </a>
  </div>
  <script>
  const alertBox = document.getElementById('alert');
  if (alertBox) {
    setTimeout(() => {
      alertBox.style.opacity = 1;
      alertBox.style.transform = 'translateY(0)';
    }, 100);

    setTimeout(() => {
      alertBox.style.opacity = 0;
      alertBox.style.transform = 'translateY(-20px)';
    }, 3000);
  }
</script>

</body>
</html>
