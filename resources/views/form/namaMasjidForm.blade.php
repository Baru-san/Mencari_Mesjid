@extends('layouts.app')

@section('body')
    class="bg-cyan-950"
@endsection

@section('content')

<div class="flex items-center justify-center h-screen">
    <div class="flex flex-col place-items-start justify-start border border-gray-200 rounded-lg shadow md:flex-row md:w-[65%] md:h-[600px] dark:border-gray-700 dark:bg-gray-800"
        style="background-image: url('images/Rectangle_57.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="p-4 mb-2 items-start"
            style="margin-left: 30px; margin-top: 20px;">
            <div class="mb-2">
                <label for="basic-url" class="block text-neutral-700 dark:text-neutral-200">Nama Masjid</label>
            </div>
            <div class="relative mb-4">
                <input type="text" size="88" maxlength="6" autofocus placeholder="Nama Masjid"
                    class="relative w-full rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                    id="basic-url" aria-describedby="basic-addon3" />
            </div>
            <div class="mb-2">
                <label for="basic-url" class="block text-neutral-700 dark:text-neutral-200">Sejarah</label>
            </div>
            <div class="relative mb-4">
                <textarea name="sejarah" rows=4 cols=20 type="text" size="88" maxlength="6" autofocus placeholder="Sejarah"
                    class="relative w-full rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                    style="resize: none"
                    id="basic-url" aria-describedby="basic-addon3" />
                </textarea>
            </div>
        </div>
    </div>
</div> 

@endsection
