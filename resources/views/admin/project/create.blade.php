<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Project</title>

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
    <style>
        .demo-flex {
            display: flex;
        }
    </style>
</head>
<body>

        {{-- container dashboard --}}
        <div class="w-full bg-[#364352] flex justify-center">
        {{-- box dashboard --}}
        <div class="w-[1200px] flex">
            @include('partials.navAdmin')

            {{-- container table --}}
            <div class="w-full pb-[50vh] bg-body">
                {{-- name section --}}
                <h1 class="text-black ml-[27%] my-3 text-3xl font-semibold w-max border-b-4 border-orange-theme">Add Project</h1>

                <p class="ml-[27%] text-xl font-semibold mb-3"><a href="/dashboard/project" class="hover:text-gray-700">Project</a> / Add Project</p>

                <form action="/dashboard/project" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="bg-[#E4E4E4] w-[71%] p-5 ml-[27%]">
                        {{-- title --}}
                        <div class="flex items-center mt-3">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Title</p>
                            <input type="text" name="title" id="" required value="{{ old('title') }}" class="input-project focus:border-orange-theme w-full border-2 border-gray-600 bg-transparent px-2 py-1 outline-none" placeholder="Title">
                        </div>

                        {{-- title error --}}
                        @error('title')
                            <div class="flex items-center">
                                <p class=" w-[17%] font-semibold text-gray-600"></p>
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            </div>
                        @enderror
    
                        {{-- technology --}}
                        <div class="flex items-center mt-3">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Technology</p>
                            <input type="text" name="technology" id="" required value="{{ old('technology') }}" class="input-project focus:border-orange-theme w-full border-2 border-gray-600 bg-transparent px-2 py-1 outline-none" placeholder="Technology">
                        </div>

                        {{-- technology error --}}
                        @error('technology')
                            <div class="flex items-center">
                                <p class=" w-[17%] font-semibold text-gray-600"></p>
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            </div>
                        @enderror

                        {{-- description --}}
                        <div class="flex mt-3">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Description</p>
                            <textarea name="description" id="" required class="input-project focus:border-orange-theme w-full h-32 border-2 border-gray-600 bg-transparent px-2 py-1 outline-none" placeholder="Description">{{ old('description') }}</textarea>
                        </div>

                        {{-- description error --}}
                        @error('description')
                            <div class="flex items-center">
                                <p class=" w-[17%] font-semibold text-gray-600"></p>
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            </div>
                        @enderror

                        {{-- status --}}
                        <div class="flex items-center mt-3">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Status</p>
                            <select name="status" id="status-select" class="input-project focus:border-orange-theme w-full border-2 border-gray-600 bg-transparent px-2 py-1 outline-none">
                                @if(old('status') === 'Development')
                                    <option value="Development" selected>Development</option>
                                    <option value="Publish">Publish</option>
                                @elseif(old('status') === 'Publish')
                                    <option value="Publish" selected>Publish</option>
                                    <option value="Development">Development</option>
                                @else
                                    <option value="Development">Development</option>
                                    <option value="Publish">Publish</option>
                                @endif
                            </select>
                        </div>

                        {{-- status error --}}
                        @error('status')
                            <div class="flex items-center">
                                <p class=" w-[17%] font-semibold text-gray-600"></p>
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            </div>
                        @enderror

                        {{-- Demo --}}
                        <div class="demo hidden items-center mt-3 {{ old('status') === 'Publish' ? 'demo-flex' : '' }}">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Demo</p>
                            <input type="url" name="demo" value="{{ old('demo') }}" class="demoInput input-project focus:border-orange-theme w-full border-2 border-gray-600 bg-transparent px-2 py-1 outline-none" placeholder="https://">
                        </div>

                        {{-- sourcecode --}}
                        <div class="code hidden items-center mt-3 {{ old('status') === 'Publish' ? 'demo-flex' : '' }}">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Source Code</p>
                            <input type="url" name="sourcode" id="" value="{{ old('sourcode') }}" class="codeInput input-project focus:border-orange-theme w-full border-2 border-gray-600 bg-transparent px-2 py-1 outline-none" placeholder="https://">
                        </div>

                        {{-- image preview --}}
                        <img class="img-preview w-[30%] mt-6 -mb-1 ml-[16.5%]">

                        {{-- image --}}
                        <div class="flex items-center mt-3">
                            <p class="label-form w-[20%] font-semibold text-gray-600">Image</p>
                            <input type="file" name="img" id="" onchange="previewImage()" class="thisImg input-project focus:border-orange-theme w-full border-2 cursor-pointer rounded-sm border-gray-600 bg-transparent outline-none">
                        </div>

                        {{-- image error --}}
                        @error('img')
                            <div class="flex items-center">
                                <p class=" w-[17%] font-semibold text-gray-600"></p>
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            </div>
                        @enderror

                        {{-- button submit --}}
                        <div class="flex items-center mt-3">
                            <p class="w-[16.7%] font-semibold text-gray-600"></p>
                            <button type="submit" class="bg-gray-600 hover:bg-gray-700 focus:bg-gray-800 py-2 px-3 font-semibold text-white"><i class="fas fa-plus"></i> Add</button>
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

        // preview image
        function previewImage() {
            const image = document.querySelector('.thisImg');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        // input event
        const statusSelect = document.querySelector('#status-select');
        const demo = document.querySelector('.demo');
        const code = document.querySelector('.code');
        const demoInput = document.querySelector('.demoInput');
        const codeInput = document.querySelector('.codeInput');
        statusSelect.addEventListener('change', function() {
            if(this.value === 'Publish') {
                demo.style.display = 'flex';
                code.style.display = 'flex';
                demoInput.required = true;
                codeInput.required = true;
            } else {
                demo.style.display = 'none';
                code.style.display = 'none';
                demoInput.value = '';
                codeInput.value = '';
                demoInput.required = false;
                codeInput.required = false;
            }
        });

    </script>

    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>

