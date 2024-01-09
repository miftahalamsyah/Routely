<!--badges-->
<div id="badgesSection" class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    @forelse ($lencanas as $lencana)
        <img src="{{ asset('storage/lencana/' . $lencana->gambar_lencana) }}" alt="{{ $lencana-> nama_lencana }}" class="w-full h-64 object-contain shadow-soft-2xl rounded-2xl" />
    @empty
        <div></div>
    @endforelse
</div>
