<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex">
        <div id="login-image" class="bg-center bg-cover pl-6 pr-28 pb-11">
            <p class="px-7 py-7 font-semibold font-montserrat text-2xl text-white">Room <br> Park</p>
            <div class="py-32 pl-9 w-9" id="welcome-text">
                <h1 class="text-white text-6xl px-4 text-left font-montserrat font-extrabold">Welcome to The Room Park!
                </h1>
            </div>
        </div>
        <div class="px-24 pt-28">
            <h1 class="font-montserrat font-bold text-4xl">Login</h1>
            <p class="font-montserrat mt-3 text-gray-500">Welcome back! Please login to your account</p>
            <div class="py-5">
                <form action="/login" method="POST">
                    @csrf
                    <label for="email" class="text-gray-500 font-montserrat text-sm">Email</label><br>
                    <input type="text" name="email"
                        class="py-1 border-2 border-[#9A8AFF] font-montserrat px-3 rounded-sm w-full focus:outline-none focus:border-purple-400" />
                    <label for="password" class="text-gray-500 font-montserrat text-sm">Password</label><br>
                    <input type="password" name="password"
                        class="py-1 border-2 border-[#9A8AFF] font-montserrat px-3 rounded-sm w-full focus:outline-none focus:border-purple-400" />
                    <input type="submit" value="Login"
                        class="font-montserrat px-20 py-2 w-full mt-5 text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]" />
                </form>
                <div class="mt-4 flex justify-between">
                    <div>
                        <input type="checkbox" class="accent-[#9A8AFF]" />
                        <p class="font-montserrat text-sm font-bold inline">Remember Me</p>
                    </div>
                    <p class="font-montserrat text-gray-500 text-sm mt-1">Forgot password?</p>
                </div>
                <div class="mt-10">
                    <p class="font-montserrat text-gray-500 mt-12 inline">New user?</p>
                    <a href="/register" class="text-[#9A8AFF] font-montserrat font-semibold inline hover:cursor-pointer">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
