<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Link to External CSS -->

</head>
<body class="bg-gray-100 font-urbanist">
  <div class="max-w-md mx-auto my-20 p-8 bg-white shadow-lg rounded-lg">
    <div class="text-center mb-6">
      <h1 class="text-4xl font-bebas">Registration</h1>
      <p class="mt-2 text-sm text-gray-600">Fill out the form to create an account</p>
    </div>
    <div class="registration-form">
      <form id="registrationForm" action="{{ route('register') }}" method="POST">
        @csrf
        <!-- Form Fields -->
        <div class="form-group mb-4">
          <label for="firstName" class="block text-sm font-medium">First Name</label>
          <input type="text" id="firstName" name="firstName" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="middleName" class="block text-sm font-medium">Middle Name (optional)</label>
          <input type="text" id="middleName" name="middleName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="lastName" class="block text-sm font-medium">Last Name</label>
          <input type="text" id="lastName" name="lastName" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="extensionName" class="block text-sm font-medium">Extension Name (optional)</label>
          <input type="text" id="extensionName" name="extensionName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="sex" class="block text-sm font-medium">Sex</label>
          <select id="sex" name="sex" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select Sex</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label for="birthdate" class="block text-sm font-medium">Birth Date</label>
          <input type="date" id="birthdate" name="birthdate" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="street" class="block text-sm font-medium">Street/Block or Lot Number, Building Number</label>
          <input type="text" id="street" name="street" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="region" class="block text-sm font-medium">Region</label>
          <select id="region" name="region" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select Region</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label for="province" class="block text-sm font-medium">Province</label>
          <select id="province" name="province" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select Province</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label for="city" class="block text-sm font-medium">City/Municipality</label>
          <select id="city" name="city" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select City/Municipality</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label for="barangay" class="block text-sm font-medium">Barangay</label>
          <select id="barangay" name="barangay" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select Barangay</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label for="username" class="block text-sm font-medium">Username</label>
          <input type="text" id="username" name="username" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="password" class="block text-sm font-medium">Password</label>
          <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="form-group mb-4">
          <label for="confirmPassword" class="block text-sm font-medium">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="register-button bg-indigo-500 text-white px-4 py-2 rounded-md text-center cursor-pointer hover:bg-indigo-600">
          <button type="submit">Register</button>
        </div>
        <div class="exist-button mt-4">
          <span>Already have an account? <a href="{{ route('login') }}" class="text-indigo-500 hover:underline">Login here</a></span>
        </div>
        <p class="error-message text-red-500 mt-4" id="errorMessage"></p>
      </form>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
