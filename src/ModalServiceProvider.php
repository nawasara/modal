<?php

namespace Nawasara\Modal;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ModalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nawasara-modal');

        // Register Blade components
        \Illuminate\Support\Facades\Blade::component('nawasara-modal::components.modal', 'nawasara-modal');
        \Illuminate\Support\Facades\Blade::component('nawasara-modal::script', 'nawasara-modal-script');
        Livewire::component('nawasara-modal.livewire-modal', \Nawasara\Modal\Livewire\LivewireModal::class);
    }
}
