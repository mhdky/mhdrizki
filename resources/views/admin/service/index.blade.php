<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Dashboard</title>

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
                <div class="w-full pb-[100vh] bg-body">
                    {{-- name section --}}
                    <h1 class="text-black ml-[27%] my-5 text-3xl font-semibold w-max border-b-4 border-orange-theme">Service</h1>
        
                    {{-- table --}}
                    <table class="ml-[27%] w-[70%] text-sm">
                        <tr class="bg-[#444444] text-body border border-body sticky z-10 top-0">
                            <th class="w-[30px] py-1 border-2 border-body">No</th> 
                            <th class="w-[120px] py-1 border-2 border-body">Username</th>
                            <th class="w-[120px] py-1 border-2 border-body">E-Mail</th>
                            <th class="w-[150px] py-1 border-2 border-body">Service</th>
                            <th class="py-1 border-2 border-body">Time</th>
                            <th class="py-1 border-2 border-body">Message</th>
                            <th class="w-[50px] py-1 border-2 border-body">Action</th>
                        </tr>
                            @foreach ($services as $service)
                                <tr class="bg-[#E4E4E4] {{ $loop->iteration % 2 == 1 ? 'bg-[#E4E4E4]' : 'bg-[#d4d4d4]' }}">
                                    <td class="text-center py-2 border-2 border-body">{{ $loop->iteration }}</td>
                                    <td class="email-table text-center capitalize py-2 border-2 border-body relative">
                                        {{ Str::Limit($service->name, 11) }}
                                        <p class="email-detail w-[110px] max-h-8 hidden overflow-auto absolute right-1/2 translate-x-1/2 -bottom-5 bg-[#000000ab] p-1 text-body text-[11px] rounded-md">{{ $service->name }}</p>
                                    </td>
                                    <td class="email-table p-2 text-[12px] text-center border-2 border-body relative">
                                        {{ Str::limit($service->email, 20) }}
                                        <p class="email-detail w-[110px] max-h-8 hidden overflow-auto absolute right-1/2 translate-x-1/2 -bottom-5 bg-[#000000ab] p-1 text-body text-[11px] rounded-md">{{ $service->email }}</p>
                                    </td>
                                    <td class=" text-center py-2 border-2 border-body">{{ $service->services }}</td>
                                    <td class=" text-center py-2 text-[0.7rem] border-2 border-body">{{ $service->created_at->diffForHumans() }}</td>
                                    <td class="email-table border-2 p-2 border-body relative">
                                        {{ Str::limit($service->message, 24) }}
                                        <p class="email-detail w-[110px] max-h-8 hidden overflow-auto absolute right-1/2 translate-x-1/2 -bottom-5 bg-[#000000ab] p-1 text-body text-[11px] rounded-md">{{ $service->message }}</p>
                                    </td>
                                    <th class="border-2 py-2 border-body">
                                        <form action="/dashboard/service/{{ $service->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="mx-auto inline-block" onclick="return confirm('Delete?')"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
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

            const emailTable = document.querySelectorAll('.email-table');
            const emailDetail = document.querySelectorAll('.email-detail');
            for(let i = 0; i < emailTable.length || i < emailDetail.length; i++) {
                emailTable[i].addEventListener('mouseover', () => {
                    emailDetail[i].style.display = 'block';
                    emailDetail[i].style.zIndex = '3';
                });

                emailTable[i].addEventListener('mouseleave', () => {
                    emailDetail[i].style.display = 'none'
                    emailDetail[i].style.zIndex = 'unset';
                });
            }
        </script>

    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>