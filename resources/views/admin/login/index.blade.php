<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <meta itemprop="name" content="mhdrizki">
    <meta itemprop="description" content="Muhammad Rizki Site">
    <meta itemprop="image" content="{{ asset('img/mhdrizki_logo.png') }}">
 
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://mhdrizki.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="mhdrizki">
    <meta property="og:description" content="Muhammad Rizki Site">
    <meta property="og:image" content="{{ asset('img/mhdrizki_logo.png') }}">
 
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="mhdrizki">
    <meta name="twitter:description" content="Muhammad Rizki Site">
    <meta name="twitter:image" content="{{ asset('img/mhdrizki_logo.png') }}">

    @vite('resources/css/app.css')
    <link rel="icon" type="image" href="{{ asset('img/mhdrizki.png') }}">
</head>
<body>
    <div class="fixed top-0 bottom-0 right-0 left-0 flex justify-center items-center">
        <div class="w-[1100px] flex px-2 md-768:px-0 md-768:h-[450px]">
            <div class="bg-orange-theme w-1/2 h-full hidden justify-center items-center md-768:flex">
                <img src="{{ asset('img/mhdrizki_logo.png') }}" alt="" class="w-[35%]">
            </div>
            <div class="bg-gray-secondary py-5 border-2 border-black w-full h-full flex flex-col justify-center items-center md-768:bg-black md-768:w-1/2">
                <img src="{{ asset('img/mhdrizki_logo.png') }}" alt="" class="w-[35%] md-768:hidden">

                <form action="/login" method="post" autocomplete="off" class="w-full px-2 md-960:px-7">
                    @csrf
                    {{-- username --}}
                    <div class="flex flex-col md-768:flex-row md-768:items-center md-768:mb-2">
                        <p class="hidden input-label font-semibold md-768:inline-block md-768:text-body md-768:w-[40%]">Username</p>
                        <p class="input-label-first font-semibold md-768:hidden">Username</p>
                        <input type="text" name="username" id="" placeholder="Username" value="{{ old('username') }}" class="input-login outline-none border-2 border-black bg-transparent p-1 focus:border-orange-theme md-768:border-body md-768:w-full md-768:text-body">
                    </div>

                    {{-- username error --}}
                    @error('username')
                        <div class="flex flex-col mb-3 md-768:flex-row md-768:items-center md-768:mb-4">
                            <p class="font-semibold md-768:inline-block md-768:text-body md-768:w-[29%]"></p>
                            <p class="text-red-500">{{ $message }}</p>
                        </div>
                    @enderror

                    {{-- password --}}
                    <div class="flex flex-col md-768:flex-row md-768:items-center md-768:mb-1 md-768:mt-3">
                        <p class="hidden input-label font-semibold md-768:inline-block md-768:text-body md-768:w-[40%]">Password</p>
                        <p class="input-label-first font-semibold md-768:hidden">Password</p>
                        <input type="password" name="password" id="" placeholder="Password" value="{{ old('password') }}" class="input-login outline-none border-2 border-black bg-transparent p-1 focus:border-orange-theme md-768:border-body md-768:w-full md-768:text-body">
                    </div>

                    {{-- password error --}}
                    @error('password')
                        <div class="flex flex-col mb-3 md-768:flex-row md-768:items-center md-768:mb-2">
                            <p class="font-semibold md-768:inline-block md-768:text-body md-768:w-[29%]"></p>
                            <p class="text-red-500">{{ $message }}</p>
                        </div>
                    @enderror

                    <div class="flex flex-col md-768:flex-row">
                        <p class="font-semibold md-768:w-[28.5%]"></p>
                        <button type="submit" class="bg-black w-max mt-2 text-body py-1 px-2 md-768:bg-body md-768:text-black md-768:font-semibold"><i class="fas fa-sign-in-alt mr-1"></i> Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- emal atau password salah --}}
    @if (session()->has('loginFaild'))
        <div class="session-services w-full fixed top-0 flex justify-center items-center">
            <div class="text-body p-4 bg-black border-l-[6px] border-orange-theme">{{ session('loginFaild') }}</div>
        </div>
    @endif

    <script>
        const inputLogin  = document.querySelectorAll('.input-login');
        const inputLabel = document.querySelectorAll('.input-label');
        const inputLabelFirst = document.querySelectorAll('.input-label-first');
        for(let i = 0; i < inputLogin.length || i < inputLabel.length || i < inputLabelFirst.length; i++) {
            inputLogin[i].addEventListener('focus', () => {
                inputLabel[i].style.color = '#E94F36'
                inputLabelFirst[i].style.color = '#E94F36'
            });

            inputLogin[i].addEventListener('blur', () => {
                inputLabel[i].style.color = '#F3F1EF'
                inputLabelFirst[i].style.color = 'black'
            });
        }
    </script>

    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>