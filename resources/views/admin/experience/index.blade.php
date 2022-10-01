<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Experience Dashboard</title>

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
                    <h1 class="text-black ml-[27%] my-5 text-3xl font-semibold w-max border-b-4 border-orange-theme">Experience</h1>
    
                    {{-- table --}}
                    <table class="ml-[27%] w-[70%]">
                        <tr class="bg-[#E4E4E4] border-b-4 border-body sticky top-0">
                            <th class="py-1">Experience</th>
                            <th class="py-1">Project Completed</th>
                            <th class="py-1">Useful Project</th>
                            <th class="py-1">Action</th>
                        </tr>

                        <tr class="bg-[#E4E4E4] border-b-4 border-body">
                            @if($experience->experiences < 10)
                                <td class="text-center">0{{ $experience->experiences }}</td>
                            @else
                                <td class="text-center">{{ $experience->experiences }}</td>
                            @endif

                            @if($experience->project < 10)
                                <td class="text-center">0{{ $experience->project }}</td>
                            @else
                                <td class="text-center">{{ $experience->project }}</td>
                            @endif
                            
                            @if($experience->useful < 10)
                                <td class="text-center">0{{ $experience->useful }}</td>
                            @else
                                <td class="text-center">{{ $experience->useful }}</td>
                            @endif
                            <th><a href="/dashboard/experience/{{ $experience->id }}/edit"><i class="far fa-edit mr-2"></i></a></th>
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
