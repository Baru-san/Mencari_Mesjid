<div href="#" class="flex flex-col items-center justify-start bg-[image-url] border border-gray-200 rounded-lg shadow xs:flex-row xs:w-[65%] md:h-[600px] xs:h-[300px]"
   style="background-image: url('images/Rectangle_57.jpg'); background-repeat: no-repeat; background-size: cover; "> 
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 md:text-2xl sm:text-base  font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
        <p class="mb-3 font-normal xs:text-sm text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
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
