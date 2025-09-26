# Nawasara Modal

Reusable modal package for Laravel (Blade & Livewire).

## Installation

1. Tambahkan ke composer:

```bash
composer require nawasara/modal
```

2. Publish views (opsional):

```bash
php artisan vendor:publish --provider="Nawasara\Modal\ModalServiceProvider"
```

## Penggunaan

### Modal Blade

```blade
<x-nawasara-modal::modal id="my-modal" title="Judul Modal">
    Konten modal di sini
    <x-slot:footer>
        <button @click="open = false">Tutup</button>
    </x-slot:footer>
</x-nawasara-modal::modal>
```

Buka modal dengan:

```html
<button @click="openModal('my-modal')">Open Modal</button>
```

### Modal Livewire (Universal)

```blade
<livewire:nawasara-modal.livewire-modal />
```

Buka modal Livewire dengan:

```js
openModal({
    id: 'modal-livewire',
    title: 'Judul',
    component: 'nama.livewire.component',
    params: { ... }
});
```
