<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media Dashboard</title>

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

    <link rel="icon" type="image" href="{{ asset('img/mhdrizki.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
        {{-- container dashboard --}}
        <div class="w-full bg-[#364352] flex justify-center">
            {{-- box dashboard --}}
            <div class="w-[1200px] flex">
                @include('partials.navAdmin')
    
                {{-- container table --}}
                <div class="w-full h-[100vh] bg-body">
                    {{-- name section --}}
                    <h1 class="text-black ml-[27%] my-5 text-3xl font-semibold w-max border-b-4 border-orange-theme">Social Media Link</h1>
    
                    {{-- table --}}
                    <table class="ml-[27%] w-[70%]">
                        <tr class="bg-[#E4E4E4] border-b-4 border-body sticky top-0">
                            <th class="w-[17%] py-1">Telegram</th>
                            <th class="w-[17%] py-1">Email</th>
                            <th class="w-[17%] py-1">Facebook</th>
                            <th class="w-[17%] py-1">Instagram</th>
                            <th class="w-[17%] py-1">linkedin</th>
                            <th class="w-[17%] py-1">Youtube</th>
                            <th class="w-[17%] py-1">Github</th>
                            <th class="py-1">Action</th>
                        </tr>

                        <tr class="bg-[#E4E4E4] border-b-4 border-body">
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->telegram }}" class="hover:text-blue-800">{{ Str::limit($social->telegram, 13) }}</a></td>
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->email }}" class="hover:text-blue-800">{{ Str::limit($social->email, 13) }}</a></td>
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->facebook }}" class="hover:text-blue-800">{{ Str::limit($social->facebook, 13) }}</a></td>
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->instagram }}" class="hover:text-blue-800">{{ Str::limit($social->instagram, 13) }}</a></td>
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->linkedin }}" class="hover:text-blue-800">{{ Str::limit($social->linkedin, 13) }}</a></td>
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->youtube }}" class="hover:text-blue-800">{{ Str::limit($social->youtube, 13) }}</a></td>
                            <td class="text-center text-[12px] text-blue-700"><a href="{{ $social->github }}" class="hover:text-blue-800">{{ Str::limit($social->github, 13) }}</a></td>
                            <th><a href="/dashboard/social/{{ $social->id }}/edit"><i class="far fa-edit mr-2"></i></a></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        @if(session()->has('success'))
            <div class="session-services fixed z-20 top-0 w-full flex justify-center">
                <div class="bg-black border-l-[6px] border-orange-theme text-body p-3">{{ session('success') }}</div>
            </div>
        @endif

        <script>
            const sessionServices = document.querySelector('.session-services');
            function sessionServicesHide() {
                sessionServices.style.transform = 'translateY(-110%)';
                sessionServices.style.transition = '0.5s';
            }

            setTimeout(sessionServicesHide, 3000);
        </script>

    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>
