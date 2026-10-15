<?php

namespace Nawasara\Modal\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

/**
 * Modal yang me-mount komponen Livewire lain berdasarkan nama.
 *
 * ⚠️ HANYA komponen yang didaftarkan lewat allow() yang boleh dimuat.
 *
 * Sebelum 15 Oktober 2026 nama komponen dan parameternya diterima apa adanya
 * dari browser. User mana pun yang login dapat me-mount komponen APA PUN, dan
 * komponen yang hanya dilindungi PermissionMiddleware di route (log
 * impersonation, log akses Vault, export) ikut terbuka: middleware route
 * tidak berjalan untuk komponen yang di-mount dengan cara ini (audit keamanan,
 * temuan K3).
 *
 * Komponen yang didaftarkan tetap WAJIB memeriksa izinnya sendiri di mount().
 * Daftar ini membatasi APA yang dapat dimuat, bukan SIAPA yang boleh.
 */
class LivewireModal extends Component
{
    /** @var array<string, true> */
    protected static array $allowed = [];

    public $id;

    public $open = false;

    #[Locked]
    public $title = '';

    #[Locked]
    public $component = null;

    #[Locked]
    public $params = [];

    /** Dipanggil dari service provider paket pemilik komponen. */
    public static function allow(string ...$components): void
    {
        foreach ($components as $name) {
            static::$allowed[$name] = true;
        }
    }

    public static function isAllowed(?string $component): bool
    {
        return $component !== null && isset(static::$allowed[$component]);
    }

    public function load($payload)
    {
        $component = is_array($payload) ? ($payload['component'] ?? null) : null;

        if (! is_string($component) || ! static::isAllowed($component)) {
            abort(403);
        }

        $params = $payload['params'] ?? [];

        $this->title = is_string($payload['title'] ?? null) ? $payload['title'] : '';
        $this->component = $component;
        $this->params = is_array($params) ? $params : [];
    }

    public function render()
    {
        // Pertahanan kedua: properti yang entah bagaimana berisi nama di luar
        // daftar tidak pernah sampai ke dynamic-component.
        if ($this->component !== null && ! static::isAllowed($this->component)) {
            $this->component = null;
            $this->params = [];
        }

        return view('nawasara-modal::livewire.livewire-modal');
    }
}
