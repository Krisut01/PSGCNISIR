<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-100 font-urbanist">
  <div class="max-w-md mx-auto my-20 p-8 bg-white shadow-lg rounded-lg">
    <div class="text-center mb-6">
      <h1 class="text-4xl font-bebas">Login</h1>
      <p class="mt-2 text-sm text-gray-600">Please log in to your account</p>
    </div>
    <div class="login-form">
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group mb-4">
          <label for="username" class="block text-sm font-medium">Username</label>
          <input type="text" id="username" name="username" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="password" class="block text-sm font-medium">Password</label>
          <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="login-button bg-indigo-500 text-white px-4 py-2 rounded-md text-center cursor-pointer hover:bg-indigo-600">
          <button type="submit">Login</button>
        </div>
        @if (session('error'))
          <p class="error-message text-red-500 mt-4">{{ session('error') }}</p>
        @endif
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
