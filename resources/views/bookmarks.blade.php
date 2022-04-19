@extends('layout')

@section('title')
    Bookmarks
@endsection

@section('content')
    <div class="container mb-2 py-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 all" style="display: flex;">
            @foreach ($ids as $id)
                @foreach($articles as $article)
                    @if ($article['id'] == $id)
                    <div class="col">
                        <div class="card border-0 rounded">
                            <div class="img-wrapper">
                                <a href="{{ $article['url'] }}">
                                    <picture>
                                        <source media="(min-width: 992px)" srcset="{{ $article['pictures']['360x240'] }}">
                                        <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                        <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                        <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                    </picture>
                                </a>
                            </div>
                            <div class="img-overlay">
                                <form method="post" action="/deleteBookmark">
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')" name="id" value="{{ $article['id'] }}"
                                            class="btn btn-danger rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                            <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{!! $article['title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 delfi" style="display: none;">
            @foreach ($ids as $id)
                @foreach($articles as $article)
                    @if ($article['id'] == $id && $article['is_paid'] == '')
                        <div class="col">
                            <div class="card border-0 rounded">
                                <div class="img-wrapper">
                                    <a href="{{ $article['url'] }}">
                                        <picture>
                                            <source media="(min-width: 992px)" srcset="{{ $article['pictures']['360x240'] }}">
                                            <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                            <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                            <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                        </picture>
                                    </a>
                                </div>
                                <div class="img-overlay">
                                    <form method="post" action="/deleteBookmark">
                                        @csrf
                                        <button onclick="return confirm('Are you sure?')" name="id" value="{{ $article['id'] }}"
                                                class="btn btn-danger rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{!! $article['title'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 plus" style="display: none;">
            @foreach ($ids as $id)
                @foreach($articles as $article)
                    @if ($article['id'] == $id && $article['is_paid'] == '1')
                        <div class="col">
                            <div class="card border-0 rounded">
                                <div class="img-wrapper">
                                    <a href="{{ $article['url'] }}">
                                        <picture>
                                            <source media="(min-width: 992px)" srcset="{{ $article['pictures']['360x240'] }}">
                                            <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                            <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                            <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                        </picture>
                                    </a>
                                </div>
                                <div class="img-overlay">
                                    <form method="post" action="/deleteBookmark">
                                        @csrf
                                        <button onclick="return confirm('Are you sure?')" name="id" value="{{ $article['id'] }}"
                                                class="btn btn-danger rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{!! $article['title'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 mvp" style="display: none;">
            @foreach ($ids as $id)
                @foreach($articles as $article)
                    @if ($article['id'] == $id && $article['is_paid'] == '1' && str_contains($article['url'], 'https://www.delfi.lv/mvp'))
                        <div class="col">
                            <div class="card border-0 rounded">
                                <div class="img-wrapper">
                                    <a href="{{ $article['url'] }}">
                                        <picture>
                                            <source media="(min-width: 992px)" srcset="{{ $article['pictures']['360x240'] }}">
                                            <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                            <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                            <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                        </picture>
                                    </a>
                                </div>
                                <div class="img-overlay">
                                    <form method="post" action="/deleteBookmark">
                                        @csrf
                                        <button onclick="return confirm('Are you sure?')" name="id" value="{{ $article['id'] }}"
                                                class="btn btn-danger rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{!! $article['title'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
