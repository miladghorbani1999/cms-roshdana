@extends('layouts.site', [
	'title_tag' => 'لیست مقالات'
])

@section('content')
<div style="background-color: white " class="col-11 mx-auto br-10 pb-4 mb-5 mt-5">
    <nav class="navbar navbar-expand-lg navbar-light col-11 mx-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="{{route('posts')}}">پست ها<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="row col-11 mx-auto">
        @forelse($articles as $key => $article)
                @if($key==0)
                    <article class="col-12">
                        <div class="row pt-5 pb-3">
                            <div class="col-5">
                                <div class="top-post">
                                    <p >
                                        <span class="opacity-75">{{$article->category->name}}</span>
                                        <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                                        <span class="pr-3 opacity-50 ">{{  convert_number_to_persian(jalali_date($article->created_at)) }}</span>
                                    </p>
                                </div>
                                <div class="middle-post">
                                    <h4>{{ $article->title }}</h4>
                                </div>
                                <div class="disc-post">
                                    <p>{!! $article->description !!}</p>
                                </div>
                                <div class="end-post">
                                    <div class="row float-left pl-2">
                                        <p class="pt-2 pl-3">{{$article->user->full_name}}</p>
                                        <img src="{{asset($article->author->avatar_url)}}" class="rounded-circle size-avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <img style="height: 320px" width="100%" class="rounded" src="{{asset($article->main_image_url)}}">
                            </div>
                        </div>
                </article>
                @else
                    <article class="col-6">
                        <div class=" pt-5 pb-3">
                            <div class="">
                                <img style="height: 270px" width="100%" class="rounded" src="{{asset($article->main_image_url)}}">
                            </div>
                            <div class="">
                                <div class="top-post">
                                    <p class="pt-3">
                                        <span class="opacity-75">{{$article->category->name}}</span>
                                        <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                                        <span class="pr-3 opacity-50 ">{{ convert_number_to_persian(jalali_date($article->created_at)) }}</span>
                                    </p>
                                </div>
                                <div class="middle-post">
                                    <h4>{{ $article->title }}</h4>
                                </div>
                                <div class="disc-post">
                                    <p>{!! $article->description !!}</p>
                                </div>

                            </div>
                        </div>
                </article>
                @endif
        @empty
                <p>مقاله ای یافت نشد!</p>
        @endforelse
    </div>
   <div class="col-11 mx-auto pagination-posts pt-4">{{ $articles->links() }}</div>
</div>
@endsection

