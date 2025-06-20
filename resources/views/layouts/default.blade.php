<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "E-Com")</title>
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
    @yield("style")
</head>
<body>
@include("includes.header")

<div class="mt-5">
    @yield("content")
</div>

@include("includes.footer")
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
@yield("script")
</body>
</html>
