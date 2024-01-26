<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreatePdf extends Component
{
    public function render(): View
    {
        return view('livewire.create-pdf');
    }
}
