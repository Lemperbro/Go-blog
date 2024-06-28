@props(['navigate' => true])

<a {{ $navigate ? 'wire:navigate' : '' }}  href=""></a>