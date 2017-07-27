@extends('layouts.app')


@section('content')

    <a class="btn btn-default" href="/home">Go Back</a>

    <h1>{{$listing->name}}</h1>


    <p class="well">Company Email: {{$listing->email}}</p>
    <p class="well">Company Website: {{$listing->website}}</p>
    <p class="well">Company Contact: {{$listing->contact}}</p>
    <p class="well">Company Address: {{$listing->address}}</p>
    <p class="well">Company Bio: {{$listing->bio_data}}</p>
    <br><br>






    @endsection