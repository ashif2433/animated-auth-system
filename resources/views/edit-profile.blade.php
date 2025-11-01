<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-xl rounded-2xl p-8 w-[400px]">
    <h2 class="text-2xl font-bold text-purple-700 mb-4 text-center">Edit Profile</h2>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf

      <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded p-2" required>
      @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
      @enderror

      <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Phone (11 digits)" class="w-full border rounded p-2">
      @error('phone')
        <div class="text-red-500 text-sm">{{ $message }}</div>
      @enderror

      <label class="block text-sm text-gray-600">Profile Image</label>
      @if($user->profile_image)
        <img src="{{ asset('uploads/'.$user->profile_image) }}" class="w-20 h-20 rounded-full object-cover mb-2 mx-auto">
      @endif
      <input type="file" name="profile_image" class="w-full border rounded p-2">

      <button class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition-all">
        Save Changes
      </button>
    </form>

    <a href="{{ route('dashboard') }}" class="block text-center text-purple-600 mt-4 hover:underline">← Back to Dashboard</a>
  </div>

</body>
</html>
