 <!-- resources/views/livewire/theme-toggle.blade.php -->
<div>
    <label for="themeToggle">Dark Mode</label>
    <input type="checkbox" id="themeToggle" wire:model="isDarkMode" wire:change="toggleTheme">

    <!-- You can add additional styling based on the theme -->
    <div class="{{ $isDarkMode ? 'dark-theme' : 'light-theme' }}">
        <!-- Your content goes here -->
    </div>
</div>
