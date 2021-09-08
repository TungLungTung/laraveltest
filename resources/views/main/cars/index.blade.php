@extends('main.layouts.app')

@section('content')
    <div class="container m-auto w-4/5 py-24">
        <div class="row text-center">
            <h1 class="text-5xl uppercase bold">CARS</h2>
        </div>
        <div class="pt-10">
            <a
                href="/cars/create"
                class="italic border-b-2 border-dotted text-gray-500">
                Add new car &rarr;
            </a>
        </div>
        <div class="row py-10">
            @foreach ($cars as $car)
                <h2 class="text-3xl text-gray-700 py-6"><a href="/cars/{{$car->id}}" class="hover:text-red-200">{{$car->name}}</a></h2>
                <span class="uppercase text-blue-500 font-bold text-xs italic">Founded: {{$car->founded}}</span><br /><br />
                <a class="italic border-b-2 border-dotted text-gray-500 mt-10" href="/cars/{{$car->id}}/edit">Edit &rarr;</a>
                <form action="/cars/{{$car->id}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="italic border-b-2 border-dotted text-red-500" href="" type="submit">Delete &rarr;</button>
                </form>
                <hr class="mt-4 mb-4" />
            @endforeach
        </div>

    </div>




@endsection
