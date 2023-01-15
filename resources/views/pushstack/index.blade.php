@extends('layouts.app')

@section('title', 'Push & Stack')

{{--Page specific styles only applicable on this page--}}
@push('styles')

    {{--Font awesome link--}}
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        .new_page_link {
            text-decoration: none;
            color: gray;
            border-bottom: 1px solid gray;
        }

        .new_page_link:hover {
            color: red;
            border-bottom: 1px solid red;
        }

        .fontawesome_div {
            font-size: large;
            font-family: 'Times New Roman';
        }

        .fontawesome_icon_name {
            font-size: medium;
        }

        .div_title {
            color: grey;
            font-family: 'Times New Roman';
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="jumbotron">
                <h3 class="display-6"><small>The Push and Stack</small></h3>
                <p class="lead">
                    Blade allows you to push to named stacks which can be
                    rendered somewhere else in another view or layout.
                    This can be particularly useful for specifying any
                    JavaScript libraries required by your child views
                </p>

                <div>
                    <span class="quote">
                        <i>
                            <a href="https://laravel.com/docs/9.x/blade#stacks" target="_blank" class="quote_link">
                                Laravel 9.x Documentation
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </i>
                    </span>
                </div>

                <br>
                <hr class="my-4">
                <span class="div_title">
                    For this page and only this page, we are using the fontawesome script
                </span>
                <div class="col-md-6 m-auto text-center mt-2 border-top border-end border-start border-bottom">
                    <div class="mt-4 mb-4 fontawesome_div">
                        <i class="fa fa-download"></i> <span class="fontawesome_icon_name">Download</span><br>
                        <i class="fa-sharp fa-solid fa-wand-magic-sparkles"></i> <span class="fontawesome_icon_name">Wand-Magic-Sparkles</span><br>
                        <i class="fa fa-paper-plane"></i> <span class="fontawesome_icon_name">Paper Plane</span><br>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ route('otherstylespage') }}" class="new_page_link">
                        Open next page to see difference <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--Page specific scripts only applicable on this page--}}
@push('scripts')

@endpush
