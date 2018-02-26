@section('title', 'Add Item')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Item Add</div>--}}

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h4 class="modal-title">Add Item</h4>

                                </div>

                                <div class="modal-body">



                                    <form data-toggle="validator" action="#" method="POST">

                                        <div class="form-group">

                                            <label class="control-label" for="title">Title:</label>

                                            <input type="text" name="title" class="form-control" data-error="Please enter title." required />

                                            <div class="help-block with-errors"></div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label" for="title">Price:</label>

                                            <input type="text" name="price" class="form-control" data-error="Please enter price." required />

                                            <div class="help-block with-errors"></div>

                                        </div>

                                        <div class="form-group">

                                            <button type="submit" class="btn crud-submit btn-success">Submit</button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>
                </div>
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
@endsection