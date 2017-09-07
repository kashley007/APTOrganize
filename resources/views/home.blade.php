@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div id="pantry">
                <div class="front">
                    <div id="pantry_front" class="selection_tile">
                        <h2 class="title">Pantry</h2>
                        <div class="tile_title">

                        </div>
                    </div>
                    <!-- front content -->
                </div>
                <div class="back">
                    <!-- back content -->
                    <div id="pantry_back" class="selection_tile">
                        <h2 id="pantry_count">{{$pantry_count}}</h2>
                        @if($pantry_count === 1)
                            <h4 class="tile_info">Item in Pantry</h4>
                        @else
                            <h4 class="tile_info">Items in Pantry</h4>
                        @endif
                        <h4 class="tile_links"><a>Add Item</a></h4>
                        <h4 class="tile_links"><a>View Pantry</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="recipes">
                <div class="front">
                    <div id="recipes_front" class="selection_tile">
                        <h2 class="title">Recipes</h2>
                        <div class="tile_title">

                        </div>
                    </div>
                    <!-- front content -->
                </div>
                <div class="back">
                    <!-- back content -->
                    <div id="recipes_back" class="selection_tile">
                        <h2 id="recipe_count">{{$recipe_count}}</h2>
                        @if($recipe_count === 1)
                            <h4 class="tile_info">Recipe</h4>
                        @else
                            <h4 class="tile_info">Recipes</h4>
                        @endif
                        <h4 class="tile_links"><a href="{{ URL::to('/recipes/create') }}">Add New</a></h4>
                        <h4 class="tile_links"><a>View All</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="chores">
                <div class="front">
                    <div id="chores_front" class="selection_tile">
                        <h2 class="title">Chores</h2>
                        <div class="tile_title">

                        </div>
                    </div>
                    <!-- front content -->
                </div>
                <div class="back">
                    <!-- back content -->
                    <div id="chores_back" class="selection_tile">
                        <h2 id="chores_count">{{$chore_count}}</h2>
                        @if($chore_count === 1)
                            <h4 class="tile_info">Chore</h4>
                        @else
                            <h4 class="tile_info">Chores</h4>
                        @endif
                        <h4 class="tile_links"><a href="{{ URL::to('/chores/create') }}">Add New</a></h4>
                        <h4 class="tile_links"><a>View All</a></h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row next-row">
        <div class="col-xs-12 col-sm-4">
            <div id="walmart">
                <div class="front">
                    <div id="walmart_front" class="selection_tile">
                        
                    </div>
                    <!-- front content -->
                </div>
                <div class="back">
                    <!-- back content -->
                    <div id="walmart_back" class="selection_tile">
                        <h4 id="browse" class="tile_links"><a href="{{ URL::to('/walmart') }}">Browse API</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            
        </div>
        <div class="col-xs-12 col-sm-4">
            
        </div>
    </div>
</div>
@endsection
