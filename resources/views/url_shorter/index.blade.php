<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Url shorter</title>
</head>
<body>
    <div class="container">
        <div class="justify-content-md-center col-6 offset-3 mt-3">
        <form id="short_generator_form" action="{{route('url-shorter-generate')}}" method="post">
            @csrf
            <label for="original_url" class="form-label">Enter You link:</label>
            <input type="text" class="form-control" id="original_url" name="original_url" placeholder="You link">
            <div id="error_block" class="text-danger"></div>
            <button type="submit" class="btn btn-success w-100 mt-4 p-5">Get short link!</button>
            <div id="shorted_url_block" class="p-3 text-center d-none">
                <span>Your link <i class="far fa-hand-point-down fa-2x"></i></span>
                <div id="shorted_url" class="mt-3"></div>
            </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('js/UrlShorterScript.js')}}"></script>
</body>
</html>