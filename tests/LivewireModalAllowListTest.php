<?php

namespace Nawasara\Modal\Tests;

use Nawasara\Modal\Livewire\LivewireModal;
use PHPUnit\Framework\TestCase;

/**
 * Modal hanya boleh me-mount komponen yang didaftarkan. Sebelum ini nama
 * komponen dari browser diterima apa adanya, sehingga user mana pun dapat
 * me-mount komponen yang seharusnya dilindungi izin route.
 */
class LivewireModalAllowListTest extends TestCase
{
    public function test_komponen_terdaftar_diizinkan(): void
    {
        LivewireModal::allow('paket.contoh.form');

        $this->assertTrue(LivewireModal::isAllowed('paket.contoh.form'));
    }

    public function test_komponen_tak_terdaftar_ditolak(): void
    {
        $this->assertFalse(LivewireModal::isAllowed('nawasara-audit.impersonation-log.section.table'));
        $this->assertFalse(LivewireModal::isAllowed(''));
        $this->assertFalse(LivewireModal::isAllowed(null));
    }
}
