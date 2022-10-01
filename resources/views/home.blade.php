@extends('layouts.main')

@section('container')
    <main class="list-hidden w-full flex flex-col items-center mt-9">
        {{-- jumbotron --}}
        <div class="w-full pt-10 px-2 flex flex-col md-1100:w-[1100px] md-768:flex-row md-768:items-center">
            <div class="flex flex-col items-center order-last md-768:w-[55%] md-768:order-none md-768:items-start">
                {{-- intro --}}
                <h1 class="text-[24px] text-center font-semibold md-768:text-start md-768:text-[4.3vw] md-1100:text-[48px]">HI, I'M MUHAMMAD RIZKI <br> A <span class="text-orange-theme">FRONT-END DEVELOPER </span> <br> BASED IN MEDAN</h1>
                {{-- design --}}
                <h1 class="mt-3 mb-4 font-semibold md-768:text-[2.8vw] md-1100:text-[30px]">DESIGN <span class="text-orange-theme">&</span> DEVELOPMENT</h1>
                
                <div class="w-[250px] flex">
                    {{-- services button --}}
                    <div class="button-services w-1/2 border-2 py-1 border-black bg-black text-center text-body hover:bg-transparent hover:border-orange-theme hover:text-orange-theme duration-500 md-768:cursor-pointer">Services</div>
                    {{-- lets talk --}}
                    <div href="#" class="lets-talk-button w-1/2 border-2 py-1 border-black text-center hover:border-orange-theme hover:text-orange-theme duration-500 md-768:cursor-pointer">Work Together</div>
                </div>
            </div>
            
            {{-- profil --}}
            <img src="{{ asset('img/profil.png') }}" alt="Muhammad Rizki" class="order-first md-768:w-[45%] md-768:order-none">
        </div>

        {{-- skills --}}
        <div class="w-full pt-14 px-2 md-1100:w-[1100px]" id="skills">
            {{-- skill name section --}}
            <div class="w-max relative px-1">
                <h1 class="text-[28px] font-semibold md-768:text-4xl md-1100:text-5xl">SKILLS</h1>
                <div class="h-3 w-full absolute top-6 left-0 -z-10 bg-orange-theme md-1100:top-8"></div>
            </div>

            {{-- card skills --}}
            <div class="flex justify-between mt-5 md-768:mt-10">
                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/html.png') }}" alt="" class="w-[90%]">
                </div>

                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/css.png') }}" alt="" class="w-[80%]">
                </div>

                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/js-2.png') }}" alt="" class="w-[70%]">
                </div>

                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/tailwind.jpg') }}" alt="" class="w-[90%]">
                </div>

                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/php.png') }}" alt="" class="w-[95%]">
                </div>

                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/laravel.png') }}" alt="" class="w-[70%]">
                </div>

                <div class="w-[12vw] h-[12vw] border-2 flex justify-center items-center border-orange-theme md-768:w-[10vw] md-768:h-[10vw] md-1100:w-[100px] md-1100:h-[100px]">
                    <img src="{{ asset('img/mysql.png') }}" alt="" class="w-[80%]">
                </div>

            </div>

            {{-- experiences --}}
            <div class="w-full flex flex-col mt-5 md-768:flex-row md-768:mt-8">
                <div class="w-full mb-2 py-3 flex flex-col justify-center items-center border-2 relative border-black md-768:bg-black">
                    @if($experience->experiences < 10)
                        <h1 class="text-orange-theme text-2xl font-bold md-768:text-body md-768:text-4xl">0{{ $experience->experiences }}+</h1>
                    @else
                        <h1 class="text-orange-theme text-2xl font-bold md-768:text-body md-768:text-4xl">{{ $experience->experiences }}+</h1>
                    @endif

                    @if($experience->experiences < 2)
                        <h2 class="text-orange-theme font-semibold text-[0.9rem] md-768:text-body md-768:text-xl">YEAR OF EXPERINCE</h2>
                    @else
                        <h2 class="text-orange-theme font-semibold text-[0.9rem] md-768:text-body md-768:text-xl">YEARS OF EXPERINCE</h2>
                    @endif
                    <i class="fas fa-code-branch experiences-ft absolute top-7 left-8 text-3xl text-gray-secondary md-768:hidden md-768:text-transparent"></i>
                    <i class="fas fa-sitemap experiences-sd absolute top-4 right-6 text-3xl text-gray-secondary md-768:hidden md-768:text-transparent"></i>
                </div>

                <div class="w-full mb-2 py-3 flex flex-col justify-center items-center border-2 relative border-black md-768:bg-orange-theme md-768:border-2 md-768:border-orange-theme">
                    @if($experience->project < 10)
                        <h1 class="text-orange-theme text-2xl font-bold md-768:text-body md-768:text-4xl">0{{ $experience->project }}+</h1>
                    @else
                        <h1 class="text-orange-theme text-2xl font-bold md-768:text-body md-768:text-4xl">{{ $experience->project }}+</h1>
                    @endif
                        <h2 class="text-orange-theme font-semibold text-[0.9rem] md-768:text-body md-768:text-xl">{{ $experience->project < 2 ? 'PROJECT COMPLATED' : 'PROJECTS COMPLATED' }}</h2>
                    <i class="fas fa-code project-ft absolute top-8 left-12 text-3xl text-gray-secondary md-768:hidden md-768:text-transparent"></i>
                    <i class="fas fa-terminal project-sd absolute top-3 right-12 text-3xl text-gray-secondary md-768:hidden md-768:text-transparent"></i>
                </div>
                <div class="w-full mb-2 py-3 flex flex-col justify-center items-center border-2 relative border-black md-768:bg-black">
                    @if($experience->useful < 10)
                        <h1 class="text-orange-theme text-2xl font-bold md-768:text-body md-768:text-4xl">0{{ $experience->useful }}+</h1>
                    @else
                        <h1 class="text-orange-theme text-2xl font-bold md-768:text-body md-768:text-4xl">{{ $experience->useful }}+</h1>
                    @endif
                        <h2 class="text-orange-theme font-semibold text-[0.9rem] md-768:text-body md-768:text-xl">{{ $experience->useful < 2 ? 'USEFUL PROJECT' : 'USEFUL PROJECTS' }}</h2>
                    <i class="fas fa-mug-hot useful-ft absolute top-3 left-14 text-3xl text-gray-secondary md-768:hidden md-768:text-transparent"></i>
                    <i class="fas fa-cogs useful-sd absolute top-10 right-16 text-3xl text-gray-secondary md-768:hidden md-768:text-transparent"></i>
                </div>
            </div>
        </div>

        {{-- project --}}
        <div class="w-full pt-14 px-1 md-1100:w-[1100px]" id="project">
            {{-- project name section --}}
            <div class="w-max relative px-1 ml-1">
                <h1 class="text-[28px] font-semibold md-768:text-4xl md-1100:text-5xl">PROJECT</h1>
                <div class="h-3 w-full absolute top-6 left-0 -z-10 bg-orange-theme md-1100:top-8"></div>
            </div>

            <div class="flex flex-wrap justify-between mt-2 md-768:mt-5">
                {{-- project card --}}
                @foreach ($projects as $project)
                    <div class="w-[47.1%] mx-1 my-3 md-768:w-[32%] md-768:mb-7 md-1100:w-[31%]">
                        <img src="{{ asset('storage') }}/{{ $project->img }}" alt="" class="w-full">
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg sm-350:hidden">{{ Str::limit($project->title, 18) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden sm-350:inline-block sm-400:hidden">{{ Str::limit($project->title, 21) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden sm-400:inline-block sm-470:hidden">{{ Str::limit($project->title, 25) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden sm-470:inline-block sm-550:hidden">{{ Str::limit($project->title, 30) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden sm-550:inline-block sm-600:hidden">{{ Str::limit($project->title, 36) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden sm-600:inline-block sm-700:hidden">{{ Str::limit($project->title, 39) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden sm-700:inline-block md-768:hidden">{{ Str::limit($project->title, 48) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden md-768:inline-block md-850:hidden">{{ Str::limit($project->title, 23) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden md-850:inline-block md-960:hidden">{{ Str::limit($project->title, 26) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden md-960:inline-block md-1100:hidden">{{ Str::limit($project->title, 30) }}</h1>
                        <h1 class="font-semibold text-[13px] capitalize my-1 md-768:text-lg hidden md-1100:inline-block">{{ Str::limit($project->title, 34) }}</h1>
                        @if ($project->status === 'Development')
                        <div class="flex w-[120px]">
                            <div class="button-detail-project w-1/2 py-1 border text-center text-sm border-black flex justify-center items-center hover:border-orange-theme hover:text-orange-theme duration-500 md-768:border-2 md-768:cursor-pointer ">Detail</div>
                            <div class="development-process md-768:cursor-pointer w-1/2 py-1 border bg-black text-body text-center text-sm hover:bg-transparent hover:border-orange-theme hover:text-orange-theme duration-500 border-black md-768:border-2">Visit</div>
                        </div>
                        @else                            
                            <div class="flex w-[120px]">
                                <div class="button-detail-project w-1/2 py-1 border text-center text-sm border-black flex justify-center items-center hover:border-orange-theme hover:text-orange-theme duration-500 md-768:border-2 md-768:cursor-pointer ">Detail</div>
                                <a href="{{ $project->demo }}" class="w-1/2 py-1 border bg-black text-body text-center text-sm hover:bg-transparent hover:border-orange-theme hover:text-orange-theme duration-500 border-black md-768:border-2">Visit</a>
                            </div>
                        @endif
                    </div>                    
                @endforeach
                {{-- seimbang --}}
                <div class="hidden w-[47.1%] h-[1px] mx-1 my-3 md-768:w-[32%] md-768:block">
                </div>
            </div>

            {{-- see more project --}}
            @if($projectss->count() > 6)
                <div class="w-full flex justify-center mt-3 md-768:justify-end md-768:-mt-8 md-768:mb-9"><a href="https://project.mhdrizki.com" class="bg-orange-theme p-2 cursor-default group focus:ring-offset-orange-300 focus:ring-4 focus:ring-orange-400 duration-300 rounded-md text-body md-768:cursor-pointer">See more <i class="fas fa-chevron-right group-hover:translate-x-[3px] duration-300"></i></a></div>
            @endif
            </div>

        {{-- contact --}}
        <div class="w-full pt-14 px-1 md-1100:w-[1100px]" id="contact">
            {{-- contact name section --}}
            <div class="w-max relative px-1 ml-1">
                <h1 class="text-[28px] font-semibold md-768:text-4xl md-1100:text-5xl">CONTACT</h1>
                <div class="h-3 w-full absolute top-6 left-0 -z-10 bg-orange-theme md-1100:top-8"></div>
            </div>

            <div class="mt-5 md-768:mt-10">
                <form action="/contact" method="post" autocomplete="off">
                    @csrf
                    {{-- name --}}
                    <div class="flex flex-col w-full md-768:flex-row mb-3">
                        <p class="input-label text-xl font-semibold md-768:w-[35%]">Name</p>
                        <input type="text" name="name_c" id="" placeholder="Your Name" required autocomplete="off" value="{{ old('name_c') }}" class="input-form w-full border-2 border-black bg-transparent outline-none p-1 focus:border-orange-theme">
                    </div>

                    {{-- name error --}}
                    @error('name_c')
                        <div class="flex flex-col w-full md-768:flex-row -mt-4 mb-4">
                            <p class="text-xl font-semibold md-768:w-[26%]"></p>
                            <p class="text-red-600">{{ $message }}</p>
                        </div>
                    @enderror

                    {{-- email --}}
                    <div class="flex flex-col w-full md-768:flex-row mb-3">
                        <p class="input-label text-xl font-semibold md-768:w-[35%]">Email</p>
                        <input type="email_c" name="email_c" id="" placeholder="Your Email" required autocomplete="off" value="{{ old('email_c') }}" class="input-form w-full border-2 border-black bg-transparent outline-none p-1 focus:border-orange-theme">
                    </div>

                    {{-- email error --}}
                    @error('email_c')
                        <div class="flex flex-col w-full md-768:flex-row -mt-4 mb-4">
                            <p class="text-xl font-semibold md-768:w-[26%]"></p>
                            <p class="text-red-600">{{ $message }}</p>
                        </div>
                    @enderror

                    {{-- message --}}
                    <div class="flex flex-col w-full md-768:flex-row h-[200px]">
                        <p class="input-label text-xl font-semibold md-768:w-[35%]">Message</p>
                        <textarea name="message_c" id="" placeholder="Your Message" required autocomplete="off" class="input-form w-full h-full border-2 border-black bg-transparent outline-none p-1 focus:border-orange-theme">{{ old('message_c') }}</textarea>
                    </div>

                    {{-- message error --}}
                    @error('message_c')
                        <div class="flex flex-col w-full md-768:flex-row mb-4">
                            <p class="text-xl font-semibold md-768:w-[26%]"></p>
                            <p class="text-red-600">{{ $message }}</p>
                        </div>
                    @enderror

                    {{-- send --}}
                    <div class="flex flex-col w-full -mt-4 md-768:flex-row md-768:h-8 md-768:mt-2">
                        <p class="text-xl text-transparent md-768:w-[35%]">Send</p>
                        <div class="w-full">
                            <button type="submit" class="w-[80px] flex justify-center items-center outline-none py-2 bg-black text-white">
                                <i class="far fa-paper-plane mr-2"></i>
                                <p class="font-semibold">Send</p>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    {{-- footer --}}
    <footer class="list-hidden w-full mt-14 px-2 flex justify-center">
        <div class="w-full md-1100:w-[1100px]">
            <div class="w-full h-[2px] bg-gray-secondary mb-2"></div>
            <h1 class="text-4xl font-semibold w-max mx-auto">mhd<span class="text-orange-theme">rizki</span></h1>
            <div class="w-[270px] mx-auto mt-3 flex justify-between items-center">
                <a href="{{ $social->facebook }}" target="_blank" class="w-10 h-10 flex justify-center items-center rounded-full border-2 border-black text-orange-theme hover:bg-orange-theme hover:text-body duration-500">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="{{ $social->instagram }}" target="_blank" class="w-10 h-10 flex justify-center items-center rounded-full border-2 border-black text-orange-theme hover:bg-orange-theme hover:text-body duration-500">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="{{ $social->linkedin }}" target="_blank" class="w-10 h-10 flex justify-center items-center rounded-full border-2 border-black text-orange-theme hover:bg-orange-theme hover:text-body duration-500">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
                <a href="{{ $social->youtube }}" target="_blank" class="w-10 h-10 flex justify-center items-center rounded-full border-2 border-black text-orange-theme hover:bg-orange-theme hover:text-body duration-500">
                    <i class="fab fa-youtube text-xl"></i>
                </a>
                <a href="{{ $social->github }}" target="_blank" class="w-10 h-10 flex justify-center items-center rounded-full border-2 border-black text-orange-theme hover:bg-orange-theme hover:text-body duration-500">
                    <i class="fab fa-github text-xl"></i>
                </a>
            </div>
            <p class="w-max mx-auto my-4">© {{ now()->year }} mhd<span class="text-orange-theme">rizki</span> | All Rights Reserved</p>
        </div>
    </footer>

    {{-- to close --}}
    <div class="to-close hidden fixed z-50 top-14 bottom-0 right-0 left-0"></div>

    {{-- lets talk overlay --}}
    <div class="lets-talk-overlay w-full fixed z-40 top-0 flex justify-center -translate-y-[110%] duration-500">
        <div class="bg-orange-theme p-2 flex items-center shadow-md shadow-[gray] md-768:px-7">
            <div class="flex flex-col items-center mr-4">
                <a href="{{ $social->telegram }}" target="_blank" class="w-9 h-9 border-2 border-black rounded-full flex justify-center items-center hover:bg-black duration-500 md-768:w-11 md-768:h-11">
                    <i class="fas fa-paper-plane text-body -ml-1"></i>
                </a>
                <p class="text-[0.7rem] font-semibold mt-1 md-768:text-base md-768:font-normal">Telegram</p>
            </div>

            <div class="flex flex-col items-center mr-2">
                <a href="{{ $social->email }}" target="_blank" class="w-9 h-9 border-2 border-black rounded-full flex justify-center items-center hover:bg-black duration-500 md-768:w-11 md-768:h-11">
                    <i class="fas fa-envelope text-body"></i>
                </a>
                <p class="text-[0.7rem] font-semibold mt-1 md-768:text-base md-768:font-normal">Email</p>
            </div>            
        </div>
    </div>

    {{-- services overlay --}}
    <div class="services-overlay fixed z-40 top-0 bottom-0 right-0 left-0 bg-[#33406087] hidden justify-center items-center px-1">
        <div class="bg-black w-full p-3 md-810:w-[800px] md-768:p-4">
            <form action="/" method="post">
                @csrf
                {{-- input name services --}}
                <div class="flex flex-col md-768:flex-row text-body mb-2 md-768:mb-4">
                    <p class="input-label-services w-full text-lg md-768:w-[30%]">Name</p>
                    <input type="text" name="name" id="" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="off" class="input-form-services w-full bg-transparent border-2 border-body p-1 outline-none focus:border-orange-theme">
                </div>

                {{-- error name --}}
                @error('name')
                    <div class="flex flex-col md-768:flex-row text-body mb-1 -mt-2 md-768:mb-4 md-768:-mt-4">
                        <p class="w-full text-lg md-768:w-[23%]"></p>
                        <p class="text-red-700">{{ $message }}</p>
                    </div>
                @enderror

                {{-- input email services --}}
                <div class="flex flex-col md-768:flex-row text-body mb-2 md-768:mb-4">
                    <p class="input-label-services w-full text-lg md-768:w-[30%]">Email</p>
                    <input type="text" name="email" id="" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="off" class="input-form-services w-full bg-transparent border-2 border-body p-1 outline-none focus:border-orange-theme">
                </div>

                {{-- error email --}}
                @error('email')
                    <div class="flex flex-col md-768:flex-row text-body -mt-2 mb-1 md-768:mb-4 md-768:-mt-4">
                        <p class="w-full text-lg md-768:w-[23%]"></p>
                        <p class="text-red-700">{{ $message }}</p>
                    </div>
                @enderror

                {{-- select services --}}
                <div class="flex flex-col md-768:flex-row text-[#9CA3AF] mb-2 md-768:mb-4">
                    <p class="input-label-services w-full text-lg md-768:w-[30%] text-body">Services</p>
                    <select name="services" id="" class="input-form-services w-full bg-transparent border-2 border-body p-1 outline-none focus:border-orange-theme">
                        @if(old('services') === 'Portal Website')
                            <option value="Portal Website" selected>Portal Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="E-Commerce Website">E-Commerce Website</option>
                            <option value="Landing Page Website">Landing Page Website</option>
                            <option value="Other">Other</option>
                        @elseif(old('services') === 'Portfolio Website')
                            <option value="Portal Website">Portal Website</option>
                            <option value="Portfolio Website" selected>Portfolio Website</option>
                            <option value="E-Commerce Website">E-Commerce Website</option>
                            <option value="Landing Page Website">Landing Page Website</option>
                            <option value="Other">Other</option>
                        @elseif(old('services') === 'E-Commerce Website')
                            <option value="Portal Website">Portal Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="E-Commerce Website" selected>E-Commerce Website</option>
                            <option value="Landing Page Website">Landing Page Website</option>
                            <option value="Other">Other</option>
                        @elseif(old('services') === 'Landing Page Website')
                            <option value="Portal Website">Portal Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="E-Commerce Website">E-Commerce Website</option>
                            <option value="Landing Page Website" selected>Landing Page Website</option>
                            <option value="Other">Other</option>
                        @elseif(old('services') === 'Other')
                            <option value="Portal Website">Portal Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="E-Commerce Website">E-Commerce Website</option>
                            <option value="Landing Page Website">Landing Page Website</option>
                            <option value="Other" selected>Other</option>
                        @else
                            <option value="Portal Website">Portal Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="E-Commerce Website">E-Commerce Website</option>
                            <option value="Landing Page Website">Landing Page Website</option>
                            <option value="Other">Other</option>
                        @endif
                    </select>
                </div>

                {{-- error services --}}
                @error('services')
                    <div class="flex flex-col md-768:flex-row text-body -mt-2 mb-1 md-768:mb-4 md-768:-mt-4">
                        <p class="w-full text-lg md-768:w-[23%]"></p>
                        <p class="text-red-700">{{ $message }}</p>
                    </div>
                @enderror

                {{-- message services --}}
                <div class="flex flex-col md-768:flex-row text-body mb-2">
                    <p class="input-label-services w-full text-lg md-768:w-[30%]">Message</p>
                    <textarea name="message" id="" placeholder="Your Message" required autocomplete="off" class="input-form-services w-full h-32 bg-transparent border-2 border-body px-1 outline-none focus:border-orange-theme">{{ old('message') }}</textarea>
                </div>

                {{-- message services error --}}
                @error('message')
                    <div class="flex flex-col md-768:flex-row text-body -mt-3 mb-1 md-768:mb-4">
                        <p class="w-full text-lg md-768:w-[23%]"></p>
                        <p class="text-red-700">{{ $message }}</p>
                    </div>
                @enderror

                {{-- button submit services --}}
                <div class="flex flex-col md-768:flex-row text-black">
                    <p class="w-full text-lg md-768:w-[30%]">button submit</p>
                    <div class="w-full">
                        <div class="flex w-48 h-9 -mt-4 md-768:mt-2">
                            <button type="submit" class="w-1/2 flex justify-center items-center bg-body p-1">
                                <i class="far fa-paper-plane mr-2"></i>
                                <p>Send</p>
                            </button>
                            <div class="cancel-services w-1/2 h-full flex justify-center items-center bg-orange-theme md-768:cursor-pointer">
                                <i class="fas fa-times mr-2"></i>
                                <p>Cancel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- project overlay --}}
    @foreach ($projects as $project)
        <div class="project-overlay fixed top-0 bottom-0 right-0 left-0 hidden z-40 justify-center items-center bg-[#33406087] px-2">
            <div class="container-project-overflow w-full max-h-[80vh] overflow-auto bg-black p-3 md-810:w-[800px] relative md-768:p-5">
                {{-- button close overlay project --}}
                <div class="button-close-project w-full sticky top-0 flex justify-end">
                    <div class="w-8 h-8 bg-red-500 flex justify-center items-center -mt-3 -mr-3 md-768:-mt-[22px] md-768:-mr-[20px] md-768:cursor-pointer">
                        <i class="fas fa-times text-body"></i>
                    </div>
                </div>

                {{-- img project overlay --}}
                <img src="{{ asset('storage') }}/{{ $project->img }}" alt="" class="w-full mt-2 sm-400:w-[390px] sm-460:-mt-4">

                {{-- title project overlay --}}
                <div class="border border-[#696464] mt-1 p-1">
                    <p class="text-[#5D6F75] text-lg font-semibold">Title</p>
                    <div class="text-body capitalize">{{ $project->title }}</div>
                </div>

                {{-- technology project overlay --}}
                <div class="border border-[#696464] mt-1 p-1">
                    <p class="text-[#5D6F75] text-lg font-semibold">Technology</p>
                    <div class="text-body">{{ $project->technology }}</div>
                </div>

                {{-- description project overlay --}}
                <div class="border border-[#696464] mt-1 p-1">
                    <p class="text-[#5D6F75] text-lg font-semibold">Description</p>
                    <div class="text-body">{{ $project->description }}</div>
                </div>

                {{-- button go to project overlay --}}
                <div class="border border-[#696464] mt-1 p-1">
                    <p class="text-[#5D6F75] text-lg font-semibold">Go To</p>
                    <div class="flex items-center text-body">
                        @if ($project->status === 'Development')
                            <div class="development-process flex items-center mr-3 border-b border-blue-600 hover:border-blue-900 group md-768:cursor-pointer">
                                <p class="text-blue-600 group-hover:text-blue-900">Visit</p>
                                <i class="fas fa-external-link-alt ml-1 text-blue-600 group-hover:text-blue-900"></i>
                            </div>

                            <div class="development-process flex items-center border-b border-blue-600 hover:border-blue-900 group md-768:cursor-pointer">
                                <p class="text-blue-600 group-hover:text-blue-900">Source Code</p>
                                <i class="fas fa-external-link-alt ml-1 text-blue-600 group-hover:text-blue-900"></i>
                            </div>
                        @else
                            <a href="{{ $project->demo }}" class="flex items-center mr-3 text-blue-600 border-b border-blue-600 hover:text-blue-900 hover:border-blue-900">
                                <p>Visit</p>
                                <i class="fas fa-external-link-alt ml-1"></i>
                            </a>

                            <a href="{{ $project->sourcode }}" class="flex items-center text-blue-600 border-b border-blue-600 hover:text-blue-900 hover:border-blue-900">
                                <p>Source Code</p>
                                <i class="fas fa-external-link-alt ml-1"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>        
    @endforeach

    {{-- alert development procesed --}}
    <div class="alert-development-procesed w-full flex justify-center fixed z-40 top-0 duration-500 -translate-y-[110%]">
        <div class="p-3 bg-black text-center text-body border-l-[6px] border-orange-theme shadow-md shadow-[gray]"><i class="fa-solid fa-circle-info text-red mr-2"></i> Still Under Development</div>
    </div>

    {{-- youtube recomend --}}
    <div class="youtube-recomend fixed z-[60] top-0 bottom-0 right-0 left-0 hidden justify-center items-center bg-[#33406087]">
        <div class="bg-orange-theme p-4 w-full absolute z-20 mx-2 sm-500:w-[500px]">
            <h1 class="text-xl text-body mb-4 text-center">Watch My Latest Video 😊</h1>
            <iframe class="w-full" height="315" src="{{ $youtube->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="hide-youtube absolute top-0 bottom-0 right-0 left-0"></div>
    </div>

    {{-- session services --}}
    @if(session()->has('success'))
        <div class="session-services fixed z-30 top-0 bottom-0 left-0 right-0 flex justify-center duration-500">
            <div class="absolute z-10 h-max p-4 bg-black border-l-[6px] border-orange-theme text-body shadow-md shadow-[gray]">{{ session('success') }}</div>
            <div class="session-services-hide absolute top-0 bottom-0 right-0 left-0"></div>
        </div>
    @endif

    {{-- session contact --}}
    @if(session()->has('yes'))
        <div class="session-services fixed z-30 top-0 bottom-0 left-0 right-0 flex justify-center duration-500">
            <div class="absolute z-10 h-max p-4 bg-black border-l-[6px] border-orange-theme text-body shadow-md shadow-[gray]">{{ session('yes') }}</div>
            <div class="session-services-hide absolute top-0 bottom-0 right-0 left-0"></div>
        </div>
    @endif

    @if ($errors->all())
        <div class="session-services fixed z-30 top-0 bottom-0 left-0 right-0 flex justify-center duration-500">
            <div class="absolute z-10 h-max p-4 bg-black border-l-[6px] border-orange-theme text-body shadow-md shadow-[gray]"><i class="fa-solid fa-circle-info text-red mr-2"></i> Gagal mengirim, cek form yang anda isi</div>
            <div class="session-services-hide absolute top-0 bottom-0 right-0 left-0"></div>
        </div>
    @endif
@endsection