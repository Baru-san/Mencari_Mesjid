<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Terimakasih Karena sudah mendaftar! Sebelum itu, Anda perlu melakukan Verivikasi email anda terlebih. Jika masih belum menerima email Tekan kirim kembali Email verifikasi') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Link verivikasi telah dikirimkan ke email yang anda daftarkan.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Kirim Kembali email verifikasi') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
