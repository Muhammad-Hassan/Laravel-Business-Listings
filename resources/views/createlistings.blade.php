@extends('layouts.app')



@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <span class="pull-right"><a href="/home" class="btn btn-default">Go Back</a></span>

                <div class="panel-heading"><h3>Create Listing</h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['action'=>'ListingController@store','method'=>'POST']) !!}
                    {{Form::bsText('name','',['placeholder'=>'Company Name'])}}
                    {{Form::bsText('email','',['placeholder'=>'Company Email'])}}
                    {{Form::bsText('website','',['placeholder'=>'Company Website'])}}
                    {{Form::bsText('address','',['placeholder'=>'Company Address'])}}
                    {{Form::bsText('contact','',['placeholder'=>'Company Contact'])}}
                    {{Form::bsTextArea('bio_data','',['placeholder'=>'Company Bio Data'])}}
                    {{Form::bsSubmit('submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>




    @endsection