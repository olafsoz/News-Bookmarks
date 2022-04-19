<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}
    <style>
        .img-wrapper {
            position: relative;
        }
        .img-overlay {
            position: absolute;
            top: -20px;
            right: -20px;
        }
        #btn {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
<div class="container mt-2">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">DELFI @yield('title')</span>
        </a>

        <ul class="nav">
            <li class="nav-item"><a href="/" class="nav-link active">News</a></li>
            <li class="nav-item"><a href="/bookmarks" class="nav-link active">Bookmarks</a></li>
        </ul>
    </header>
</div>
<div class="container mb-4 pt-3">
    <button class="btn btn-primary" id="btnAll">All</button>
    <button class="btn btn-secondary" id="btnDelfi">DELFI</button>
    <button class="btn btn-secondary" id="btnPlus">DELFI Plus</button>
    <button class="btn btn-secondary" id="btnMVP">MVP</button>
</div>

@yield('content')

<script>
    document.getElementById('btnAll').addEventListener('click', all);
    document.getElementById('btnDelfi').addEventListener('click', delfi);
    document.getElementById('btnPlus').addEventListener('click', plus);
    document.getElementById('btnMVP').addEventListener('click', mvp);
    let btnAll = document.getElementById('btnAll');
    let btnDelfi = document.getElementById('btnDelfi');
    let btnPlus = document.getElementById('btnPlus');
    let btnMVP = document.getElementById('btnMVP');
    let allArticles = document.getElementsByClassName('row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 all');
    let delfiArticles = document.getElementsByClassName('row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 delfi');
    let plusArticles = document.getElementsByClassName('row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 plus')
    let mvpArticles = document.getElementsByClassName('row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 mvp');

    function all() {
        btnAll.className = 'btn btn-primary';
        btnDelfi.className = 'btn btn-secondary';
        btnPlus.className = 'btn btn-secondary';
        btnMVP.className = 'btn btn-secondary';
        allArticles[0].style.display = 'flex';
        delfiArticles[0].style.display = 'none';
        plusArticles[0].style.display = 'none';
        mvpArticles[0].style.display = 'none';
    }

    function delfi() {
        btnDelfi.className = 'btn btn-primary';
        btnAll.className = 'btn btn-secondary';
        btnPlus.className = 'btn btn-secondary';
        btnMVP.className = 'btn btn-secondary';
        delfiArticles[0].style.display = 'flex';
        allArticles[0].style.display = 'none';
        plusArticles[0].style.display = 'none';
        mvpArticles[0].style.display = 'none';
    }

    function plus() {
        btnPlus.className = 'btn btn-primary';
        btnAll.className = 'btn btn-secondary';
        btnDelfi.className = 'btn btn-secondary';
        btnMVP.className = 'btn btn-secondary';
        plusArticles[0].style.display = 'flex';
        delfiArticles[0].style.display = 'none';
        allArticles[0].style.display = 'none';
        mvpArticles[0].style.display = 'none';
    }

    function mvp () {
        btnMVP.className = 'btn btn-primary';
        btnPlus.className = 'btn btn-secondary';
        btnAll.className = 'btn btn-secondary';
        btnDelfi.className = 'btn btn-secondary';
        mvpArticles[0].style.display = 'flex';
        plusArticles[0].style.display = 'none';
        delfiArticles[0].style.display = 'none';
        allArticles[0].style.display = 'none';
    }
</script>
</body>
</html>
