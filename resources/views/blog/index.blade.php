@extends('layouts.app')

@section('body')
    class="bg-cyan-950"
 
@endsection

@section('content')



    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3 mx-auto">

            <article class="flex flex-col shadow my-4 xs:w-[108%]">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75 w-full ">
                    <img src="{{ asset($masjid->Mosque_image_url) }}" class="w-full max-h-96 object-cover" style="border-radius: 25px 25px 0 0">
                </a>
                <div class="bg-white flex flex-col justify-start rounded-lg p-3" style="border-radius: 0 0 25px 25px; background-image: url('{{ asset('images/Rectangle_57.jpg') }}'); background-repeat: repeat-y">
                    

                    
                    <a href="#" class="md:text-3xl xs:text-xl font-bold hover:text-gray-700 pb-4 items-center justify-center flex">{{ $masjid->name }}</a>
                    <p href="#" class="text-sm md:ml-10">
                        Takmir:  <p href="#" class="font-semibold hover:text-gray-800 md:ml-10">{{ $masjid->PenanggungJawab1 }}</p>
                                <p href="#" class="font-semibold hover:text-gray-800 md:ml-10">{{ $masjid->PenanggungJawab2 }}</p>
                                <p href="#" class="font-semibold hover:text-gray-800 md:ml-10">{{ $masjid->PenanggungJawab3  }}</p>
                    </p>
                    <p href="#" class="text-sm md:ml-10 mt-3">Alamat: 
                        <p href="#" class="font-semibold hover:text-gray-800 md:ml-10 mb-10">{{ $masjid->alamat  }}</p>
                    </p>

                    <div class=" flex flex-wrap md:gap-7 xs:gap-2 xs:px-1 mx-auto bg-blue-700 rounded-lg mb-5">
                        <div class="hover:bg-gray-300 md:p-3 xs:p-1 rounded-lg {{ ($title === "Sejarah".$id) ? 'bg-blue-900' : '' }}">             
                        <a href="/profilMasjid/sejarah/{{ $id }}" class="text-white hover:text-black text-sm md:font-bold xs:font-semibold uppercase rounded-lg h-fit ">Sejarah</a>
                        </div>
                        <div class="hover:bg-gray-300 md:p-3 xs:p-1  rounded-lg {{ ($title === "Kajian".$id) ? 'bg-blue-900' : '' }}" >
                        <a href="/profilMasjid/kajian/{{ $id }}" class="text-white hover:text-black text-sm md:font-bold uppercase xs:font-semibold rounded-lg h-fit">Kajian</a>
                        </div>
                        <div class="hover:bg-gray-300 md:p-3 xs:p-1  rounded-lg {{ ($title === "Kegiatan".$id) ? 'bg-blue-900' : '' }}">
                        <a href="/profilMasjid/kegiatan/{{ $id }}" class="text-white hover:text-black text-sm md:font-bold uppercase xs:font-semibold rounded-lg h-fit">Kegiatan</a>
                        </div>
                        <div class="hover:bg-gray-300 md:p-3 xs:p-1  rounded-lg {{ ($title === "Shalat".$id) ? 'bg-blue-900' : '' }}" >
                        <a href="/profilMasjid/shalat/{{ $id }}" class="text-white hover:text-black text-sm md:font-bold uppercase xs:font-semibold rounded-lg h-fit">Shalat</a>
                        </div>
                        <div class="hover:bg-gray-300 md:p-3 xs:p-1  rounded-lg {{ ($title === "Ziswaf".$id) ? 'bg-blue-900' : '' }}">
                        <a href="/profilMasjid/ziswaf/{{ $id }}" class="text-white hover:text-black text-sm md:font-bold uppercase xs:font-semibold rounded-lg h-fit">Ziswaf</a>
                            </div>
                    </div>

                    @if ($title == 'Sejarah'.$id)
                    @include('blog.component.sejarah')

                    @elseif($title == 'Kajian'.$id)
                        @include('blog.component.kajian')

                    @elseif($title == 'Shalat'.$id)
                        @include('blog.component.shalat')
                    @elseif($title == 'Kegiatan'.$id)
                        @include('blog.component.kegiatan')
                    @endif

                    
            </article>

            {{-- <div class="w-full flex pt-6">
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                    <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                </a>
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                </a>
            </div> --}}

            {{-- <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                    <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start">
                    <p class="font-semibold text-2xl">David</p>
                    <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna.</p>
                    <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                        <a class="" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

        </section>

        {{-- <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                </a>
            </div>

        </aside> --}}

    </div>

    {{-- <footer class="w-full border-t bg-white pb-12">
        <div
            class="relative w-full flex items-center invisible md:visible md:pb-12"
            x-data="getCarouselData()"
        >
            <button
                class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
                x-on:click="decrement()">
                &#8592;
            </button>
            <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                <img class="w-1/6 hover:opacity-75" :src="image">
            </template>
            <button
                class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
                x-on:click="increment()">
                &#8594;
            </button>
        </div>
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; myblog.com</div>
        </div>
    </footer> --}}

    {{-- <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script> --}}

 
@endsection