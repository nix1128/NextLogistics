<!DOCTYPE html>
<html>

<style>
    .navbar .navbar-nav {
        display: inline-block;
        float: none;
    }

    .navbar .navbar-collapse {
        text-align: center;
    }


</style>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div href="profile" class = "text-center" style="background-color: transparent"  >Здравей,@yield('name')


    </div>
    <img src="https://dummyimage.com/20x20/a8a1a8/0f0f12" class="rounded-circle border-danger" width="25px">
</nav>
<hr>
<div class = "container"  >



    <div class="d-flex justify-content-center" role="alert">

        <ul class="nav"  >
            <li class="nav-item"  >
                    <a class="nav-link active" href="/home" >Дом</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contacts">Потребители</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/messages">Съобщения</a>
            </li>

            <li class="text-right">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Изход') }}</a>
                <div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            </li>

            <li>


            </li>
        </ul>

</div>

    @yield('content')


</div>




{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}

</body>
</html>