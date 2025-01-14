@extends('magicai-updater::layouts.master', ['stepShow' => false])

@section('template_title')
    {{ $data['title'] }}
@endsection

@section('title')
    {{ $data['title'] }}
@endsection

@section('container')
    @include($data['view'])
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#submit-button').on('click', function () {
                $(this).attr('disabled', true);
                $(this).text('Loading...');
                $(this).closest('form').submit();
            });
        });
    </script>
@endsection
