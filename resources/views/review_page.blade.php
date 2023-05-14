<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>complete information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <style>
.informtion2{
    display: none;
}

  </style>
</head>
<body>


    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Pass</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Port</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="" >
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0">register in RS4IT</h6>
                </a>

            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">RS4IT</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('register.RS4IT') }}" class="nav-item nav-link">RS4IT</a>
                            <a href="{{ route('admin.information.order') }}" class="nav-item nav-link">Dashboard</a>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">

            <form action="{{ route('review.page',['id'=>$id])}}" method="POST">
                @csrf
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <h2>Review -all guest date</h2>
                    </div>

                       <h5>Eligible night  </h5>

                            @foreach ($array as $information)


                       <div class="mb-3">
                        <label for="password" class="form-label">First name:</label>
                        <input value="{{$information->first_name }}" name="first_name"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Last name:</label>
                    <input value="{{$information->last_name }}" name="last_name"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
               </div>

               <div class="mb-3">
                <label for="password" class="form-label">Phone:</label>
                <input value="{{ \Auth::user()->phone }}" name="phone"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                </div>

               <div class="mb-3">
                <label for="password" class="form-label">Date of birtday:</label>
                <input value="{{$information->date_birthday }}"  name="date_birthday" min="1800-05-11" max="{{ \Carbon\Carbon::today()->toDateString()}}"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
             </div>


             <div class="mb-3">
                <label for="password" class="form-label">Gender:</label>

                <input class="form-control" name="gender"  value="{{$information->gender}}"  type="text" ">
             </div>


                <div class="mb-3">

                        <label for="password" class="form-label">Place of birth :</label>
                        <select value="{{$information->place_birth }}"  name="place_birth" class="form-select" >
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="mb-3">

                        <label  for="password" class="form-label">Country of Residency :</label>
                        <select value="{{$information->country_residency }}" name="country_residency" class="form-select" >
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Passport No : <small style="color: red">(min number of characters is 6)</small>
                        </label>
                        <input value="{{$information->passport }}"  name="passport" minlength="6"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                     </div>


                     <div class="mb-3">
                        <label for="password" class="form-label">Issue date :</label>
                        <input  value="{{$information->date_issue }}"  name="date_issue" min="1800-05-11" max="{{ \Carbon\Carbon::today()->toDateString()}}"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
                     </div>


                     <div class="mb-3">
                        <label for="password" class="form-label">	Expiry date :</label>
                        <input  value="{{$information->date_expiry }}" name="date_expiry"    type="date" class="form-control" id="password" aria-describedby="emailHelp">
                     </div>

                     <div class="mb-3">

                        <label for="password" class="form-label">Place of issue  :</label>
                        <select value="{{$information->place_issue }}" name="place_issue" class="form-select" >
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Arrival date :</label>
                        <input  value="{{$information->date_arrival }}" name="date_arrival"    type="date" class="form-control" id="password" aria-describedby="emailHelp">
                     </div>

                     <div class="mb-3">
                        <label for="password" class="form-label">Profession :</label>
                        <input value="{{$information->profession }}" name="profession"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                     </div>

                     <div class="mb-3">
                        <label for="password" class="form-label">Organization  :</label>
                        <input value="{{$information->organization }}" name="organization"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                     </div>

                     <div class="mb-3">

                        <label for="password" class="form-label">Visa duration   :</label>
                        <select  value="{{$information->visa_duration }}" name="visa_duration" class="form-select" >
                            @for ($i ;$i<=90;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Visa status :</label>
                        <input class="form-control"  value="{{$information->status }}" name="status"  value="multiple"  type="text">
                     </div>

                     <div class="mb-3">
                        <p>Please upload require documents for VISA requirement</p>
                        <label  for="password" class="form-label">Passport picture   :</label>
                       <label style="margin-left: 50px" for="password" class="form-label">Personal picture    :</label>

                       <br> <img style="height: 150px;width: 150px" src="{{ asset('image/personal') }}/{{ $information->personal_picture }}" alt="">

                     <img style="height: 150px;width: 150px;margin-left: 50px" src="{{ asset('image/passport') }}/{{ $information->passport_picture }}" alt="">

                        <p>Note: picture most meet requirement in order to apply for VISA</p>
                    </div>

                    @endforeach





                   <div class="mb-3">
                    <label for="password" class="form-label">Check in date:</label>
                    <input  value="{{$request->check_in_date_eligible}}" id="previous-date" onchange="updateDateInput()" name="check_in_date_eligible"    type="date" class="form-control" id="password" aria-describedby="emailHelp">

                </div>

                 <div class="mb-3">
                    <label for="password" class="form-label">Check out date:</label>
                    <input value="{{ $request->check_out_date_eligible}}" name="check_out_date_eligible" id="future-date"   type="date" class="form-control" id="password" aria-describedby="emailHelp">
                 </div>





                 <h5>Extra night  </h5>
                    <div class="mb-3">
                     <label for="password" class="form-label">Check in date:</label>
                     <input value="{{ $request->check_in_date_extra }}" name="check_in_date_extra"    type="date" class="form-control" id="password" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                     <label for="password" class="form-label">Check out date:</label>
                     <input value="{{ $request->check_out_date_extra }}" name="check_out_date_extra"     type="date" class="form-control" id="password" aria-describedby="emailHelp">
                  </div>



                    <div class="mb-3">
                        <button class="btn btn-warning">Confirm && Submit  </button>
                    </div>
                </div>

            </div>
        </form>
        <br>
        <br>
        <br>
        </div>
     </div>
</div>


<script>
function updateDateInput() {
    var previousDate = new Date(document.getElementById("previous-date").value);
    var maxDate = new Date(previousDate.getTime() + (4* 24 * 60 * 60 * 1000)).toISOString().split('T')[0];
    document.getElementById("future-date").setAttribute("max", maxDate);

    var today = new Date().toISOString().split('T')[0];
    if (maxDate < today) {
      document.getElementById("future-date").setAttribute("disabled", true);
    } else {
      document.getElementById("future-date").removeAttribute("disabled");
    }
  }
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</body>





</html>
