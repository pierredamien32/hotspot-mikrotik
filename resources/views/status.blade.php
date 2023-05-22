<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col justify-center items-center h-screen bg-[#C5D1D7] ">
    <div class="text-gray-800 ">
        <div class="">
            <div class="flex flex-col gap-8 mb-10">
                <h1 class="text-center">Hi, trial user!</h1>
                <h1 class="text-center">Hi, !</h1>  
            </div>             

            <form action="{{url('/login')}}" method=""  class="">
                <div class="flex flex-col gap-2 mt-2">
                    <div class="flex gap-20 max-w-[520px] mx-6">
                        <strong>IP address</strong>
                        <p>ip</p>
                    </div>
                    <hr class="border-gray-500 border max-w-[520px] mx-6">
                </div>
                <div class="flex flex-col gap-2 mt-2 ">
                    <div class="flex gap-[29px] max-w-[520px] mx-6">
                        <strong>Bytes up / down</strong>
                        <p>Bytes</p>
                    </div>
                    <hr class="border-gray-500 border max-w-[520px] mx-6">
                </div>
                <div class="flex flex-col gap-2 mt-2 ">
                    <div class="flex gap-[30px] max-w-[520px] mx-6">
                        <strong>Connected / left</strong>
                        <p>Connected</p>
                    </div>
                    <hr class="border-gray-500 border max-w-[520px] mx-6">
                </div>
                <div class="flex flex-col gap-2 mt-2 ">
                    <div class="flex gap-[74px] max-w-[520px] mx-6">
                        <strong>Connected</strong>
                        <p>uptime</p>
                    </div>
                    <hr class="border-gray-500 border max-w-[520px] mx-6">
                </div>
                <div class="flex flex-col gap-2 mt-2 ">
                    <div class="flex gap-[110px] max-w-[520px] mx-6">
                        <strong>Status</strong>
                        <p>Advertisement required</p>
                    </div>
                    <hr class="border-gray-500 border max-w-[520px] mx-6">
                </div>
                <div class="flex flex-col gap-2 mt-2 ">
                    <div class="flex gap-12 max-w-[520px] mx-6">
                        <strong>Status refresh</strong>
                        <p>refresh</p>
                    </div>
                    <!-- <hr class="border-gray-500 border"> -->
                </div>
                <div class="flex justify-center items-center cursor-pointer mt-4 ">
                    <button type="submit" class="bg-[#0047AB] text-white py-2 px-[152px] max-sm:px-[120px] rounded-lg duration-300 hover:bg-blue-600">Log out</button>
                </div>
                
            </form>
            <!-- @foreach ($response as $item)
                <p>{{ $item['name'] }}</p>
            @endforeach -->

        </div>
       
    </div>
</body>
</html>