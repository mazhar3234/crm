<!doctype html>
<html lang="{{ str_replace('-', '_', app()->getLocale()) }}">

<head>
    <!-- meta infos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- style sheet -->
    {{ Html::style('/frontend/css/style.css') }}
    {{ Html::style('/frontend/css/bootstrap-datepicker.css') }}
    {{ Html::style('/frontend/css/select2.min.css') }}
    {{ Html::style('/frontend/css/custom.css') }}
    <!-- favicon -->
    {{ Html::favicon('/frontend/images/logo/favicon.png') }}
    {{ Html::favicon('/frontend/images/logo/apple-touch-icon.png') }}
    <title>{{ config('app.name') }}</title>
    <style type="text/css">
        html {
  scroll-behavior: smooth;
}
    </style>
</head>

<body>