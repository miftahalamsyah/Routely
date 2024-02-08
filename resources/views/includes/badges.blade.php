<!-- badges -->
<div id="badgesSection" class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    @forelse ($lencanas as $lencana)
        <div class="grid-cols-1 w-64 text-center">
            <img src="{{ asset('storage/lencana/' . $lencana->gambar_lencana) }}" alt="{{ $lencana->nama_lencana }}" class="h-64 w-64 object-contain shadow-soft-2xl rounded-2xl border-2" />
            <p class="mt-4 text-stone-700 text-sm font-semibold text-center">{{ $lencana->nama_lencana }}</p>
            <button class="mx-auto my-2 border border-violet-300 text-xs text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-semibold transition duration-300 ease-out bg-violet-200 rounded-xl hover:bg-violet-300">
                Pelajari Selengkapnya
            </button>
        </div>
    @empty
        <div></div>
    @endforelse
</div>
