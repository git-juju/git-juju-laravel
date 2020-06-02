<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{url('/')}}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('users.show', Auth::user()) }}">个人中心</a>
                        <a class="dropdown-item" href="#">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
{{--                                {{ method_field() }}--}}
                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                            </form>
                        </a>
                    </div>
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('help')}}">帮助</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="{{url('login')}}">登录</a>
            </li>
                @endif
        </ul>
    </div>
</nav>
