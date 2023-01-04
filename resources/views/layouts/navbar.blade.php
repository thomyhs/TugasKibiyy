<nav class="fixed w-full z-[999] flex flex-col md:flex-row md:items-center py-5 justify-between bg-white shadow-[0_4px_20px_0_rgba(227,240,250,0.75)] px-[25px] lg:px-[150px] gap-4 md:gap-0">
    <div class="flex items-center justify-between">
        <h1 onclick="window.location.href='{{'/landing-page'}}'" class="cursor-pointer font-inter font-bold text-lg sm:text-xl md:text-base text-[#4641A7]">TERRA<span class="text-black">EDU</span></h1>
        <svg class="sm:w-6 md:hidden" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </div>

    <div class="grid sm:flex grid-cols-2 sm:flex-row gap-[10px] sm:justify-center">
        <button type="submit" onclick="window.location.href='{{'/register'}}'" class="md:flex items-center text-center py-1 sm:px-7 rounded-[15px] border-2 border-[#4641A7] box-border bg-white font-poppins font-bold text-xs sm:text-sm text-[#4641A7] duration-100 hover:scale-105">
            Register
        </button>
        <button type="submit" onclick="window.location.href='{{'/login'}}'" class="md:flex items-center text-center py-1 sm:px-7 rounded-[15px] border-2 border-[#4641A7] box-border bg-[#4641A7] font-poppins font-bold text-xs sm:text-sm text-white duration-100 hover:scale-105">
            Login
        </button>
    </div>
</nav>
