@extends('main.layouts.app')

@section('content')
    <div class="container m-auto w-4/5 py-24">
        <div class="row text-center">
            <h1 class="text-5xl uppercase bold">CREATE NEW CAR</h2>
        </div>
        <div class="pt-10">
            <a
                href="/cars"
                class="italic border-b-2 border-dotted text-gray-500">
                &larr; Back to car list
            </a>
        </div>
        <div class="flex py-10 justify-center">
            <form method="post" action="/cars" enctype="multipart/form-data">
                @csrf
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placholder-gray-400"
                    name="name"
                    placeholder="Car's brand name">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placholder-gray-400"
                    name="founded"
                    placeholder="Car's founded">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placholder-gray-400"
                    name="description"
                    placeholder="Car's description">

                <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold" type="submit">
                    Submit
                </button>
            </form>
        </div>

    </div>




@endsection
