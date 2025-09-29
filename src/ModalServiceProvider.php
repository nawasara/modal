<?php

namespace Nawasara\Modal;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ModalServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nawasara-modal');

        Livewire::component('nawasara-modal.livewire-modal', \Nawasara\Modal\Livewire\LivewireModal::class);
    }
}
