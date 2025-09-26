<?php

namespace Nawasara\Modal\Livewire;

use Livewire\Component;

class LivewireModal extends Component
{
    public $id;
    public $open = false;
    public $title = '';
    public $component = null;
    public $params = [];

    public function load($payload)
    {
        $this->title = $payload['title'] ?? '';
        $this->component = $payload['component'] ?? null;
        $this->params = $payload['params'] ?? [];
    }

    public function render()
    {
        return view('nawasara-modal::livewire.livewire-modal');
    }
}
