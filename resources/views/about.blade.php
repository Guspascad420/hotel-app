@extends('layouts.home')

@section('container')
    <section class="pb-12">
        <div class="bg-white w-3/4 px-10 pt-2 pb-4 m-auto bottom-10 shadow-lg rounded-md relative">
            <form action="/about/rooms" method="GET">
                <div class="flex justify-center">
                    <div class="ml-7">
                        <p class="font-montserrat font-medium text-lg">Check-In</p>
                        <input type="text" name="datefilter" id="check-in"
                            class="py-1 border-2 border-[#9A8AFF] px-3 rounded-md w-44 focus:outline-none focus:border-purple-400" />
                    </div>
                    <div class="ml-7">
                        <p class="font-montserrat font-medium text-lg">Check-Out</p>
                        <input type="text" name="datefilter" id="check-out"
                            class="py-1 border-2 border-[#9A8AFF] px-3 rounded-md w-44 focus:outline-none focus:border-purple-400" />
                    </div>
                    <div class="ml-7">
                        <p class="font-montserrat font-medium text-lg">Travelers</p>
                        <div class="border-2 py-1 border-[#9A8AFF] px-3 rounded-sm w-44">
                            <p class="font-montserrat">1 Adult</p>
                        </div>
                    </div>
                    <div class="ml-7 mt-5">
                        <button type="submit"
                            class="px-4 py-2 text-lg font-montserrat text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]">Search
                            Now</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="flex px-24">
        <img src="{{ asset('images/Rectangle_25.png') }}" width="400" />
        <div class="mt-36 px-32">
            <h1 class="font-montserrat text-4xl font-bold">The best holidays starts here!</h1>
            <p class="mb-5 font-montserrat text-gray-500 w-[25rem]">We always make our customers happy by providing as many
                choices as possible, prioritizing the comfort of our users.
            </p>
            <a class="px-4 py-2 text-md font-montserrat text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]">Read
                more</a>
        </div>
    </section>
    <section class="py-24 px-24">
        <h1 class="font-montserrat text-2xl font-bold">Our Rooms</h1>
        <p class="font-montserrat text-md">Choose the most suitable rooms for your needs</p>
        <div class="flex justify-center mt-10 gap-10">
            @foreach ($roomTypes as $roomType)
                <div class="shadow-lg rounded-xl max-w-sm overflow-hidden pb-6">
                    <img class="w-full" src="{{ asset($roomType['image']) }}" />
                    <h1 class="font-montserrat text-2xl pt-2 pl-5 font-bold">
                        {{ $roomType['type'] }} Room
                    </h1>
                    <p class="font-montserrat text-sm pl-5">{{ $roomType['room'] }}</p>
                    <p class="font-montserrat text-sm mb-1 pl-5">{{ $roomType['desc'] }}</p>
                    <p class="font-montserrat text-md mb-3 pl-5">Starting from ${{ $roomType['price'] }}/day</p>
                    <a class="px-4 ml-5 py-2 text-md font-montserrat text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]">Book
                        Now</a>
                </div>
            @endforeach
    </section>

    <section id="subscription" class="w-full bg-center bg-cover py-32">
        <div class="bg-white ml-auto mr-36 w-[30rem] p-5">
            <h1 class="font-montserrat text-xl text-[#3624A0] font-bold">Want to get special limited offer?</h1>
            <p class="font-montserrat text-sm">Subscribe and get special accounts, newsletter, and coupons</p>
            <form method="POST" class="mt-2">
                <input type="text" name="username_email" placeholder="Enter your name"
                    class="py-1 border-b-2 font-montserrat rounded-sm w-full focus:outline-none focus:border-purple-400" />
                <input type="text" name="password" placeholder="Enter your email"
                    class="py-1 border-b-2 font-montserrat rounded-sm w-full focus:outline-none focus:border-purple-400" />
                <input type="submit" value="Subscribe"
                    class="font-montserrat px-10 font-medium py-2 mt-5 text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]" />
            </form>
        </div>
    </section>

    <section class="py-14 pl-24 flex">
        <img src="{{ asset('images/dwjwqdun.png') }}" width="400">
        <div class="pt-32 pl-16">
            <h1 class="font-montserrat text-3xl font-bold w-[24rem]">We provide reasons for you to choose us</h1>
            <p class="font-montserrat w-[27rem] mt-2 mb-3 text-gray-500">We make it easy for you to get comfortable rooms,
                hotels, homes & make your vacation even more
                enjoyable.</p>
            <p class="font-montserrat text-gray-500 pl-4">High-class Security</p>
            <p class="font-montserrat text-gray-500 pl-4">Comfortable room for you to use</p>
            <p class="font-montserrat text-gray-500 pl-4 mb-6">Located near various tourist attractions</p>
            <a class="px-4 ml-4 py-2 text-md font-montserrat text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]">Book
                Now</a>
        </div>
    </section>

    <section class="px-24 pb-10">
        <h1 class="font-montserrat text-2xl font-bold">Our Facilities</h1>
    </section>
@endsection
