@extends('layouts.student_layout')

@section('content')
<section class="mt-12 max-w-6xl justify-center mx-auto px-5">
   <div class="flex mb-5">
      <p id="greeting" class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-violet-900 md:text-3xl">Selamat Datang</p>
      <p class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-violet-900 md:text-3xl">, {{ explode(' ', Auth::user()->name)[0] }}!</p>
   </div>
   <div class="flex flex-col sm:flex-row w-full mb-6">
         <div class="flex p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl">
            <div class="max-w-full px-3">
               <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-tl from-violet-400 to-pink-700 shadow-soft-2xl">
                  <p class="text-stone-50 text-lg font-semibold">
                     {{ substr(Auth::user()->name, 0, 1) }}
                     {{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                  </p>
               </div>
            </div>
            <div class="max-w-full px-3">
               <p class="mb-0 font-semibold leading-normal text-sm">{{ Auth::user()->name }}</p>
               <p class="mb-0 text-xs">{{ Auth::user()->email }}</p>
               <p class="mb-0 text-sm">Siswa</p>
            </div>
         </div>
         <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
            <div class="max-w-full h-16 px-3">
               <span id="clock" class="text-stone-700 text-3xl font-extrabold"></span>
            </div>
         </div>
   </div>
   <div class="flex flex-col sm:flex-row w-full mb-6">
      <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
         <div class="max-w-full h-16 px-3">
            <div class="flex items-center justify-between">
               <p class="mb-0 text-stone-700 leading-normal text-sm">Nilai Pre-Test</p>
               <!-- Button to toggle score visibility -->
               <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                  <p class="text-stone-700 leading-normal text-xs hover:underline">Lihat</p>
               </button>
            </div>
            <!-- Score container initially hidden -->
            <div class="score-container hidden">
                  <p class="mb-0 text-stone-700 font-extrabold text-3xl actual-score">60</p>
                  <p class="mb-0 text-stone-700 font-extrabold text-3xl hidden-score">***</p>
            </div>
         </div>
      </div>

      <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
         <div class="max-w-full h-16 px-3">
            <div class="flex items-center justify-between">
               <p class="mb-0 text-stone-700 leading-normal text-sm">Nilai Simulasi</p>
               <!-- Button to toggle score visibility -->
               <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                  <p class="text-stone-700 leading-normal text-xs hover:underline">Lihat</p>
               </button>
            </div>
            <!-- Score container initially hidden -->
            <div class="score-container hidden">
                  <p class="mb-0 text-stone-700 font-extrabold text-3xl actual-score">70</p>
                  <p class="mb-0 text-stone-700 font-extrabold text-3xl hidden-score">***</p>
            </div>
         </div>
      </div>

      <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
         <div class="max-w-full h-16 px-3">
            <div class="flex items-center justify-between">
               <p class="mb-0 text-stone-700 leading-normal text-sm">Nilai Post-Test</p>
               <!-- Button to toggle score visibility -->
               <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                  <p class="text-stone-700 leading-normal text-xs hover:underline">Lihat</p>
               </button>
            </div>
            <!-- Score container initially hidden -->
            <div class="score-container hidden">
                  <p class="mb-0 text-stone-700 font-extrabold text-3xl actual-score">80</p>
                  <p class="mb-0 text-stone-700 font-extrabold text-3xl hidden-score">***</p>
            </div>
         </div>
      </div>
   </div>

   <div class="py-12 mb-12 px-4 mx-auto text-center z-20 animate-up">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl">{{ explode(' ', Auth::user()->name)[0] }}</h1>
      <p class="mb-8 text-xl">Koleksi sumber bantuan</p>
   </div>
</section>
<script>
    const toggleScoreButtons = document.querySelectorAll('.toggle-score-button');
    
    toggleScoreButtons.forEach(button => {
        button.addEventListener('click', () => {
            const scoreContainer = button.closest('.score-card').querySelector('.score-container');
            const actualScore = scoreContainer.querySelector('.actual-score');
            const hiddenScore = scoreContainer.querySelector('.hidden-score');
            
            scoreContainer.classList.toggle('hidden');
            
            if (!scoreContainer.classList.contains('hidden')) {
                // If score is visible, hide the default score and show the actual score
                actualScore.classList.remove('hidden');
                hiddenScore.classList.add('hidden');
            }
        });
    });

   function updateClock() {
      const clockElement = document.getElementById('clock');
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const seconds = now.getSeconds().toString().padStart(2, '0');
      const timeString = `${hours}:${minutes}:${seconds}`;
      clockElement.textContent = timeString;
   }

   // Update the clock every second
   setInterval(updateClock, 1000);

   // Initial update
   updateClock();

</script>
@endsection
