<div>
    <nav class="client-nav">
        <p>Navigation</p>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}">Mon profil</a>
            </li>
            <x-nav-link link="#"  x-data="{ open: false }" sousMenus="true">
                <a x-on:click="open = !open; $event.preventDefault();">
                    Mon arc
                    <span class="chevron" x-bind:class="{'chevron-rotated': open}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </a>
                <ul x-show="open" x-cloak class="submenu">
                    @foreach ($sousMenus as $index => $sousMenu)
                        <li>
                            @if ($sousMenu['nom'] === '+ Ajouter un arc')
                                <a href="#" wire:click.prevent="ajouterArc">
                                    <span>
                                        <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.38849 7.82916C3.1782 7.60136 3.1782 7.232 3.38849 7.0042L5.70005 4.50001L3.38849 1.99582C3.1782 1.76801 3.1782 1.39866 3.38849 1.17085C3.59876 0.943049 3.93971 0.943049 4.14998 1.17085L6.84229 4.08753C7.05256 4.31534 7.05256 4.68469 6.84229 4.91248L4.14998 7.82916C3.93971 8.05695 3.59876 8.05695 3.38849 7.82916Z" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.15771 7.82916C-0.0525701 7.60136 -0.0525701 7.232 0.15771 7.0042L2.46928 4.50001L0.15771 1.99582C-0.0525701 1.76801 -0.0525701 1.39866 0.15771 1.17085C0.367996 0.943049 0.708929 0.943049 0.919215 1.17085L3.61152 4.08753C3.82179 4.31534 3.82179 4.68469 3.61152 4.91248L0.919215 7.82916C0.708929 8.05695 0.367996 8.05695 0.15771 7.82916Z" fill="white"/>
                                            <path d="M10.9444 1L16 4.5M16 4.5L10.9444 8M16 4.5H3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    {{ $sousMenu['nom'] }}
                                </a>
                            @else
                                <a href="{{$sousMenu['link']}}">
                                    <span>
                                        <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.38849 7.82916C3.1782 7.60136 3.1782 7.232 3.38849 7.0042L5.70005 4.50001L3.38849 1.99582C3.1782 1.76801 3.1782 1.39866 3.38849 1.17085C3.59876 0.943049 3.93971 0.943049 4.14998 1.17085L6.84229 4.08753C7.05256 4.31534 7.05256 4.68469 6.84229 4.91248L4.14998 7.82916C3.93971 8.05695 3.59876 8.05695 3.38849 7.82916Z" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.15771 7.82916C-0.0525701 7.60136 -0.0525701 7.232 0.15771 7.0042L2.46928 4.50001L0.15771 1.99582C-0.0525701 1.76801 -0.0525701 1.39866 0.15771 1.17085C0.367996 0.943049 0.708929 0.943049 0.919215 1.17085L3.61152 4.08753C3.82179 4.31534 3.82179 4.68469 3.61152 4.91248L0.919215 7.82916C0.708929 8.05695 0.367996 8.05695 0.15771 7.82916Z" fill="white"/>
                                            <path d="M10.9444 1L16 4.5M16 4.5L10.9444 8M16 4.5H3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    {{ $sousMenu['nom'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </x-nav-link>
            <x-nav-link link="">Mes fleches</x-nav-link>
            <x-nav-link link="">Mes entrainements</x-nav-link>
            <x-nav-link link="">Mes feuilles de marques</x-nav-link>
        </ul>
    </nav>
</div>
