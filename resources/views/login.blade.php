<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>login</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contactus">ContactsU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/aboutus">AboutUs</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
{{-- /////////////////////////////////////////////////////////////////////////// --}}

    <div class="container">
    <div class="text-center">
        <h1>TASKS</h1>
    <div class="row">
        <div class="col-md-12">

            @foreach ($errors->all() as $error)

                 <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>

            @endforeach
          <form method="post" action="/saveTask">
            {{csrf_field()}}
            <input type="text" class="form-control" name="quantity" placeholder="enter your quantity"> <br>
            <input type="text" class="form-control" name="products" placeholder="enter your products name"> <br>
            {{-- <input type="text" class="form-control" name="name" placeholder="enter your user name"> <br> --}}

            <input type="submit" name="save" id="save" value="save" class="btn btn-primary">
            <input type="button" name="clear" id="clear" value="clear" class="btn btn-warning">

          </form>
<br>
<br>
            <table class="table table-dark">
                <th>id</th>
                <th>name</th>
                <th>compny</th>
                <th>completed</th>
                <th>action</th>



                @foreach($login as $login)

                <tr>
                    <td>{{$login->id}}</td>
                    <td>{{$login->products}}</td>
                    <td>{{$login->quantity}}</td>
                    <td>  @if($login->iscompleted) <button class="btn btn-success">completed</button>

                     @else
                        <button class="btn btn-warning">Not completed</button>
                        @endif
                    </td>
                    <td>
                    @if(!$login->iscompleted)

                    <a href="/markascompleted/{{$login->id}}" class="btn btn-primary">Mark as Completed</a>

                        @else
                     <a href="/markasNOTcompleted/{{$login->id}}" class="btn btn-danger">Mark as Not Completed</a>
                     @endif
                     <a href="/deletedata/{{$login->id}}" class="btn btn-light">Delete</a>
                     <a href="/updatedata/{{$login->id}}" class="btn btn-dark">update</a>

                      </td>

                </tr>
                @endforeach

            </table>















            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
