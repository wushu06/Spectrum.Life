@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center flex-wrap flex-sm-column ">
            <h2 class="text-center">{{__('Browse Cocktails')}}</h2>
            <div class="row justify-content-center flex-wrap  m-3">
                @forelse($data as $item)
                    <div class="p-3 text-center">
                        <a href="/list/{{$item['idDrink']}}">
                            <img src="{{$item["strDrinkThumb"]}}" alt="" width="200"/>
                            <h3>{{$item['strDrink']}}</h3>
                        </a>
                    </div>
                @empty
                    <div>
                        <h4 class="text-center">No result found!</h4>
                        <p class="text-center">Try different word:</p>
                        <search-component/>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
