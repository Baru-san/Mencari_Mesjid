

<img
  src="images/Rectangle_62.png"
  alt="rectangle_62"
  class="xl:w-[450px] xl:h-[700px] lg:w-[400px] lg:h-[700px] md:w-[350px] md:h-[700px] md:block hidden object-cover rounded-lg"
/>


<div class="flex flex-col ">
    <div class="flex justify-center p-5">
    <h2 class="font-extrabold p-2  text-[24px] leading-[30.24px] text-white text-center border-2 rounded-xl">
        Jadwal Shalat
      </h2>
    </div>
    
<div class="relative overflow-x-auto xl:w-[650px] sm:w-full mx-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 h-[500px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Shalat
                </th>
                <th scope="col" class="px-6 py-3">
                    Waktu Azan
                </th>
                <th scope="col" class="px-6 py-3">
                    Waktu Shalat
                </th>

            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Shubuh
                </th>
                <td class="px-6 py-4">
                    {{ $azan['subuh'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $jadwal['subuh'] }}
                </td>

            </tr>
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Dzuhur
                </th>
                <td class="px-6 py-4">
                    {{ $azan['dzuhur'] }}

                </td>
                <td class="px-6 py-4">
                    {{ $jadwal['dzuhur'] }}
                </td>

            </tr>
            <tr class="bg-white hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ashar
                </th>
                <td class="px-6 py-4">
                    {{ $azan['ashar'] }}

                </td>
                <td class="px-6 py-4">
                    {{ $jadwal['ashar'] }}

                </td>


            </tr>
            <tr class="bg-white hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Maghrib
                </th>
                <td class="px-6 py-4">
                    {{ $azan['maghrib'] }}

                </td>
                <td class="px-6 py-4">
                    {{ $jadwal['maghrib'] }}

                </td>


            </tr>
            <tr class="bg-white hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Isya
                </th>
                <td class="px-6 py-4">
                    {{ $azan['isya'] }}

                </td>
                <td class="px-6 py-4">
                    {{ $jadwal['isya'] }}

                </td>


            </tr>
        </tbody>
    </table>
</div>

</div>
