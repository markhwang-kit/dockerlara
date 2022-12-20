@extends('layouts.app')

@section('section')
    <section class="w-2/3 mx-auto mt-16">
        <div class="border-b border-gray-300 mb-8 pl-1 pb-2 text-xl font-bold">
            {{$board -> title}}
        </div>
        <div class="text-lg">
            {{$board -> story}}
            <img src="{{asset('images/'.$board->image_name)}}" alt="1" style="width: 100%; height: 100%">
        </div>
    </section>
@stop