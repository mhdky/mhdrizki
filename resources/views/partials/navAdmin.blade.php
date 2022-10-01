{{-- container sidebar --}}
<div class="w-[300px] h-screen bg-black fixed top-0 flex flex-col justify-between">
    <div class="">
        {{-- logo --}}
        <a href="/"><img src="{{ asset('img/mhdrizki.png') }}" alt="" class="w-[30%] mx-auto my-11"></a>

        {{-- list --}}
        <div class="text-body">
            {{-- project --}}
            <a href="/dashboard/project" class="border-t border-[#131313] inline-block w-full">
                <p class="border-l-4 {{ Request::is('dashboard/project*') ? 'border-orange-theme' : 'border-transparent' }} py-3 px-5 w-full hover:border-orange-theme flex items-center"><i class="fas fa-code text-xl pr-5"></i> Project</p>
            </a>
            {{-- services --}}
            <a href="/dashboard/service" class="border-t border-[#131313] inline-block w-full">
                <p class="border-l-4 {{ Request::is('dashboard/service*') ? 'border-orange-theme' : 'border-transparent' }} py-3 px-5 w-full hover:border-orange-theme flex items-center"><i class="fas fa-keyboard text-xl pr-6"></i> Service</p>
            </a>
            {{-- contact --}}
            <a href="/dashboard/contact" class="border-t border-[#131313] inline-block w-full">
                <p class="border-l-4 {{ Request::is('dashboard/contact*') ? 'border-orange-theme' : 'border-transparent' }} py-3 px-5 w-full hover:border-orange-theme flex items-center"><i class="far fa-envelope text-xl mr-6"></i> Contact Message</p>
            </a>
            {{-- youtube --}}
            <a href="/dashboard/youtube" class="border-t border-[#131313] inline-block w-full">
                <p class="border-l-4 {{ Request::is('dashboard/youtube*') ? 'border-orange-theme' : 'border-transparent' }} py-3 px-5 w-full hover:border-orange-theme flex items-center"><i class="fab fa-youtube text-xl mr-6"></i> Youtube</p>
            </a>
            {{-- medsos --}}
            <a href="/dashboard/social" class="border-t border-[#131313] inline-block w-full">
                <p class="border-l-4 {{ Request::is('dashboard/social*') ? 'border-orange-theme' : 'border-transparent' }} py-3 px-5 w-full hover:border-orange-theme flex items-center"><i class="fas fa-heart text-xl mr-6"></i> Social Media</p>
            </a>
            {{-- experiences --}}
            <a href="/dashboard/experience" class="border-b border-t border-[#131313] inline-block w-full">
                <p class="border-l-4 {{ Request::is('dashboard/experience*') ? 'border-orange-theme' : 'border-transparent' }} py-3 px-5 w-full hover:border-orange-theme flex items-center"><i class="fas fa-sitemap text-xl mr-6"></i> Experience</p>
            </a>
        </div>
    </div>

    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="bg-orange-theme w-full py-2 font-semibold"><i class="fas fa-sign-out-alt"></i> Logout</button>
    </form>
</div>