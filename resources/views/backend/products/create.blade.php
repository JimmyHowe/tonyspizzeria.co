@extends('backend')

@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="panel">

                <div class="panel-body">

                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="be-products-title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="be-products-title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="be-products-description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" id="be-products-description" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="options.vegetarian"> Vegetarian
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Save</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@stop