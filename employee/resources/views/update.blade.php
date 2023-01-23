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
  <style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #a1c4fd;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
    }

    .bg-indigo {
        background-color: #4835d4;
    }

    @media (min-width: 992px) {
        .card-registration-2 .bg-indigo {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    }

    @media (max-width: 991px) {
        .card-registration-2 .bg-indigo {
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    }
</style>
  <body>
    <section class="h-100 h-custom gradient-custom-2">
      <div class="container py-5 h-100">
          <form action="{{ url('/update',$employee->id)}}" method="post">
              @csrf
              @method("PUT")
              <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12">
                      <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                          <div class="card-body p-0">
                              <div class="row g-0">
                                  <div class="col-lg-6">
                                      <div class="p-5">
                                          <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                                          <div class="mb-4 pb-2">
                                              <select class="select">
                                                  <option value="1">Title</option>
                                                  <option value="2">Mr.</option>
                                                  <option value="3">Ms.</option>
                                                  <option value="4">Mrs.</option>
                                              </select>
                                          </div>

                                          <div class="row">
                                              <div class="col-md-6 mb-4 pb-2">

                                                  <div class="form-outline">
                                                      <input type="text" name="firstname" id="form3Examplev2"
                                                          class="form-control form-control-lg" value="{{$employee->firstname}}"/>
                                                      <label class="form-label" for="form3Examplev2">First
                                                          name</label>
                                                  </div>

                                              </div>
                                              <div class="col-md-6 mb-4 pb-2">

                                                  <div class="form-outline">
                                                      <input type="text" name="lastname" id="form3Examplev3"
                                                          class="form-control form-control-lg"value="{{$employee->lastname}}" />
                                                      <label class="form-label" for="form3Examplev3">Last name</label>
                                                  </div>

                                              </div>
                                          </div>



                                          <div class="mb-4 pb-2">
                                              <div class="form-outline">
                                                  <input type="text" name="position" id="form3Examplev4"
                                                      class="form-control form-control-lg" value="{{$employee->position}}"/>
                                                  <label class="form-label" for="form3Examplev4">Position</label>
                                              </div>
                                          </div>
                                          <div class="mb-4 pb-2">
                                              <div class="form-outline">
                                                  <input type="text" name="employeeid" id="form3Examplev4"
                                                      class="form-control form-control-lg" value="{{$employee->employeeid}}"/>
                                                  <label class="form-label" for="form3Examplev4">Employee ID</label>
                                              </div>
                                          </div>


                                          <div class="row">
                                              <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                  <div class="form-outline">
                                                      <input type="text" name="bussinesarea" id="form3Examplev5"
                                                          class="form-control form-control-lg"value="{{$employee->businessarea}}" />
                                                      <label class="form-label" for="form3Examplev5">Bussines
                                                          Area</label>
                                                  </div>

                                              </div>


                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-lg-6 bg-indigo text-white">
                                      <div class="p-5">
                                          <h3 class="fw-normal mb-5">Contact Details</h3>

                                          <div class="mb-4 pb-2">
                                              <div class="form-outline form-white">
                                                  <input type="text" name="street" id="form3Examplea2"
                                                      class="form-control form-control-lg" value="{{$employee->street}}"/>
                                                  <label class="form-label" for="form3Examplea2">Street</label>
                                              </div>
                                          </div>

                                          <div class="mb-4 pb-2">
                                              <div class="form-outline form-white">
                                                  <input type="text" name="additionalinformation" id="form3Examplea3"
                                                      class="form-control form-control-lg" value="{{$employee->additionalinformation}}"/>
                                                  <label class="form-label" for="form3Examplea3">Additional
                                                      Information</label>
                                              </div>
                                          </div>

                                          <div class="row">
                                              <div class="col-md-5 mb-4 pb-2">

                                                  <div class="form-outline form-white">
                                                      <input type="number" name="zipcode" id="form3Examplea4"
                                                          class="form-control form-control-lg" value="{{$employee->zipcode}}"/>
                                                      <label class="form-label" for="form3Examplea4">Zip Code</label>
                                                  </div>

                                              </div>
                                              <div class="col-md-7 mb-4 pb-2">

                                                  <div class="form-outline form-white">
                                                      <input type="text" name="place" id="form3Examplea5"
                                                          class="form-control form-control-lg" value="{{$employee->place}}"/>
                                                      <label class="form-label" for="form3Examplea5">Place</label>
                                                  </div>

                                              </div>
                                          </div>

                                          <div class="mb-4 pb-2">
                                              <div class="form-outline form-white">
                                                  <input type="text" name="country" id="form3Examplea6"
                                                      class="form-control form-control-lg" value="{{$employee->country}}"/>
                                                  <label class="form-label" for="form3Examplea6">Country</label>
                                              </div>
                                          </div>

                                          
                                          <div class="mb-4 pb-2">
                                              <div class="form-outline form-white">
                                                  <input type="number" name="phonenumber" id="form3Examplea6"
                                                      class="form-control form-control-lg" value="{{$employee->phonenumber}}"/>
                                                  <label class="form-label" for="form3Examplea6">Phone Number</label>
                                              </div>
                                          </div>
                                      

                                          <div class="mb-4">
                                              <div class="form-outline form-white">
                                                  <input type="email" name="youremail" id="form3Examplea9"
                                                      class="form-control form-control-lg"value="{{$employee->youremail}}" />
                                                  <label class="form-label" for="form3Examplea9">Your Email</label>
                                              </div>
                                          </div>

                                          

                                          <button type="submit" class="btn btn-primary"
                                              data-mdb-ripple-color="dark">Register</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </section>


      
   
  </body>
</html>