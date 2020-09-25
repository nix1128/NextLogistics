

<head>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>

<style>
    .thumbnail:hover {
        text-decoration: underline;


    }



</style>


@extends('frontview.layouts.userView')







<link href="{{(asset(('css/misc.css')))}}">

<script src ="{{mix('js/app.js')}}" defer></script>
<link href="{{mix('css/app.css')}}" rel="stylesheet">




@section('content')


    <h2 class = "text-center">Коментари</h2>

                <script>

                    $(document).ready(function () {
                        window.setTimeout(function() {
                            $(".alert-alert").fadeTo(1000, 0).slideUp(1000, function(){
                                $(this).remove();
                            });
                        }, 2000);

                    });

                    $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });

                $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-warning").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });

                $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-danger").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });



                $(function () {
                    var div = $('#showOrHideDiv');
                    $('#action').click(function () {
                        div.fadeToggle(800);
                    });
                });

                </script>
               {{--Pagination--}}

    {{ $comments->links() }}

        <p  class = "text-success text-center"> Oбщо {{$comments->count()}}</p>
                            <div class="row bootstrap snippets  " >
                                <div class="col-md-1 col-md-offset-20 container-fluid col-md-12">
                                    <div class="comment-wrapper">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">



                            @foreach($comments as $comment)
                                                    <ul class="media-list card align-middle">
                                                        <br>

                                                    <li class="media ">
                                                        <a  class="pull-right">
                                                            <img class="d-flex rounded-circle avatar z-depth-1-half mb-1 mx-auto" src="https://mdbootstrap.com/img/Others/documentation/img (30)-mini.jpg"
                                                                 alt="Avatar">
                                                        </a>


                                                        <div class="media-body">
                                                            <br>
                                                            <strong class="text-success ">@ {{$comment->user->name}}</strong>
                                                            <br>

                                                                <small class="text-muted">На: {{$comment->created_at->isoFormat('D/M/YY HH:mm')}} </small>
                                                                <br>
                                                                <small class="text-muted"> Публикува коментар № {{$comment->id}}</small>

                                                            <p class = "font-italic text-left card-body" >{!!html_entity_decode($comment->content)!!}</p>

                                        <span class="text-muted pull-right p-8">
                                    <label class="container">
                                        <form action="{{route('comments.delete', $comment->id)}}" value ="comment_id" method="post">
                                            @csrf
                                            @if($comment->user_id == $user->id)
                                                <button class=" btn float-right" type="submit" ><small class = "thumbnail"> Delete</small></button>
                                            @endif
                                        </form>
                                    </label>
                                </span>
                     </div>
                                                    </ul>

                                                            @endforeach

                                @if(session()->has('added'))
                                    <div class="alert alert-success" role="alert">
                                        Добавихте коментар!!
                                    </div>
                                @elseif(session()->has('deleted'))
                                        <div class="alert alert-success" role="alert">
                                            Успешно изтритхе вашето съобщение!
                                        </div>



                                @endif
                                                <form  id="comment-form"  action="{{ route('comments.add',['comment_id'=>$comment->id]) }}" method="post">
                                                    @include('frontview.comments.comments')
                                                    @csrf

                                                    <span class="btn float-right"> <a  href="{{ route('comments.add') }}"
                                                                    onclick="event.preventDefault();
                                                        document.getElementById('comment-form').submit();">
                                                            {{ __('Коментирай') }}</a>  </span>
                                                </form>
                                            </div>

                            {{--end comments add--}}

                                        </div>
                                    </div>
                                </div>
                            </div>


{{--@endforeach--}}






@endsection






        @section('name')
            {{ $username }}

        @endsection



        <script src='https://kit.fontawesome.com/a076d05399.js'></script>


<script>

    $(document).ready(function(){
        $("img").addClass("img-responsive");
        $("img").css("max-width", "100%");
    });




</script>


</div>


