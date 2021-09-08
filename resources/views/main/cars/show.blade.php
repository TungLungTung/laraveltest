@extends('main.layouts.app')

@section('content')
    <div class="container m-auto w-4/5 py-24">
        <div class="row text-center">
            <h1 class="text-5xl uppercase bold">{{$car->name}}</h2>
        </div>

        <div class="row text-center py-10">
        <span class="uppercase text-blue-500 font-bold text-xs italic py-10">Founded: {{$car->founded}}</span><br />
        <div class="pt-10">
            <a
                href="/cars"
                class="italic border-b-2 border-dotted text-gray-500">
                &larr; Back to car list
            </a>
        </div>
        <p class="py-10">
            {{$car->description}}
        </p>

        <table class="pull-center w-full">
            <thead>
                <tr>
                    <th class="p-2 border-4 border-gray-500 w-1/4">Model</th>
                    <th class="p-2 border-4 border-gray-500 w-1/4">Engine</th>
                    <th class="p-2 border-4 border-gray-500 w-1/4">Date</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse ($car->carsModels as $model)
                    <tr>
                        <td  class="p-2 border-4 border-gray-500">{{$model->name}}</td>
                        <td class="p-2 border-4 border-gray-500">
                            @foreach ($car->engines as $engine)
                                @if ($engine->model_id == $model->id)
                                {{$engine->name}}
                                @endif
                            @endforeach
                        </td>
                        <td class="p-2 border-4 border-gray-500">{{$model->productionDate->name}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="p-2 border-4 border-gray-500">No Model has found !</td>
                    </td>
                @endforelse
            </tbody>
        </table>

        </div>

    </div>




@endsection

