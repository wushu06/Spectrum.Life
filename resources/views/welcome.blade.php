@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center flex-wrap">
                <div>
                    <v-card-title class="pl-10 text-center">{{ __('TheCocktailDB') }}</v-card-title>
                    <div class="card-form">
                        <search-component/>
                    </div>
                </div>
        </div>
    </div>
@endsection
