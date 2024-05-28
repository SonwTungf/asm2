<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{$_ENV['BASE_URL_ADMIN']}}">LuxChill</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{$_ENV['BASE_URL_ADMIN']}}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="active">
                <a class="nav-link" href="{{$_ENV['BASE_URL_ADMIN']}}">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Manager</li>
            <li>
                <a class="nav-link" href="{{ $_ENV['BASE_URL_ADMIN'] . 'users' }}">
                    <i class="fas fa-pencil-ruler"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ $_ENV['BASE_URL_ADMIN'] . 'posts' }}">
                    <i class="fas fa-pencil-ruler"></i>
                    <span>Posts</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ $_ENV['BASE_URL_ADMIN'] . 'categories' }}">
                    <i class="fas fa-pencil-ruler"></i> 
                    <span>Categorys</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ $_ENV['BASE_URL_ADMIN'] . 'tags' }}">
                    <i class="fas fa-pencil-ruler"></i> 
                    <span>Tags</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ $_ENV['BASE_URL_ADMIN'] . 'comments' }}">
                    <i class="fas fa-pencil-ruler"></i> 
                    <span>Comments</span>
                </a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://github.com/luxchill" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>