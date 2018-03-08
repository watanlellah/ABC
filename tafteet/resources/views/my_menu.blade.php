<html>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Styles -->
<style>

    .navbar-inverse { background-color: #4040A1}
    .navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { background-color: #FF0D0D}
    .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { background-color: #BA0909}
    .dropdown-menu { background-color: #91478F}
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-color: #4218CA}
    .navbar-inverse { background-image: none; }
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-image: none; }
    .navbar-inverse { border-color: #080808}
    .navbar-inverse .navbar-brand { color: #fcfcfc
    }
    .navbar-inverse .navbar-brand:hover { color: #FFFFFF}
    .navbar-inverse .navbar-nav>li>a { color: #ffffff
    }
    .navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus { color: #FFFFFF}
    .dropdown-menu>li>a { color: #333333}
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a .caret { border-top-color: #999999}
    .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-top-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a .caret { border-bottom-color: #999999}
    .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-bottom-color: #FFFFFF}


</style>

<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="./login" class="navbar-brand"><img src="{{ Voyager::image(setting('site.logo'))}}"></a>
            <a href="./login" class="navbar-brand">{{setting('site.title')}}</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">

                    <li >
                        @foreach($items as $menu_item)
                            <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                        @endforeach
                    </li>
            </ul>
        </nav>
    </div>
</header>
{{--//<php>--}}
    {{--<link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css ">--}}
{{----}}

{{--</php>--}}
</html>
