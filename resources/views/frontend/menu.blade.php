@extends('frontend')

@section('content')

    <div class="row">

        <div class="col-md-4">

            <div class="panel">

                <div class="panel-heading">
                    <h1>Menu</h1>
                </div>

                <div class="list-group">
                    <a v-for="group in menu.groups" href="#@{{ group.slug }}" class="list-group-item">@{{ group.title }}</a>
                </div>

            </div>

            <basket></basket>

        </div>

        <div class="col-md-8">

            <menu :menu="menu"></menu>

        </div>

    </div>

@stop