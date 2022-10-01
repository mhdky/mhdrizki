<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Youtube Link</title>

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
                <h1 class="text-black ml-[27%] my-3 text-3xl font-semibold w-max border-b-4 border-orange-theme">Edit Youtube Url</h1>

                <p class="ml-[27%] text-xl font-semibold mb-3"><a href="/dashboard/youtube" class="hover:text-gray-700">Youtube</a> / Edit Url</span></p>

                <form action="/dashboard/youtube/{{ $youtube->id }}" method="post" autocomplete="off">
                    @method('put')
                    @csrf
                    <div class="bg-[#E4E4E4] w-[71%] p-5 ml-[27%]">
                        {{-- url --}}
                        <div class="flex items-center mt-3">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Url</p>
                            <input type="text" name="url" id="" value="{{ old('url', $youtube->url) }}" class="input-project focus:border-orange-theme w-full border-2 border-gray-600 bg-transparent px-2 py-1 outline-none" placeholder="Url">
                        </div>

                        {{-- image error --}}
                        @error('url')
                            <div class="flex items-center">
                                <p class=" w-[17%] font-semibold text-gray-600"></p>
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            </div>
                        @enderror

                        {{-- button submit --}}
                        <div class="flex items-center mt-3">
                            <p class="w-[16.7%] font-semibold text-gray-600"></p>
                            <button type="submit" class="bg-gray-600 hover:bg-gray-700 focus:bg-gray-800 py-2 px-3 font-semibold text-white"><i class="fas fa-check mr-2"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const inputProject = document.querySelectorAll('.input-project');
        const labelForm = document.querySelectorAll('.label-form');

        for(let i = 0; i < inputProject.length || i < labelForm; i++) {
            inputProject[i].addEventListener('focus', () => {
                labelForm[i].style.color = '#E94F36'
            });

            inputProject[i].addEventListener('blur', () => {
                labelForm[i].style.color = '#4B5563'
            });
        }
    </script>

    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>