@section('title', 'Make Order')

@extends('layouts.waiter')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
        
                <div class="panel-heading">All Items</div>

                <div class="panel-body">
                    Hello Items {{ $data }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection