@section('title', 'Profile')

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">The {{ $data->rest_name }}
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-offset-3">

                                <div class="form-group">
                                    <label class="control-label" for="title">Owner Name:<span
                                                class="required">*</span></label>
                                    <input  value="{{ $data->owner_name }}" type="text" id="name" name="name" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Restaurant Image:</label>
                                    <img height="300px" width="350px" class="img-bordered" src="{{asset('/images/'.$data->image)}}">
                                    <input value="{{ $data->image }}" type="file" id="image" name="image" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Address:<span
                                                class="required">*</span></label>
                                    <input value="{{ $data->address }}" type="text" id="address" name="address" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Phone:<span
                                                class="required">*</span></label>
                                    <input value="{{ $data->phone }}" type="text" id="phone" name="phone" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Closing Day:<span
                                                class="required">*</span></label>
                                    <input type="text" value="{{ $data->closing_day }}" id="closing_day" name="closing_day" class="form-control" required/>
                                </div>

                                <a href="#" type="submit" class="btn btn-success pull-right">Update</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
