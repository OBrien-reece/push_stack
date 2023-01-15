@extends('layouts.app')

{{--Insert Title of choice for the current page--}}
@section('title', 'Other Styles Page')


{{--Page specific styles only applicable on this page--}}
@push('styles')

    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->

    <style>
        .heading {
            font-family: Jokerman;
        }

        .new_page_link {
            text-decoration: none;
            color: red;
            border-bottom: 1px solid red;
        }
        .new_page_link:hover {
            color: darkslategray;
            border-bottom: 1px solid darkslategray;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="jumbotron">
                <h3 class="display-6"><small class="heading">The Push and Stack</small></h3>
                <p class="lead">
                   Using the push directive, I can now load different styles and scripts on
                    this page, freeing it from the labor of, again, loading the fontawesome
                    scripts [and any other scripts/styles] for the index page that this page does not require at all.
                </p>
                <textarea class="mt-4 summernote" name="description" id="your_summernote" >On this page for example, I have loaded the
                various scripts and styles that will be usefull in rendering this summernote text editor</textarea>
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('index') }}" class="new_page_link">
                Open previous page to see difference
            </a>
        </div>
    </div>
@endsection

{{--Page specific scripts only applicable on this page--}}
@push('scripts')

    <!-- Summernote JS - CDN Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    {{--Summernote script--}}
    <script>
        $(document).ready(function() {
            $("#your_summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
