<div href="#" class="flex flex-col items-center justify-start bg-[image-url] border border-gray-200 rounded-lg shadow md:flex-row md:w-[65%] md:h-[600px] dark:border-gray-700 dark:bg-gray-800"
   style="background-image: url('images/Rectangle_57.jpg'); background-repeat: no-repeat; background-size: cover; ">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
    <img 
    @auth
    class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[50%]  md:rounded-none md:rounded-l-lg md:mt-2 -mx-2" 
    src="{{ asset('images/Rectangle_61-1.png') }}"
    @else 
    class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[50%]  md:rounded-none md:rounded-l-lg md:mt-2 -mx-2 hidden md:block" 

    src="images/Rectangle_61.png"   
    @endauth
     
    alt="">
</div>
