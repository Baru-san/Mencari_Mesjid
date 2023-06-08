@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/ziswahStyle.css') }}">
@endsection

@section('body')
    class="bg-cyan-950"
@endsection

@section('content')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-4 text-white">Selamat Datang</h1>
    </div>
    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col place-items-start justify-start border border-gray-200 rounded-lg shadow md:flex-row md:w-[65%] md:h-[600px] dark:border-gray-700 dark:bg-gray-800"
            style="background-image: url('images/Rectangle_57.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Jenis Ziswah</span>
                    <div class="caret"></div>
                </div>
                <div>
                    <ul class="option">
                        <li>Zakat</li>
                        <li>Infaq</li>
                        <li>Sedekah</li>
                        <li>Wakaf</li>
                    </ul>
                </div>
                <div class=" mb-2 items-start" style="margin-left: 30px; margin-top: 20px;">
                    <div class="mb-2">
                        <label for="jumlah" class="block text-neutral-700 dark:text-neutral-200">Jumlah</label>
                    </div>
                    <div class="relative mb-4">
                        <input type="text" size="88" autofocus placeholder="Jumlah"
                            class="relative w-full rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                            id="jumlah" aria-describedby="basic-addon3" />
                    </div>
                </div>
                <div>
                    <label for="tglziswah" class="block text-sm font-medium text-gray-700">
                        Tanggal Ziswah
                    </label>
                    <div class="mt-1 md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input id="tglziswah" name="tglziswah" type="date" required class="form-control"
                            placeholder="Silahkan pilih tanggal" style="background-color: #EBF6F1;">
                    </div>
                </div>
                <script>
                    const dropdowns = document.querySelectorAll('.dropdown');

                    dropdowns.forEach(dropdown => {
                        const select = dropdown.querySelector('.select');
                        const caret = dropdown.querySelector('.caret');
                        const menuOption = dropdown.querySelector('.option');
                        const options = dropdown.querySelectorAll('.option li');
                        const selected = dropdown.querySelector('.selected');

                        select.addEventListener('click', () => {
                            select.classList.toggle('select-clicked');
                            caret.classList.toggle('caret-rotate');
                            menuOption.classList.toggle('option-open');
                        });

                        options.forEach(opt => {
                            opt.addEventListener('click', () => {
                                selected.innerText = opt.innerText;
                                select.classList.remove('select-clicked');
                                caret.classList.remove('caret-rotate');
                                menuOption.classList.remove('option-open');
                                options.forEach(option => {
                                    option.classList.remove('active');
                                });
                                opt.classList.add('active');
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <button class=" flex flex-col relative bottom-4 right-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-center">
        Lanjut
    </button>
@endsection
