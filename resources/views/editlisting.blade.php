@extends('layouts.app')



@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <span class="pull-right"><a href="/home" class="btn btn-default">Go Back</a></span>

                <div class="panel-heading"><h3>Edit Listing</h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['action'=>['ListingController@update',$listing->id],'method'=>'POST']) !!}
                    {{Form::bsText('name',$listing->name)}}
                    {{Form::bsText('email',$listing->email)}}
                    {{Form::bsText('website',$listing->website)}}
                    {{Form::bsText('address',$listing->address)}}
                    {{Form::bsText('contact',$listing->contact)}}
                    {{Form::bsTextArea('bio_data',$listing->bio_data)}}
                    {{Form::hidden('_method','PUT')}}
                    {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    @endsection