    
 <div class="container">

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
            @if($url == "/cabinet")
                <li role="presentation" class="active"><a href="/cabinet">Личные данные</a></li>
                @else
                <li role="presentation"><a href="/cabinet">Личные данные</a></li>
            @endif
            @if($url == "/cabinet/new-advert")
                <li role="presentation" class="active"><a href="/cabinet/new-advert">Подать обьявление</a></li>
                @else
                <li role="presentation"><a href="/cabinet/new-advert">Подать обьявление</a></li>
            @endif
            @if($url == "/cabinet/favorite")
                <li role="presentation" class="active"><a href="/cabinet/favorite">Избранное</a></li>
                @else
                <li role="presentation"><a href="/cabinet/favorite">Избранное</a></li>
            @endif
            @if($url == "/cabinet/my-adverts")
                <li role="presentation" class="active"><a href="/cabinet/my-adverts">Мои обьявления</a></li>
                @else
                <li role="presentation"><a href="/cabinet/my-adverts">Мои обьявления</a></li>
            @endif
            @can('view', Auth::user())
                <li role="presentation"><a href="/dashboard">Панель администратора</a></li>
            @endcan
        </ul>
        
        <hr>
        <div class="dropdown">
        
            <form action="/logout" method="GET">
                @csrf
                <input type="submit" value="Выйти">
            </form>
        
        </div>
    </div>

</div>
<script src="/assets/sidebar/sidebars.js"></script>
