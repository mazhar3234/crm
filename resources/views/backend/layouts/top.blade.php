<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="OMS">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- title for this template -->
    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- main css -->
    {{ Html::style('backend/css/ems_main.css') }}
    <!-- custom css -->
    {{ Html::style('backend/css/custom.min.css') }}
    <!-- jquery -->
    {{ Html::script('backend/js/jquery.min.js') }}
</head>

<body>