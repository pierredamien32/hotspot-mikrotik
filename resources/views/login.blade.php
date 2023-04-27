<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
</head>
<body class="bg-[#C5D1D7] flex flex-col items-center justify-center h-screen">
    <div>
      <div class="flex flex-col justify-center items-center gap-4">
        <img src="{{asset('images/logo-anyx 1.png')}}" alt="" class="max-sm:w-44 w-56">
        <h1 class="text-center max-sm:text-3xl text-4xl font-sans">Login</h1>
      </div>
      <form action="" method="post" class="flex flex-col justify-center items-center gap-5 mt-10">
        <div class="flex items-center relative right-2">
          <img src="{{asset('images/username.png')}}" alt="" class="relative left-8 w-5">
          <input type="text" placeholder="Username" class="bg-white rounded-15 py-3 px-12 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 ease-in-out transition-colors duration-500">
        </div>
        <div class="flex items-center relative right-2 ">
          <img src="{{asset('images/password.png')}}" alt="" class="relative left-8 w-5">
          <input type="password" placeholder="Password" class="bg-white rounded-15 py-3 px-12 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 ease-in-out transition-colors duration-500">
        </div>
        <div class="flex items-center justify-center relative left-1">
          <button type="submit" class="bg-[#0047AB] rounded-15 py-3 px-[114px] text-white w-full duration-300 hover:bg-blue-600">Connect</button>
        </div>
      </form>
    </div>
    <!-- debut de mon footer -->
  <p class="text-gray-500 mt-10">Powered by AnyxTech</p>
  <!-- fin de mon footer -->
</body>
</html>