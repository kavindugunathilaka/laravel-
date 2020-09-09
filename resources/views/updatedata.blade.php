<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <form action="/updatedata1" method="get">
        {{csrf_field()}}

        <input type="text" name="datadel" value="{{$data->products}}"/>
        <input type="hidden" name="id" value="{{$data->id}}"/>

        <input type="submit" value="update">
        &nbsp;&nbsp;<input type="submit"value="cancel">

    </form>
</body>
</html>
