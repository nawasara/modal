# Nawasara Modal

Reusable Blade and Livewire modal component for Laravel applications.

## Installation

```bash
composer require nawasara/modal
```

Auto-discovered. Optionally publish the views to override the defaults:

```bash
php artisan vendor:publish --provider="Nawasara\Modal\ModalServiceProvider"
```

## Usage

### Blade modal

```blade
<x-nawasara-modal::modal id="my-modal" title="Modal Title">
    Modal content goes here.

    <x-slot:footer>
        <button @click="open = false">Close</button>
    </x-slot:footer>
</x-nawasara-modal::modal>
```

Open the modal from anywhere on the page:

```html
<button @click="openModal('my-modal')">Open modal</button>
```

### Livewire modal (universal)

Drop the universal modal once in your layout:

```blade
<livewire:nawasara-modal.livewire-modal />
```

Then open any Livewire component inside it:

```js
openModal({
    id: 'modal-livewire',
    title: 'Title',
    component: 'your.livewire.component',
    params: { /* ... */ }
});
```

## Author

**Pringgo J. Saputro** &lt;odyinggo@gmail.com&gt;

## License

MIT
