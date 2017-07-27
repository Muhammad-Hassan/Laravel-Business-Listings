@extends('layouts.app')



@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Current Listings
                    </div>

                <div class="panel-body">


                    @if(count($listing)>0)

                            <ul class="list-group">
                            @foreach($listing as $listings)
                                   <li class="list-group-item"> <a href="/listings/{{$listings->id}}">{{$listings->name}}</a>
                                   </li>
                            @endforeach
                            </ul>
                        @else
                        <p class="alert alert-danger">No Listing Found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>





@endsection