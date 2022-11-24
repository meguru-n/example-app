@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

<h1>ダッシュボード</h1>
@stop

@section('content')

<p>ここがコンテンツ部分です</p>
@stop

@section('css')

{{--ページごとcssの指定
<link rel="stylesheet" herf="/css/xxx.css">
--}}

@stop


@section('js')
<script>
    console.log('ページごとJSの記述');
</script>

@stop