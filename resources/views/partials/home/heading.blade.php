<div class="relative w-full h-[300px] md:h-[400px] flex items-center mb-0 overflow-hidden"
    style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ $imgbg }}') center center no-repeat; background-size: cover;">
    <div class="container mx-auto px-4 z-10">
        <h1
            class="text-4xl md:text-6xl font-extrabold text-white mb-4 tracking-tight animate-in slide-in-from-bottom duration-700">
            {{ $title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="flex items-center space-x-2 text-white/80 text-sm md:text-base font-medium">
                <li class="hover:text-white transition-colors"><a href="/">Beranda</a></li>
                <li class="before:content-['/'] before:mx-2 before:text-white/40 active text-white" aria-current="page">
                    {{ $title }}</li>
            </ol>
        </nav>
    </div>
</div>