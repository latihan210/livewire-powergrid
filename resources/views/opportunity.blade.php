<x-layouts::home :title="__('Opportunity')">

    @include('partials.home.heading', [
    'title' => __('Opportunity'),
    'imgbg' => asset('assets/img/carousel-2.png')
    ])

    <div class="container-fluid bg-neutral-50 dark:bg-neutral-900 overflow-hidden py-24 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="flex flex-col lg:flex-row items-center gap-16 mx-lg-0">
                <div class="w-full lg:w-1/2 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0 px-4">
                        <h6 class="text-primary">Model Bisnis Hybrid</h6>
                        <h1 class="mb-4">Model Bisnis Hybrid</h1>
                        <p class="mb-4">Jagad Pesona Buana mengembangkan model bisnis hybrid yang menggabungkan metode
                            konvensional dan teknologi digital.</p>
                        <p class="mb-4">Pendekatan konvensional dilakukan melalui presentasi one-on-one, table talk,
                            seminar, dan pengembangan komunitas. Sementara itu, pemanfaatan teknologi digital dilakukan
                            melalui media sosial, aplikasi, landing page, dan sistem otomatisasi untuk mendukung
                            efektivitas
                            jaringan.</p>
                        <p class="mb-4">Model ini dirancang agar mitra dapat menjalankan bisnis secara fleksibel,
                            modern,
                            dan berkelanjutan.</p>
                        <flux:button href="{{ route('edukasi') }}" variant="primary"
                            class="rounded-full !px-12 !py-4 shadow-lg">
                            Lihat Program Edukasi
                        </flux:button>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                    <div class="relative min-h-[400px] px-4 md:px-0">
                        <img class="img-fluid w-full h-full rounded-[2.5rem] shadow-2xl"
                            src="{{ asset('assets/img/feature.png') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts::home>