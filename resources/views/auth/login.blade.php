@extends('layouts.app')

@section('content')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Readex+Pro:wght@200;300;400;500;600;700&display=swap");

</style>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    inter: "Inter"
                    , poppins: "Poppins"
                    , readex: "Readex Pro"
                , }
            , }
        , }
    , };

</script>
<style type="text/tailwindcss">
    @layer components {
    .nav-tengah {
      @apply font-poppins font-normal text-sm sm:text-base text-black hover:text-black/60 duration-100 md:hover:border-b-2 hover:border-black;
    }

    .label-input {
      @apply font-readex font-normal text-sm text-black;
    }

    .input {
      @apply rounded-[10px] px-3 py-1 border-2 border-[#4641A7]/20 focus:outline-[#4641A7];
    }

    .info {
      @apply font-poppins font-normal text-xs md:text-sm text-[#666666] text-center;
    }

    .info-2 {
      @apply font-medium text-[#4641A7];
    }
  }
</style>
<div class="my-16 md:my-auto mx-7 md:flex justify-evenly items-center">
    <div class="text-center">
        <h1 class="font-readex font-bold text-lg sm:text-2xl md:text-[26px]">Welcome back to</h1>
        <h1 class="font-readex font-bold text-3xl sm:text-4xl md:text-[40px] md:leading-[50px] text-[#4641A7]">TERRA<span class="text-black">EDU</span></h1>
    </div>

    <div class="py-10 rounded-[15px] shadow-[0_4px_5px_0_rgba(70,65,167,0.25)] my-5 px-3 md:px-[30px]">
        <div class="font-readex font-bold text-xl text-[#4641A7] text-center">{{ __('Login') }}</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col mt-[35px]">
                <label for="email" class="label-input">{{ __('Email Address') }}</label>
                <div class="">
                    <input id="email" type="email" class="input form-control w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col mt-[35px]">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" type="password" class="input form-control w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="mt-[35px] w-full bg-[#4641A7] py-2 rounded-[10px] font-readex text-sm md:text-base text-white md:w-[363px]">
                {{ __('Login') }}
            </button>
        </form>
        <p class="mt-[35px] info">Don't have account? <a href="{{'/register'}}" class="info-2">Register here</a></p>
        <p class="mt-[5px] info">You're Admin? <a href="#" class="info-2">Log in here</a></p>
    </div>
</div>
@endsection
