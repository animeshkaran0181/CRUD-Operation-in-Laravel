<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">theusablognews.com</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/employee/create')}}">New registration</a>
          </li>
         
        </form>
      </div>
    </div>
  </nav>
  <body>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Employee ID</th>
            <th>Bussines Area</th>
            <th>Street</th>
            <th>Additional Information</th>
            <th>Zipcode</th>
            <th>Place</th>
            <th>Country</th>
            <th>Phone Number</th>
            <th>Your Email</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($Employee as $key => $emp)
          <tr>
            <td scope="row">{{++$key}}</td>
            <td>{{$emp->firstname}}</td>
            <td>{{$emp->lastname}}</td>
            <td>{{$emp->position}}</td>
            <td>{{$emp->employeeid}}</td>
            <td>{{$emp->bussinesarea}}</td>
            <td>{{$emp->street}}</td>
            <td>{{$emp->additionalinformation}}</td>
            <td>{{$emp->zipcode}}</td>
            <td>{{$emp->place}}</td>
            <td>{{$emp->country}}</td>
            <td>{{$emp->phonenumber}}</td>
            <td>{{$emp->youremail}}</td>
            <td>
              <a href="{{url('/edit',$emp->id)}}" class="btn btn-primary" >Edit</a>
              <a href="{{url('/delete',$emp->id)}}" class="btn btn-danger" >Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      
    
  </body>
</html>