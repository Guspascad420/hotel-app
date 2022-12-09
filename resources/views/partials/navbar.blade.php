<nav class="px-20 py-5 flex justify-between {{ ($active === "home") ? '' : 'bg-[#9A8AFF]' }}">
    <p class="mr-16 font-semibold font-montserrat text-2xl text-white">Room <br> Park</p>
    <ul class="mt-3">
        <li class="inline-block mr-4 font-montserrat text-xl text-white {{ ($active === "home") ? 'font-bold' : '' }}">
            <a>Home</a>
        </li>
        <li class="inline-block mr-4 font-montserrat text-xl text-white">
            <a>Rooms</a>
        </li>
        <li class="inline-block mr-4 font-montserrat text-xl text-white">
            <a>Services</a>
        </li>
        <li class="inline-block mr-4 font-montserrat text-xl text-white">
            <a>Blog</a>
        </li>
        <li class="inline-block mr-4 font-montserrat text-xl text-white">
            <a>Contact</a>
        </li>
    </ul>
    <div class="mt-3">
        @auth
        <p class="text-white font-montserrat text-xl">{{ auth()->user()->first_name }}</p>
        @else
        <a href="/login"
            class="px-6 py-2 text-lg font-montserrat text-white rounded-md bg-[#9A8AFF] hover:bg-[#8F7DFF]">
            Login
        </a>
        @endauth
    </div>
</nav>