@extends('layouts.blank-full') 

@section('content')


    <div id="main-content" class="w-full bg-gray-200 pl-0 lg:pl-64 min-h-screen">
        
        <x-header />
        
        <div class="p-10 bg-gray-200">

            <x-widget />
            <x-signup />
            <x-activity />
            
            <div class="flex flex-wrap">
                <x-latest-signups />
                <x-product-sales />
                <x-product-orders />
            </div>

        </div>

    </div>
@endsection