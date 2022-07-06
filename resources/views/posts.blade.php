@extends('layouts.index', [
	'title_tag' => 'لیست مقالات'
])

@section('content')
<div style="background-color: white " class="col-11 mx-auto br-10 pb-4 mb-5">
   @forelse($articles as $article)
        <article class="col-10 mx-auto">
            <div class="row pt-3 pb-3">
                <div class="col-5">
                    <div class="top-post">
                        <p>
                            <span class="opacity-50">{{$article->category->name}}</span>
                            <span class="pr-3 opacity-75">{{ jalali_date_format2($article->created_at) }}</span>
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
                            <p class="pt-2 pl-3">{{$article->user->first_name . " " . $article->user->last_name}}</p>
{{--                            <p class="pt-2 pl-3">{{ $article->author->full_name }}</p>--}}
                            <img src="{{asset('image/avatar/'. $article->user->avatar )}}" class="rounded-circle size-avatar">
{{--                            <img src="{{ $article->author->avatar_url }}" class="rounded-circle size-avatar">--}}
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <img style="height: 270px" width="100%" class="rounded" src="{{asset('image/posts/'.$article->main_image)}}">
{{--                    <img style="height: 270px" width="100%" class="rounded" src="{{ $article->main_image_url }}">--}}
                </div>
            </div>
       </article>
   @empty
        <p>مقاله ای یافت نشد!</p>
   @endforelse
   <div class="col-11 mx-auto pagination-posts pt-4">{{ $articles->links() }}</div>
</div>
@endsection

