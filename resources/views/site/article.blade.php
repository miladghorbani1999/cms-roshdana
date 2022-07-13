@extends('layouts.site',[
    "title_tag" => "عنوان اول"
])

@section('content')
    <article class="detail-article col-11 mx-auto pt-3">

        <div class="col-12">
            <img style="height: 450px" width="100%" class="rounded" src="{{asset($article->main_image_url)}}">
        </div>

        <div class="col-12">
            <div class="title-article pt-4">
                <h4 class="text-right">{{ $article->title }}</h4>
            </div>

            <p>
                <span class="opacity-75">{{$article->category->name}}</span>
                <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                <span class="pr-3 opacity-50">تاریخ انتشار : {{  convert_number_to_persian(jalali_date($article->created_at)) }}</span>
            </p>
            <p class="tags-article col-12 row">
                @foreach ($article->tags as $tag)
                <span class="alert" role="alert">
                    {{$tag->name}}
                </span>
                @endforeach
            </p>


            <div class="disc-post">
                <p>{!! $article->description !!}</p>
            </div>
            <div class="author-article col-12">
                <div class="row pl-2">
                    <img  src="{{asset($article->author->avatar_url)}}" class="rounded-circle size-avatar">
                    <p class="pt-2 mr-3">
                        {{$article->user->full_name}}
                        <span class="d-block fs-12 opacity-7">{{ convert_number_to_persian($article->author->articles()->count()) }} نوشته </span>
                    </p>

                </div>
            </div>
            <div class="comment pt-4">
                <h4>نظرات شما :</h4>
                <div class="col-12 mt-2 p-0">
                    @if($errors->any())
                        <div class="alert alert-danger col-12">

                            @foreach($errors->all() as $key => $error)
                                {{ $error }}<br/>
                            @endforeach
                        </div>
                    @endif

                </div>
                <form action="{{ route('comment.store', $article->id) }}" method="POST">
                    @csrf
                    @guest
                        <div class="form-group col-4 pr-0">
                          <input type="text" class="form-control text-right" name="name" placeholder="نام شما" value="{{ old('name') }}">
                        </div>
                    @endguest
                    <div class="form-group">
                      <textarea class="form-control resize-none" rows="3" name="body" placeholder="متن پیام شما ...">{{ old('body') }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end submit-comment">
                        <button type="submit" class="btn btn-primary text-left">ارسال پیام</button>
                    </div>
                </form>
                <div class="comments-article">

                    @foreach ($article->comments as $comment)
                        <p class="fs-12 opacity-7 pt-5">
                            <span>{{ $comment->author_name }}</span>
                            <span>در تاریخ {{convert_number_to_persian(jalali_date_format2($comment->created_at))}} نوشت:</span>
                        </p>
                        <p>{{ $comment->body }}</p>
                    @endforeach

                </div>
            </div>
        </div>



    </article>
@endsection
