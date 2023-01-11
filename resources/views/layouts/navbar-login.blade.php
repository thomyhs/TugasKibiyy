<style type="text/tailwindcss">
    @layer components {
            .nav-tengah {
            @apply font-poppins font-normal text-sm sm:text-base text-black duration-100;
            }
            .div-card {
            @apply rounded-[25px] bg-white py-4 md:py-6 px-4 md:px-[60px] flex mt-[30px] md:mt-0 items-center justify-around md:gap-12;
            }
            .text-card {
            @apply font-poppins font-semibold text-base md:text-2xl text-black;
            }
        }

        /* .ajg > svg:active {
            transform: rotateX(180deg);
        }
        .ajg > svg:focus {
            transform: rotateX(180deg);
        } */

        /* .ajg {
            -moz-transition: all .5s linear;
            -webkit-transition: all .5s linear;
            transition: all .5s linear;
        }
        .ajg.down {
            -moz-transform:rotate(180deg);
            -webkit-transform:rotate(180deg);
            transform:rotate(180deg);
        } */
</style>

<nav
    class="fixed-top w-full  flex flex-col md:flex-row md:items-center py-5 justify-between bg-white shadow-[0_4px_20px_0_rgba(227,240,250,0.75)] px-[25px] lg:px-[150px] gap-4 md:gap-0">
    <div class="flex items-center justify-between">
        <h1 class="font-inter font-bold text-lg sm:text-xl md:text-base text-[#4641A7]">TERRA<span
                class="text-black">EDU</span></h1>
        <svg class="sm:w-6 md:hidden" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </div>
    <div class="flex flex-col sm:flex-row gap-5 md:gap-[70px] items-center justify-between">
        <a href="{{'/home'}}" class="nav-tengah hover:text-black/60 md:hover:border-b-2 hover:border-black;">Home</a>
        <div class="relative">
            <button class="flex flex-row gap-1 group drop" id="drop" onclick="drupdon()">
                <div class="ajg flex">
                    <p class=" nav-tengah cursor-pointer">Kelas</p>
                    <svg class="kon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </div>
            </button>
            <div id="down"
                class="hidden flex-col absolute bg-white min-w-max gap-2 mt-3 px-3 py-3 rounded-b-[15px] shadow-[0_4px_5px_0_rgba(70,65,167,0.25)] ">
                <a class="nav-tengah text-black/30 hover:text-[#4641A7]" href="">Kelas 10</a>
                <a class="nav-tengah text-black/30 hover:text-[#4641A7]" href="">Kelas 11</a>
                <a class="nav-tengah text-black/30 hover:text-[#4641A7]" href="">Kelas 12</a>
            </div>
        </div>
        <a href="#about" class="nav-tengah hover:text-black/60 md:hover:border-b-2 hover:border-black;">About</a>
    </div>
    <div class="flex flex-col justify-center relative">
        <img class="rounded-full cursor-pointer w-[42px] h-[42px]" onclick="toggle()" alt="willy"
            src="./assets/willy.jpg">
        <div id="profile"
            class="hidden absolute top-12 -left-60  bg-white shadow-[0_4px_5px_0_rgba(70,65,167,0.25)] rounded-[15px] text-center flex-col p-8 w-[350px] z-20">
            <img class="rounded-full self-center w-[70px] h-auto" src="./assets/willy.jpg">
            <p class="font-poppins font-medium text-xl text-[#1E1E1E] pt-2">Willy The Kiddo</p>
            <p class="font-poppins font-normal text-base text-[#666666] pb-5">
                willythe.kid@gmail.com</p>
            <div>
                <button
                    class="dropdown-item box-border justify-center items-center px-20 py-1 gap-[10px] border-[1.5px] border-[#4641A7] rounded-[10px] font-readex font-normal text-xl text-[#4641A7] hover:border-red-600 hover:text-red-600 hover:border-2 "
                    href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> {{ __('Logout') }} </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</nav>
