<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home-user') }}"
            target="_blank">
            <span class="nav-link-text ms-1 text-center text me-2 d-flex align-items-center justify-content-center">
                <strong style="font-size: 1.5em;">PetClinic Finder</strong>
            </span>

        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                @if (!empty(auth()->user()->company))
                    <a class="nav-link {{ Route::currentRouteName() == 'home-company' ? 'active' : '' }}" href="{{ route('home-company') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard Companhia</span>
                    </a>
                @endif
                @if(empty(auth()->user()->company))
                    <a class="nav-link {{ Route::currentRouteName() == 'register-company' ? 'active' : '' }}" href="{{ route('register-company') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Deseja cadastrar uma Companhia?</span>
                    </a>
                @endif
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home-user' ? 'active' : '' }}" href="{{ route('home-user') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard Usuário</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user-profile-edit' ? 'active' : '' }}" href="{{ route('user-profile-edit') }}">
                <svg style="max-width: 20px; margin-right: 15px; margin-left:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/></svg>
                    <span class="nav-link-text ms-1">Perfil do Usuário</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
