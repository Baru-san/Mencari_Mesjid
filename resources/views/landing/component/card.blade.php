<div href="#" class="flex flex-col items-center justify-start bg-[image-url] border border-gray-200 rounded-lg shadow xs:flex-row xs:w-[65%] md:h-[600px] xs:h-[300px]"
   style="background-image: url('images/Rectangle_57.jpg'); background-repeat: no-repeat; background-size: cover; "> 
    <div class="flex flex-col justify-between md:p-4 xs:p-2 leading-normal">
        <h2 class="font-sans md:mb-3 xs:mb-1 md:text-3xl xs:text-lg font-bold tracking-tight text-cyan-950">Selamat Datang</h2>
        <h2 class="font-sans mb-2 md:text-5xl xs:text-xl font-extrabold tracking-tight text-indigo-500">Cari Masjid</h2>
        <p class="mb-3 md:text-base xs:text-xs text-gray-700">Website Cari Masjid adalah sebuah website yang menghubungkan antara pengurus mesjid dengan jamaah masjid sehingga dapat saling berbagi informasi dan saling membantu memfasilitasi. </p>
    </div>
    <img 
    @auth
    class="object-cover w-full rounded-t-lg xl:h-[102%] xl:w-[50%] md:w-[50%] sm:w-[35%] xs:w-[50%] xs:h-[102%] lg:h-[102%] md:h-[102%]  md:rounded-none md:rounded-l-lg xs:mt-1 md:mt-2 -mx-2" 
    src="{{ asset('images/Rectangle_61-1.png') }}"
    @else 
    class="object-cover w-full rounded-t-lg xl:h-[102%] xl:w-[50%] md:w-[50%] sm:w-[35%] xs:w-[50%] xs:h-[102%] lg:h-[102%] md:h-[102%]  md:rounded-none md:rounded-l-lg xs:mt-1 md:mt-2 -mx-2" 

    src="images/Rectangle_61.png"   
    @endauth
     
    alt="">
</div>
