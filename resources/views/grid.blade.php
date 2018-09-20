@extends('layout')

@include('components.grid')

@section('content')


    <div id="demo">
        <form id="search">
            Search <input name="query" v-model="searchQuery">
        </form>
        <grid
            :data="gridData"
            :columns="gridColumns"
            :filter-key="searchQuery">
        </grid>
    </div>


@endsection
