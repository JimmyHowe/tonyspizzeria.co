@extends('frontend')

@section('content')

    <div class="row">

        <div class="col-md-4">

            <div class="list-group">
                <a v-for="group in menu.groups" href="#@{{ group.slug }}" class="list-group-item">@{{ group.title }}</a>
            </div>

        </div>

        <div class="col-md-8">

            <basket></basket>

            <menu :menu="menu"></menu>

        </div>

    </div>

@stop