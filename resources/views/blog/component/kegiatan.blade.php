<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<style>
    /*Overrides for Tailwind CSS */

    /*Form fields*/
    .dataTables_wrapper select,
    .dataTables_wrapper .dataTables_filter input {
        color: #4a5568;
        /*text-gray-700*/
        padding-left: 1rem;
        /*pl-4*/
        padding-right: 1rem;
        /*pl-4*/
        padding-top: .5rem;
        /*pl-2*/
        padding-bottom: .5rem;
        /*pl-2*/
        line-height: 1.25;
        /*leading-tight*/
        border-width: 2px;
        /*border-2*/
        border-radius: .25rem;
        border-color: #edf2f7;
        /*border-gray-200*/
        background-color: #edf2f7;
        /*bg-gray-200*/
    }

    /*Row Hover*/
    table.dataTable.hover tbody tr:hover,
    table.dataTable.display tbody tr:hover {
        background-color: #ebf4ff;
        /*bg-indigo-100*/
    }

    /*Pagination Buttons*/
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Current selected */
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Hover */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Add padding to bottom border */
    table.dataTable.no-footer {
        border-bottom: 1px solid #e2e8f0;
        /*border-b-1 border-gray-300*/
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    /*Change colour of responsive icon*/
    table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
        background-color: #667eea !important;
        /*bg-indigo-500*/
    }
        /* Slide animation */
        .slide-enter-active {
        transition: transform 0.5s ease-out;
    }

    .slide-enter-from {
        transform: translateY(-25%);
    }

    .slide-enter-to {
        transform: translateY(10%);
    }

    .slide-leave-active {
        transition: transform 0.5s ease-in;
    }

    .slide-leave-from {
        transform: translateY(0);
    }

    .slide-leave-to {
        transform: translateY(-10%);
    }
    
</style>

<div class="grid justify-center xs:gap-10 md:gap-20 pt-10 pb-10">
    <div class="flex flex-row xs:gap-10 md:gap-48">
        <a href="javascript:void(0);" onclick="toggleTable('table1');" class="flex flex-col items-center">
            <div style="position: relative; display: inline-block;">
                <img src="{{ asset('images/kegiatan/logo_lomba.svg') }}" alt="">
                <p style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;" class="bg-white rounded-t-2xl h-10 font-bold flex items-center justify-center">Lomba</p>
            </div>
        </a>
        <a href="javascript:void(0);" onclick="toggleTable('table2');" class="flex flex-col items-center">
            <div style="position: relative; display: inline-block;">
                <img src="{{ asset('images/kegiatan/logo_maulid.svg') }}" alt="">
                <p style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;" class="bg-white rounded-t-2xl h-10 font-bold flex items-center justify-center">Maulid</p>
            </div>
        </a>
    </div>
    <div class="flex flex-row xs:gap-10 md:gap-48">
        <a href="javascript:void(0);" onclick="toggleTable('table3');" class="flex flex-col items-center">
            <div style="position: relative; display: inline-block;">
                <img src="{{ asset('images/kegiatan/zikir_bersama.svg') }}" alt="">
                <p style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;" class="bg-white rounded-t-2xl h-10 font-bold flex items-center justify-center">Dzikir Bersama</p>
            </div>
        </a> 
        <a href="javascript:void(0);" onclick="toggleTable('table4');" class="flex flex-col items-center">
            <div style="position: relative; display: inline-block;">
                <img src="{{ asset('images/kegiatan/logo_zikirakbar.svg') }}" alt="">
                <p style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;" class="bg-white rounded-t-2xl h-10 font-bold flex items-center justify-center">Dzikir Akbar</p>
            </div>
        </a>
    </div>
</div>

<div id="table1" class="hidden pb-32">
    <section>
        <div>
            <h1 class="mb-8 text-xl flex justify-center mt-3 font-bold leading-none tracking-tight xl:text-3xl text-black ms-8">
                Daftar Kegiatan Lomba
            </h1>
        </div>

        <div>
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                    <table id="example1" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="2">Nama Kegiatan</th>
                                <th data-priority="1">Jadwal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $d)
                                @if ($d->jenis_kegiatan == 'lomba')
                                    <tr>
                                        <td>{{ $d->nama_kegiatan }}</td>
                                        <td>{{ $d->tanggal_kegiatan. '/ '. $d->Waktu }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        
                        </tbody>

                    </table>

                </div>
                <!--/Card-->
        </div>

    </section>
</div>

<div id="table2" class="hidden pb-32">
    <section>
        <div>
            <h1 class="mb-8 text-xl flex justify-center mt-3 font-bold leading-none tracking-tight xl:text-3xl text-black ms-8">
                Daftar Kegiatan Maulid
            </h1>
        </div>

        <div>
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                    <table id="example2" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="2">Nama Kegiatan</th>
                                <th data-priority="1">Jadwal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $d)
                                @if ($d->jenis_kegiatan == 'maulid')
                                    <tr>
                                        <td>{{ $d->nama_kegiatan }}</td>
                                        <td>{{ $d->tanggal_kegiatan. '/ '. $d->Waktu }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>

                    </table>

                </div>
                <!--/Card-->
        </div>

    </section>
</div>

<div id="table3" class="hidden pb-32">
    <section>
        <div>
            <h1 class="mb-8 text-xl flex justify-center mt-3 font-bold leading-none tracking-tight xl:text-3xl text-black ms-8">
                Daftar Kegiatan Dzikir Bersama
            </h1>
        </div>

        <div>
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                    <table id="example3" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="2">Nama Kegiatan</th>
                                <th data-priority="1">Jadwal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $d)
                            @if ($d->jenis_kegiatan == 'dzikir_bersama')
                                <tr>
                                    <td>{{ $d->nama_kegiatan }}</td>
                                    <td>{{ $d->tanggal_kegiatan. '/ '. $d->Waktu }}</td>
                                </tr>
                            @endif
                        @endforeach
                    
                        </tbody>

                    </table>

                </div>
                <!--/Card-->
        </div>

    </section>
</div>

<div id="table4" class="hidden pb-32">
    <section>
        <div>
            <h1 class="mb-8 text-xl flex justify-center mt-3 font-bold leading-none tracking-tight xl:text-3xl text-black ms-8">
                Daftar Kegiatan Dzikir Akbar
            </h1>
        </div>

        <div>
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                    <table id="example4" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="2">Nama Kegiatan</th>
                                <th data-priority="1">Jadwal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $d)
                            @if ($d->jenis_kegiatan == 'dzikir_akbar')
                                <tr>
                                    <td>{{ $d->nama_kegiatan }}</td>
                                    <td>{{ $d->tanggal_kegiatan. '/ '. $d->Waktu }}</td>
                                </tr>
                            @endif
                        @endforeach
                    
                        </tbody>

                    </table>

                </div>
                <!--/Card-->
        </div>

    </section>
</div>

<script>
    var activeTable = null; // Keep track of the active table

    function toggleTable(tableId) {
        var table = document.getElementById(tableId);

        if (table.classList.contains("hidden")) {
            if (activeTable !== null) {
                activeTable.classList.add("slide-leave-active", "slide-leave-to");
                setTimeout(function() {
                    activeTable.classList.remove("slide-leave-active", "slide-leave-to");
                    activeTable.classList.add("hidden");
                    table.classList.remove("hidden");
                    table.classList.add("slide-enter-active", "slide-enter-from");
                    setTimeout(function() {
                        table.classList.remove("slide-enter-from");
                        table.classList.add("slide-enter-to");
                    }, 50); // Adjust the delay if needed
                    activeTable = table;
                }, 500); // Adjust the delay if needed
            } else {
                table.classList.remove("hidden");
                table.classList.add("slide-enter-active", "slide-enter-from");
                setTimeout(function() {
                    table.classList.remove("slide-enter-from");
                    table.classList.add("slide-enter-to");
                }, 50); // Adjust the delay if needed
                activeTable = table;
            }
        } else {
            table.classList.remove("slide-enter-to");
            table.classList.add("slide-leave-active", "slide-leave-to");
            setTimeout(function() {
                table.classList.remove("slide-leave-active", "slide-leave-to");
                table.classList.add("hidden");
                activeTable = null;
            }, 500); // Adjust the delay if needed
        }
    }
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#example1').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });

    $(document).ready(function() {

var table = $('#example2').DataTable({
        responsive: true
    })
    .columns.adjust()
    .responsive.recalc();
});

$(document).ready(function() {

var table = $('#example3').DataTable({
        responsive: true
    })
    .columns.adjust()
    .responsive.recalc();
});

$(document).ready(function() {

var table = $('#example4').DataTable({
        responsive: true
    })
    .columns.adjust()
    .responsive.recalc();
});
</script>