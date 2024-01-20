<section class="bottom-0 z-20 relative">
    <div class="p-10 w-full z-20 mx-autp align-center justify-center top-0 left-0">
        <a href="/" class="flex items-center mx-auto justify-center align-center">
            <svg class="" width="20" height="20" fill="#f1f1f1" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
            <span class="text-stone-50 px-2 text-xl font-extrabold whitespace-nowrap">Routely</span>
        </a>
        <span id="copyright" class="copyright block font-semibold text-stone-50 text-sm text-center"></span>
    </div>
</section>

<script>
    function updateCopyrightYear() {
        var currentYear = new Date().getFullYear();
        document.getElementById('copyright').innerText = '© ' + currentYear;
    }

    // Call the function to set the initial value
    updateCopyrightYear();
</script>
