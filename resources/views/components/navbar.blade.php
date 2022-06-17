@auth
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-success me-2 active" aria-current="page" href="#">Нов документ</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-success me-2" href="#">Проверка</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-success me-2" href="#">Документи</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="btn btn-outline-success me-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Номенклатури
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if(auth()->user()->level > 10)
                            <li><a class="dropdown-item" href="/contragents">Контрагенти</a></li>
                            <li><a class="dropdown-item" href="/banks">Банки</a></li>
                        @endif
                      </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="btn btn-outline-success me-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->username}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if(auth()->user()->level > 10)
                        <li><a class="dropdown-item" href="/users">Потребители</a></li>
                        <li><a class="dropdown-item" href="/createuser">Нов потребител</a></li>
                        <hr/>
                        @endif
                        <li><a class="dropdown-item" href="/logout"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Изход
                            </a>
                            <form id="logout-form" action="/logout" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
</div>
@endauth




