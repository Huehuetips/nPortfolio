<div>
    {{$isDarkMode}}
    <button wire:click="toggleTheme" id="theme-toggle" class="z-50 fixed right-6 md:bottom-10 bottom-10 rounded-full size-14 text-2xl bg-black dark:bg-white text-white dark:text-black ">
        @if($darkMode)
            <i class="ri-sun-line text-5xl"></i>
        @else
            <i class="ri-moon-line text-5xl"></i>
        @endif
    </button>
</div>

<script>
    const darkMode = @json(session('darkMode', false));

    if (darkMode) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
    const themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {
        // Cambia el estado del tema en el frontend
        document.body.classList.toggle('dark');
    });
</script>
