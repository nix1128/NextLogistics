@extends('frontview.layouts.userView')



@section('title')
    Contacts
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">



    <form class = "pb2" method="POST" name = 'hausmasters' action='{{url('/contacts')}}'  >

        @csrf
    <h3 class = "text-center">Списък Подтребители</h3>

    <table class="table table-hover text-center float-center">
        <thead >
        <tr>
            <th scope="col">ID#</th>
                <th scope="col">Име</th>
                <th scope="col">Имейл</th>
        </tr>
          </thead>

        @foreach($user as $v)

            <tbody >
            <tr >
                <td class = "align-middle">{{$v->id}}</td>
                <td class = "align-middle">{{$v->name}}</td>
                <td class = "align-middle">{{$v->email}} </td>
            </tr>

        </tbody>
            @endforeach
        </table>

    </form>
@endsection



@section('name')
    {{ $username }}
@endsection


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>