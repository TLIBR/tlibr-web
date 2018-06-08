{{--
    Copyright 2018 The Lost Island : Battle Royale

    This file is part of TLIBR Web. TLIBR Web is distributed with the hope of
    attracting more community contributions to the core ecosystem of The Lost Island : Battle Royale.

    TLIBR Web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    TLIBR Web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.
    
    You should have received a copy of the GNU Affero General Public License
    along with TLIBR Web. If not, see <http://www.gnu.org/licenses/>.
--}}
<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark tlibr-navbar">
    <div class="container">
        <a class="navbar-brand mb-0 h1 font-italic" href="{{ route('home') }}">
            {{ config('app.name', 'The Lost Island : Battle Royale') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link{{ Request::is('/') ? ' active' : '' }}">home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news') }}" class="nav-link{{ Request::is('news') ? ' active' : '' }}">news</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link{{ Request::is('frequently-asked-question') ? ' active' : '' }}">faq</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('team') }}" class="nav-link{{ Request::is('our-team') ? ' active' : '' }}">team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" data-toggle="tooltip" data-placement="bottom" title="Coming Soon™">rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" data-toggle="tooltip" data-placement="bottom" title="Coming Soon™">report</a>
                </li>
            </ul>
        </div>
    </div>
</nav>