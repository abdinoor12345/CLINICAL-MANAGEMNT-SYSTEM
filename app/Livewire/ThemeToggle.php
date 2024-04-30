<?php

namespace App\Livewire;

 
use Livewire\Component;

class ThemeToggle extends Component
{
    public $isDarkMode = false;

    public function toggleTheme()
    {
        $this->isDarkMode = !$this->isDarkMode;
        // You can store the theme preference in the database if needed
    }

    public function render()
    {
        return view('livewire.theme-toggle');
    }
}
