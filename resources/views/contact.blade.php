<x-layouts::home :title="__('Contact')">

    @include('partials.home.heading', [
    'title' => __('Contact'),
    'imgbg' => asset('assets/img/carousel-2.png')
    ])

    <!-- Kontak Info Start -->
    <div class="container-xxl py-24">
        <div class="container px-4">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Kontak Kami</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-center">
                <div class="wow fadeIn" data-wow-delay="0.1s">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-800 rounded-3xl p-8 text-center h-full border border-neutral-100 dark:border-neutral-700 shadow-sm">
                        <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fa fa-map-marker-alt text-white text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">Alamat Kantor</h5>
                        <p class="mb-0">Green Lake City<br>Rukan Crown Block E no 21<br>Cipondoh - Tangerang</p>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-800 rounded-3xl p-8 text-center h-full border border-neutral-100 dark:border-neutral-700 shadow-sm">
                        <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fab fa-whatsapp text-white text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">WhatsApp</h5>
                        <p class="mb-0">+62 8123-4567-890</p>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.5s">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-800 rounded-3xl p-8 text-center h-full border border-neutral-100 dark:border-neutral-700 shadow-sm">
                        <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fa fa-envelope text-white text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">Email</h5>
                        <p class="mb-0">admin@jpbuana.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak Info End -->

    <!-- Contact Start -->
    <div class="container-fluid bg-neutral-50 dark:bg-neutral-900 overflow-hidden px-lg-0 py-24">
        <div class="container contact px-lg-0">
            <div class="flex flex-col lg:flex-row items-stretch g-0 mx-lg-0">
                <div class="w-full lg:w-1/2 contact-text py-5 wow fadeIn px-4" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0 bg-white dark:bg-neutral-800 rounded-[2.5rem] p-8 md:p-12 shadow-xl">
                        <h6 class="text-primary text-2xl font-bold">Kirim Pesan</h6>
                        <h1 class="mb-4">Kami Siap Membantu Anda</h1>
                        <p class="mb-4">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan tentang produk
                            atau
                            peluang bisnis kami. Kami akan segera merespons pesan Anda.</p>
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="form-floating">
                                    <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus
                                        autocomplete="name" />
                                </div>
                                <div class="form-floating">
                                    <flux:input wire:model="email" :label="__('Email')" type="text" required
                                        autocomplete="email" />
                                </div>
                                <div class="md:col-span-2 form-floating">
                                    <flux:input wire:model="subject" :label="__('Subject')" type="text"
                                        autocomplete="subject" />
                                </div>
                                <div class="md:col-span-2 form-floating">
                                    <flux:textarea wire:model="pesan" :label="__('Pesan')" type="text"
                                        class="form-control !rounded-2xl border-neutral-200 focus:border-primary"
                                        placeholder="Tulis pesan Anda di sini" id="message" style="height: 150px">
                                    </flux:textarea>
                                </div>
                                <div class="md:col-span-2">
                                    <flux:button variant="primary" type="submit"
                                        class="w-full md:w-auto rounded-full !px-12 !py-4 shadow-lg transition-transform hover:scale-105 active:scale-95">
                                        Kirim Pesan
                                    </flux:button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pe-lg-0 py-5" style="min-height: 450px;">
                    <div class="relative h-full px-4 md:px-0">
                        <iframe class="w-full h-full rounded-[2.5rem] shadow-2xl border-0" style="min-height: 450px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.591424568914!2d106.70130067489937!3d-6.185396860604089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f900297dcee5%3A0xb1775a08592146f3!2sPT.%20Jagad%20Pesona%20Buana!5e0!3m2!1sid!2sid!4v1772474918787!5m2!1sid!2sid"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</x-layouts::home>