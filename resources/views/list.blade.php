@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            @foreach($data as $item)
                <div class="p-3">
                    <h2 class="text-center">{{$item['strDrink']}}</h2>
                    <div>
                        <div class="text-center m-3">
                            <img  src="{{$item["strDrinkThumb"]}}" alt="" width="500"/>
                        </div>
                        <p>{{$item['strInstructions']}}</p>
                        <h3>Ingredients:</h3>
                        <ul>
                            <li>{{$item['strIngredient1']}}</li>
                            <li>{{$item['strIngredient2']}}</li>
                            <li>{{$item['strIngredient3']}}</li>
                            <li>{{$item['strIngredient4']}}</li>
                        </ul>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
