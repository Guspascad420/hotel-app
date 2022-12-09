<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @include('partials.navbar')
    <div class="grid grid-cols-2 gap-36 mb-10">
        <div>
            <div class="m-8 p-5 w-full rounded-lg shadow-lg">
                @auth
                    <h1 class="font-montserrat font-bold">Logged In as
                        {{ auth()->user()->first_name + ' ' + auth()->user()->last_name }}</h1>
                    <h1>{{ auth()->user()->first_name + ' ' + auth()->user()->last_name }}</h1>
                @else
                    <h1 class="font-montserrat font-bold">Logged In as Guest</h1>
                    <h1>Guest</h1>
                @endauth
            </div>
    
            <h1 class="font-montserrat font-bold px-8">Your Information</h1>
            <div class="mx-8 mt-3 p-5 w-full rounded-lg shadow-lg">
                <p class="font-montserrat font-bold">Contact's name</p>
                <input type="text" name="contactsName" class="px-3 rounded-sm border-2 border-gray-300">
                <p class="font-montserrat font-bold mt-5">Contact's Email Address</p>
                <input type="text" name="contactsEmail" class="px-3 rounded-sm border-2 border-gray-300">
                <p class="font-montserrat font-bold mt-5">Contact's Phone Number</p>
                <input type="text" name="contactsPhone" class="px-3 rounded-sm border-2 border-gray-300">
            </div>
            <h1 class="font-montserrat font-bold px-8 mt-8">Price details</h1>
            <div class="mx-8 mb-6 p-5 w-full rounded-lg shadow-lg">
                <div class="flex justify-between">
                    <p class="font-montserrat font-bold">Total</p>
                    <p class="font-montserrat font-bold">$75</p>
                </div>
                <div class="flex justify-between mt-3">
                    <p class="font-montserrat">1x Silver Room</p>
                    <p class="font-montserrat">$70</p>
                </div>
                <div class="flex justify-between mt-3">
                    <p class="font-montserrat">Taxes and Fees</p>
                    <p class="font-montserrat">$5</p>
                </div>
            </div>
    
            <a href="/login"
                class="font-montserrat ml-8 px-5 py-2 text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]">Continue to
                payment</a>
        </div>
        <div class="mt-4">
            <div class="rounded-lg py-5 w-3/4 shadow-lg">
                <h1 class="font-montserrat pl-5 font-bold">Silver Room</h1>
                <div class="flex justify-between">
                    <p class="pl-5 font-montserrat">Check In</p>
                    <p class="font-montserrat pr-5">Wed, 4 Jan 2023, From 14:00</p>
                </div>
                <div class="flex justify-between">
                    <p class="pl-5 font-montserrat">Check Out</p>
                    <p class="font-montserrat pr-5">Thu, 5 Jan 2023, Before 16:00</p>
                </div>
                <div class="flex justify-between">
                    <p class="pl-5 font-montserrat">Guest per room</p>
                    <p class="font-montserrat pr-5">2 Guest</p>
                </div>
                <div class="flex justify-between">
                    <p class="pl-5 font-montserrat">Bed type</p>
                    <p class="font-montserrat pr-5">1 double bed or 2 single bed</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
