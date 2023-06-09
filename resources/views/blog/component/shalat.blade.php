<div class="flex flex-col ">
    <div class="flex justify-center p-5">
    <h2 class="font-extrabold p-2  text-[24px] leading-[30.24px] text-gray-700 text-center border-2 rounded-xl">
        Jadwal Shalat Wajib
      </h2>
    </div>
    
<div class="relative overflow-x-auto xl:w-[650px] sm:w-full mx-auto shadow-md xs:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 h-[500px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-400 ">
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
        <tbody class="">
            <tr class="bg-gray-200 border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Shubuh
                </th>
                <td class="px-6 py-4">
                    @if ($azan == null)
                        
                    @else
                    {{ $azan['subuh'] }}

                    @endif
                </td>
                <td class="px-6 py-4">
                    @if ($jadwal == null)
                        
                    @else
                    {{ $jadwal['subuh'] }}

                    @endif
                </td>

            </tr>
            <tr class="bg-gray-200 border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Dzuhur
                </th>
                <td class="px-6 py-4">
                    @if ($azan == null)
                        
                    @else
                    {{ $azan['dzuhur'] }}

                    @endif
                </td>
                <td class="px-6 py-4">
                    @if ($jadwal == null)
                        
                    @else
                    {{ $jadwal['dzuhur'] }}

                    @endif
                </td>

            </tr>
            <tr class="bg-gray-200  hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ashar
                </th>
                <td class="px-6 py-4">
                    @if ($azan == null)
                        
                    @else
                    {{ $azan['ashar'] }}

                    @endif
                </td>
                <td class="px-6 py-4">
                    @if ($jadwal == null)
                        
                    @else
                    {{ $jadwal['ashar'] }}

                    @endif
                </td>


            </tr>
            <tr class="bg-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Maghrib
                </th>
                <td class="px-6 py-4">
                    @if ($azan == null)
                        
                    @else
                    {{ $azan['maghrib'] }}

                    @endif
                </td>
                <td class="px-6 py-4">
                    @if ($jadwal == null)
                        
                    @else
                    {{ $jadwal['maghrib'] }}

                    @endif
                </td>


            </tr>
            <tr class="bg-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Isya
                </th>
                <td class="px-6 py-4">
                    @if ($azan == null)
                        
                    @else
                    {{ $azan['isya'] }}

                    @endif
                </td>
                <td class="px-6 py-4">
                    @if ($jadwal == null)
                        
                    @else
                    {{ $jadwal['isya'] }}

                    @endif
                </td>


            </tr>
        </tbody>
    </table>
</div>

<div class="flex flex-col mt-5">
    <div class="flex justify-center p-5">
    <h2 class="font-extrabold p-2  text-[24px] leading-[30.24px] text-gray-700 text-center border-2 rounded-xl">
        Jadwal Shalat Jumat
      </h2>
    </div>
    
<div class="relative overflow-x-auto xl:w-[650px] sm:w-full mx-auto shadow-md xs:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 h-[500px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tanggal
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


            @foreach ($azanJumat as $d)
            <tr class="bg-white border-b hover:bg-gray-50">

            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                
                {{ $d['tanggal'] }}
            </th>
                <td class="px-6 py-4">
                    {{ $d['azanjumat'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $d['dzuhur'] }}
                </td>
            </tr>
            @endforeach

    </table>
</div>

<div class="flex flex-col mt-5">
    <div class="flex justify-center p-5">
    <h2 class="font-extrabold p-2  text-[24px] leading-[30.24px] text-gray-700 text-center border-2 rounded-xl">
        Jadwal Shalat Taraweh
      </h2>
    </div>
    
<div class="relative overflow-x-auto xl:w-[650px] sm:w-full mx-auto shadow-md xs:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 h-[500px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Imam
                </th>
                <th scope="col" class="px-6 py-3">
                    Khatib
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shalat_khusus as $d)
                @if ($d->jenis_shalat == 'taraweh')
                <tr>
                    <th>
                        {{ $d->imam }}
                    </th>
                    <th>
                        {{ $d->khatib }}
                    </th>
                    <th>
                        {{ $d->tanggal }}
                    </th>
                </tr>
                @endif

            @endforeach
        </tbody>
    </table>
</div>

<div class="flex flex-col mt-5 mb-5">
    <div class="flex justify-center p-5">
    <h2 class="font-extrabold p-2  text-[24px] leading-[30.24px] text-gray-700 text-center border-2 rounded-xl">
        Jadwal Shalat Ied
      </h2>
    </div>
    
<div class="relative overflow-x-auto xl:w-[650px] sm:w-full mx-auto shadow-md xs:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 h-[500px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Imam
                </th>
                <th scope="col" class="px-6 py-3">
                    Imam
                </th>
                <th scope="col" class="px-6 py-3">
                    khatib
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($shalat_khusus as $d)
            @if ($d->jenis_shalat == 'Idul Fitri' || $d->jenis_shalat == 'Idul Adha')
            <tr>
                <th>
                    {{ $d->imam }}
                </th>
                <th>
                    {{ $d->khatib }}
                </th>
                <th>
                    {{ $d->tanggal }}
                </th>
            </tr>
            @endif

        @endforeach
        </tbody>
    </table>
</div>