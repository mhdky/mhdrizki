<div id="home"></div>
<nav class="bg-body w-full py-3 px-2 flex justify-center fixed z-20 top-0">
    <div class="w-[1200px] flex justify-between items-center">
        {{-- logo --}}
        <a href="#home" class="logo font-bold text-3xl">mhd<span class="text-orange-theme">rizki</span></a>

        {{-- list dekstop --}}
        <ul class="hidden md-768:flex">
            <li class="mx-2 hover:text-orange-theme"><a href="#home" class="list-1 text-orange-theme">Home</a></li>
            <li class="mx-2 hover:text-orange-theme"><a href="#skills" class="list-2">Skills</a></li>
            <li class="mx-2 hover:text-orange-theme"><a href="#project" class="list-3">Project</a></li>
            <li class="mx-2 hover:text-orange-theme"><a href="#contact" class="list-4">Contact</a></li>
        </ul>

        <div class="flex items-center">
            {{-- talk --}}
            <div class="lets-talk-button text-sm py-[2px] px-2 border-2 border-black hover:bg-black hover:text-body transition duration-500 md-768:cursor-pointer">Let's Talk</div>

            {{-- list button --}}
            <div class="list-button pr-2 pl-3 h-8 bg flex flex-col justify-center items-center md-768:hidden">
                <div class="w-1 h-1 bg-orange-theme rounded-full my-[2px]"></div>
                <div class="w-1 h-1 bg-orange-theme rounded-full my-[2px]"></div>
                <div class="w-1 h-1 bg-orange-theme rounded-full my-[2px]"></div>
            </div>

            {{-- list navigation --}}
            <div class="list-navigation bg-gray-secondary border border-[#bdbdbd] shadow-black w-[130px] py-2 pl-3 absolute top-[53px] right-4 rounded-lg hidden ">
                <ul>
                    <li class=""><a href="#home" class="list-5 text-orange-theme">Home</a></li>
                    <li class=""><a href="#skills" class="list-6">Skills</a></li>
                    <li class=""><a href="#project" class="list-7">Project</a></li>
                    <li class=""><a href="#contact" class="list-8">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>