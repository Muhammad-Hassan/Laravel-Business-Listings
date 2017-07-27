@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                <span class="pull-right"><a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a></span>
                </div>

                <div class="panel-body">

                    <h3>Your Listing</h3>

                     @if(count($user_listing)>0)

                        <table class="table table-striped">

                            <tr>

                                <th>Company</th>
                                <th></th>
                                <th></th>

                            </tr>
                        @foreach($user_listing as $listing)

                            <tr>

                               <td> <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
                               </td>
                                <td><a href="/listings/{{$listing->id}}/edit" class="pull-right btn btn-default">Edit</a></td>
                                <td>

                                    {!! Form::open(['action'=>['ListingController@destroy',$listing->id],'method'=>'POST','class'=>'pull-left','onsubmit'=>'confirm("Are you sure?")']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}

                                </td>


                            </tr>

                            @endforeach
                        </table>
                        @endif
                </div>
            </div>
        </div>
    </div>

@endsection
