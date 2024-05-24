@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Daftar Kategori Tes</h1>
    </div>
    <div class="bg-stone-800 border border-stone-600 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <button class="bg-violet-700 my-2 p-2 rounded-xl hover:bg-violet-600"><a href="{{ route('kategori-tes.create') }}" class="text-md text-stone-100 font-semibold p-2">Tambah Kategori Tes</a></button>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-600 text-stone-300">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Kategori Tes
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Waktu
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Passcode
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-600">
                                    @forelse ($kategoriTests as $kategoriTest)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap hover:bg-stone-500">
                                                <a href="{{ route('kategori-tes.show', $kategoriTest) }}" class="hover:underline">
                                                    {{ $kategoriTest->kategori_tes }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $kategoriTest->waktu_tes }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $kategoriTest->status_tes == 1 ? 'Dibuka' : 'Belum Dibuka' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $kategoriTest->passcode }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end">
                                                    <a href="{{ route('kategori-tes.show', $kategoriTest->id) }}" class="text-stone-300 hover:text-student">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g><path d="M51.8,25.1C47.1,15.6,37.3,9,26,9S4.9,15.6,0.2,25.1c-0.3,0.6-0.3,1.3,0,1.8C4.9,36.4,14.7,43,26,43 s21.1-6.6,25.8-16.1C52.1,26.3,52.1,25.7,51.8,25.1z M26,37c-6.1,0-11-4.9-11-11s4.9-11,11-11s11,4.9,11,11S32.1,37,26,37z"/><path d="M26,19c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S29.9,19,26,19z"/></g></svg>
                                                    </a>
                                                    <a href="{{ route('kategori-tes.edit', $kategoriTest->id) }}" class="text-stone-300 hover:text-violet-500">
                                                        <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                    </a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kategori-tes.destroy', $kategoriTest->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-stone-300 hover:text-red-900">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z" fill="currentColor"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-800 text-stone-300 p-2 rounded-xl">
                                                    Data Kategori Tes tidak tersedia.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
