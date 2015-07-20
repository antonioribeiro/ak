@if ($current_user)
    <li class="dropdown active">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $current_user->present()->fullName }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
            <li><a href="{{ route('connections') }}">Convidar Pessoas</a></li>
            <li><a href="{{ route('password') }}">Alterar Senha</a></li>
        </ul>
    </li>
@endif
