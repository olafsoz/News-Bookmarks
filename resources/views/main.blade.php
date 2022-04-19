@extends('layout')

@section('title')
    News
@endsection

@section('content')
    <div class="container mb-2 py-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 all" style="display: flex;">
            @foreach ($articles as $article)
                <div class="col">
                    <div class="card border-0 rounded">
                        <div class="img-wrapper">
                            <a href="{{ $article['url'] }}">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="{{ $article['pictures']['360x240'] }}">
                                    <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                    <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                    <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                </picture>
                            </a>
                        </div>
                        <div class="img-overlay">
                            <form method="post" action="/makeBookmark">
                                @csrf
                                @if (! in_array($article['id'], $cookies))
                            <button name="id" value="{{ $article['id'] }}" class="btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                    }
                                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                </svg></button>
                            </form>
                            @else
                                <button class="btn btn-success rounded-circle border-0 d-flex align-items-center justify-content-center pe-none" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                        }
                                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                        <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                    </svg></button>
                            @endif
                        </div>
                        <div class="card-body">
                            <p class="card-text">{!! $article['title'] !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 delfi" style="display: none;">
            @foreach ($articles as $article)
                @if ($article['is_paid'] == '')
                    <div class="col">
                        <div class="card border-0 rounded">
                            <div class="img-wrapper">
                                <a href="{{ $article['url'] }}">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="{{ $article['pictures']['360x240'] }}">
                                        <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                        <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                        <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                    </picture>
                                </a>
                            </div>
                            <div class="img-overlay">
                                <form method="post" action="/makeBookmark">
                                    @csrf
                                    @if (! in_array($article['id'], $cookies))
                                        <button name="id" value="{{ $article['id'] }}" class="btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                                }
                                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                            </svg></button>
                                </form>
                                @else
                                    <button class="btn btn-success rounded-circle border-0 d-flex align-items-center justify-content-center pe-none" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                            }
                                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                        </svg></button>
                                @endif
                            </div>
                            <div class="card-body">
                                <p class="card-text">{!! $article['title'] !!}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 plus" style="display: none;">
            @foreach ($articles as $article)
                @if ($article['is_paid'] == '1')
                <div class="col">
                    <div class="card border-0 rounded">
                        <div class="img-wrapper">
                            <a href="{{ $article['url'] }}">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="{{ $article['pictures']['360x240'] }}">
                                    <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                    <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                    <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                </picture>
                            </a>
                        </div>
                        <div class="img-overlay">
                            <form method="post" action="/makeBookmark">
                                @csrf
                                @if (! in_array($article['id'], $cookies))
                                    <button name="id" value="{{ $article['id'] }}" class="btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                            }
                                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                        </svg></button>
                            </form>
                            @else
                                <button class="btn btn-success rounded-circle border-0 d-flex align-items-center justify-content-center pe-none" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                        }
                                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                        <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                    </svg></button>
                            @endif
                        </div>
                        <div class="card-body">
                            <p class="card-text">{!! $article['title'] !!}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 mvp" style="display: none;">
            @foreach ($articles as $article)
                @if ($article['is_paid'] == '1' && str_contains($article['url'], 'https://www.delfi.lv/mvp'))
                    <div class="col">
                        <div class="card border-0 rounded">
                            <div class="img-wrapper">
                                <a href="{{ $article['url'] }}">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="{{ $article['pictures']['360x240'] }}">
                                        <source media="(min-width: 768px)" srcset="{{ $article['pictures']['350x400'] }}">
                                        <source media="(max-width: 576px)" srcset="{{ $article['pictures']['676x385'] }}">
                                        <img src="{{ $article['pictures']['360x240'] }}" alt="{{ $article['picture_alt'] }}" width="100%" height="200px" class="rounded" id="img">
                                    </picture>
                                </a>
                            </div>
                            <div class="img-overlay">
                                <form method="post" action="/makeBookmark">
                                    @csrf
                                    @if (! in_array($article['id'], $cookies))
                                        <button name="id" value="{{ $article['id'] }}" class="btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                                }
                                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                            </svg></button>
                                </form>
                                @else
                                    <button class="btn btn-success rounded-circle border-0 d-flex align-items-center justify-content-center pe-none" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                            }
                                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                        </svg></button>
                                @endif
                            </div>
                            <div class="card-body">
                                <p class="card-text">{!! $article['title'] !!}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection




