<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
</head>
<body>
    <form method="POST" action="/biodata/create" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <input type="text" name="nama" id="$nama">
        <input type="text" name="npm" id="$npm">
        <input type="text" name="nilai" id="$nilai">
        <button>Submit</button>
    </form>
</body>
</html>