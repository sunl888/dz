<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8"/>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="IE=EmulateIE9">
    <meta http-equiv="x-ua-compatible" content="IE=EmulateIE8">
    <title>@section('title')@show 计算机学院党员工作站</title>
    <meta name="description" content="@section('description')@show">
    <meta name="keywords" content="@section('keywords')@show">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{!! cdn('jsjdz/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') !!}">
    <script type="text/javascript" src="{!! cdn('jsjdz/lib/bootstrap-3.3.7-dist/js/jquery-1.11.0.min.js') !!}"></script>
    <script type="text/javascript" src="{!! cdn('jsjdz/lib/bootstrap-3.3.7-dist/js/bootstrap.js') !!}"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ cdn('jsjdz/js/es5-shim.min.js') }}"></script>
    <script type="text/javascript" src="{{ cdn('jsjdz/js/es5-sham.min.js') }}"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ cdn('jsjdz/css/normalize.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ cdn('jsjdz/css/common.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ cdn('jsjdz/css/total.css') }}">
    <link rel="stylesheet" href="{{ cdn('jsjdz/lib/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ cdn('jsjdz/lib/slick/slick-theme.min.css') }}">
    <!--[if lt IE 8]>
    <script>window.location.href = 'https://support.dmeng.net/upgrade-your-browser.html?referrer=' + location.href;</script>
    <![endif]-->
</head>

<body>

@yield('content')
@stack('js')

</body>

</html>