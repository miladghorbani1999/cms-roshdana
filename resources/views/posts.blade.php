@extends('layouts.index')

@section('content')
<div style="background-color: white " class="col-11 mx-auto br-10 pb-4 mb-5">
    @foreach ($articles as $article)

   <div class="col-10 mx-auto">
        <div class="row pt-3 pb-3">
            <div class="col-5">
                    <div class="top-post">
                        <p>
                            <span class="opacity-50">{{$article->category->name}}</span>
                            <span class="pr-3 opacity-75">{{\Morilog\Jalali\Jalalian::fromDateTime($article->created_at)->format('%B %d، %Y')}}</span>
                        </p>
                    </div>
                    <div class="middle-post">
                        <h4>{{$article->title}}</h4>
                    </div>
                    <div class="disc-post">
                        <p>{{$article->description}}</p>
                    </div>
                    <div class="end-post">
                        <div class="row float-left pl-2">
                            <p class="pt-2 pl-3">{{$article->author->user->first_name . " " . $article->author->user->last_name}}</p>

                            <img src="{{asset('image/avatar/'.$article->author->user->avatar)}}" class="rounded-circle size-avatar">
                        </div>
                    </div>
            </div>
            <div class="col-7">
                <img style="height: 270px" width="100%" class="rounded" src="{{asset('image/posts/'.$article->main_image)}}">
            </div>
        </div>
   </div>
   @endforeach
   <div class="col-11 mx-auto pagination-posts pt-4">{{ $articles->links() }}</div>
</div>
@endsection

