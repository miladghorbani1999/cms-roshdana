@extends('layouts.site', [
	'title_tag' => 'لیست مقالات'
])
@if(!empty($detail_page))
    @section('top-content')
        <div class="col-11 mx-auto pt-5">
            <h5 class="col-12 color-or-main">{{$detail_page['title']}}</h5>
        </div>
    @endsection
@endif
@section('content')
<div class="row col-11 mx-auto">
    @forelse($articles as $key => $article)
            @if($key==0)
                <article class="col-12 pt-3">
                    <a href="{{url('article/'.$article['slug'])}}">
                        <div class="row pb-3">
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
                                    <div class="row mr-0">
                                        <img src="{{asset($article->author->avatar_url)}}" class="rounded-circle size-avatar">
                                        <p class="pt-2 pr-3">{{$article->user->full_name}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <img style="height: 320px" width="100%" class="rounded" src="{{asset($article->main_image_url)}}">
                            </div>
                        </div>
                    </a>
                </article>
            @else
                <article class="col-6">
                    <a href="{{url('article/'.$article['slug'])}}">
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
                </a>
            </article>
            @endif
    @empty
            <p>مقاله ای یافت نشد!</p>
    @endforelse
</div>
<div class="col-11 mx-auto pagination-posts pt-4">{{ $articles->links() }}</div>
@endsection

