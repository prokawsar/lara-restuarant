@section('title', 'Add Category')

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Item Add</div>--}}

                <div class="panel-body">

                    <div class="modal-dialog" role="document">

                        <div class="modal-content">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if (session('danger'))
                                <div class="alert alert-danger">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            <div class="modal-header">

                                <a class="btn btn-info" href="{{ url('/allitem') }}">Back</a>

                                <!-- <h4 class="modal-title">Add Category</h4> -->

                            </div>

                            <div class="modal-body">


                                <form data-toggle="validator" action="{{ url('/addcategory') }}" method="POST">

                                    {{ csrf_field() }}
                                    @php $category = App\Category::where('rest_id', Auth::id())->get(); @endphp

                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active text-center"><a href="#">Current Categories</a></li>
                                        @foreach ($category as $name)
                                            <li>
                                                <a class="" href="#">{{ $name->cat_name}}
                                                    <span class="pull-right">
                                                        <i
                                                                class="glyphicon glyphicon-remove"
                                                                title="Delete Category"
                                                                onclick="location.href='/delcategory{{  $name->id }}'"></i>
                                                </span>
                                                </a>

                                            </li>

                                        @endforeach

                                    </ul>

                                    <div class="form-group">

                                        <label class="control-label" for="title">Name:</label>

                                        <input type="text" id="title" name="title" class="form-control"
                                               data-error="Please enter title." required/>
                                        <input type="hidden" name="rest_id" class="form-control"
                                               value="{{ Auth::id() }}"/>

                                        <div class="help-block with-errors"></div>

                                    </div>


                                    <div class="form-group">

                                        <button type="submit" class="btn crud-submit btn-success">Add Category</button>

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
        <script>
            function deleteCat() {
                alert('Hello');
            }
        </script>