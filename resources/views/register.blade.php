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
            <h1 class="font-montserrat font-bold text-4xl">Create your account</h1>
            <div class="py-5">
                <form action="/register" method="POST">
                    @csrf
                    <label for="first_name" class="text-gray-500 font-montserrat text-sm">First name</label><br>
                    <input type="text" name="first_name"
                        class="py-1 border-2 border-[#9A8AFF] font-montserrat px-3 rounded-sm w-full focus:outline-none focus:border-purple-400" />
                    <label for="last_name" class="text-gray-500 font-montserrat text-sm">Last name</label><br>
                    <input type="text" name="last_name"
                        class="py-1 border-2 border-[#9A8AFF] font-montserrat px-3 rounded-sm w-full focus:outline-none focus:border-purple-400" />
                    <label for="email" class="text-gray-500 font-montserrat text-sm">Email</label><br>
                    <input type="text" name="email"
                        class="py-1 border-2 border-[#9A8AFF] font-montserrat px-3 rounded-sm w-full focus:outline-none focus:border-purple-400" />
                        @error('email')
                            <p class="font-montserrat text-red-500">Please enter a valid email</p>
                        @enderror
                    <label for="password" class="text-gray-500 font-montserrat text-sm">Password</label><br>
                    <input type="password" name="password"
                        class="py-1 border-2 border-[#9A8AFF] font-montserrat px-3 rounded-sm w-full focus:outline-none focus:border-purple-400" />
                        @error('password')
                            <p class="font-montserrat text-red-500">Please enter a valid password</p>
                        @enderror
                    <input type="submit" value="Sign up"
                        class="font-montserrat px-20 py-2 w-full mt-5 text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]" />
                </form>
                <div class="mt-10">
                    <p class="font-montserrat text-gray-500 mt-12 inline">Already have an account?</p>
                    <a href="/login" class="text-[#9A8AFF] font-montserrat font-semibold inline hover:cursor-pointer">Log in now</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
