@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class='col-sm-2'>
                @include('_sidebar_links')
            </div>
            <div class='col-sm-8'>
                <div class="container">
                    <div class="border border-primary rounded">
                        @include('_tweetbox')
                    </div>
                    <hr>
                    <div class="border border-dark rounded">
                        @foreach($tweets as $tweet)
                            @include('_tweet')
                        @endforeach
                    </div>
                </div>
            </div>
            <div class='col-sm-2'>
                @include('_friends_list')
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
