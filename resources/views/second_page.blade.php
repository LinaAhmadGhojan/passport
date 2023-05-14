<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>complete information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
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
            <form action="{{ route('complete.passport',['id'=>request('id')])}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <h2>web -two page</h2>
                    </div>

                    <div class="mb-3">
                            <label for="password" class="form-label">First name:</label>
                            <input name="first_name" required type="text" class="form-control" id="password" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Last name:</label>
                        <input name="last_name" required type="text" class="form-control" id="password" aria-describedby="emailHelp">
                   </div>


                   <div class="mb-3">
                    <label for="password" class="form-label">Date of birtday:</label>
                    <input name="date_birthday" min="1800-05-11" max="{{ \Carbon\Carbon::today()->toDateString()}}" required type="date" class="form-control" id="password" aria-describedby="emailHelp">
                 </div>


                 <div class="mb-3">
                    <label for="password" class="form-label">Gender:</label>
                    <input name="gender"  value="male" required type="radio" style="margin-left: 30px;">Male
                    <input name="gender"  value="female" required type="radio" style="margin-left: 30px;">Female
                 </div>


                    <div class="mb-3">

                            <label for="password" class="form-label">Place of birth :</label>
                            <select name="place_birth" class="form-select" >
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">

                            <label for="password" class="form-label">Country of Residency :</label>
                            <select name="country_residency" class="form-select" >
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Passport No : <small style="color: red">(min number of characters is 6)</small>
                            </label>
                            <input name="passport" minlength="6" required type="text" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>


                         <div class="mb-3">
                            <label for="password" class="form-label">Issue date :</label>
                            <input  name="date_issue" min="1800-05-11" max="{{ \Carbon\Carbon::today()->toDateString()}}" required type="date" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>


                         <div class="mb-3">
                            <label for="password" class="form-label">	Expiry date :</label>
                            <input name="date_expiry"  min="{{ \Carbon\Carbon::today()->toDateString()}}" required type="date" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>

                         <div class="mb-3">

                            <label for="password" class="form-label">Place of issue  :</label>
                            <select name="place_issue" class="form-select" >
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Arrival date :</label>
                            <input name="date_arrival"  min="{{ \Carbon\Carbon::today()->toDateString()}}" required type="date" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>

                         <div class="mb-3">
                            <label for="password" class="form-label">Profession :</label>
                            <input name="profession" required type="text" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>

                         <div class="mb-3">
                            <label for="password" class="form-label">Organization  :</label>
                            <input name="organization" required type="text" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>

                         <div class="mb-3">

                            <label for="password" class="form-label">Visa duration   :</label>
                            <select name="visa_duration" class="form-select" >
                                @for ($i ;$i<=90;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Visa status :</label>
                            <input name="status"  value="multiple" required type="radio" style="margin-left: 30px;">Multiple
                            <input name="status"  value="single" required type="radio" style="margin-left: 30px;">Single
                         </div>

                         <div class="mb-3">
                            <p>Please upload require documents for VISA requirement</p>
                            <label for="password" class="form-label">Passport picture   : </label>
                            <input name="passport_picture" required type="file" class="form-control" id="password" aria-describedby="emailHelp">
                            <label for="password" class="form-label">Personal picture    :</label>
                            <input name="personal_picture" required type="file" class="form-control" id="password" aria-describedby="emailHelp">
                            <p>Note: picture most meet requirement in order to apply for VISA</p>
                        </div>
                        <div class="mb-3">
                        Are you Traveling with companion (plus one)?
                        <span class="yes btn btn-primary" style="padding-left: 15px;padding-right:15px ;margin-left: 8%">yes </span>
                        <button class="no btn btn-danger" style="padding-left: 15px;padding-right:15px ;">no</button>

                        </div>


                        <div class="informtion2" >
                            <div class="mb-3">
                                <h4>Travel companion information</h4>
                            </div>

                            <div class="mb-3">
                                    <label for="password" class="form-label">First name:</label>
                                    <input name="first_name1"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Last name:</label>
                                <input name="last_name1"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                           </div>


                           <div class="mb-3">
                            <label for="password" class="form-label">Date of birtday:</label>
                            <input name="date_birthday1" min="1800-05-11" max="{{ \Carbon\Carbon::today()->toDateString()}}"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
                         </div>


                         <div class="mb-3">
                            <label for="password" class="form-label">Gender:</label>
                            <input name="gender1" checked value="male"  type="radio" style="margin-left: 30px;">Male
                            <input name="gender1"  value="Female"  type="radio" style="margin-left: 30px;">Female
                         </div>


                            <div class="mb-3">

                                    <label for="password" class="form-label">Place of birth :</label>
                                    <select name="place_birth1" class="form-select" >
                                        @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">

                                    <label for="password" class="form-label">Country of Residency :</label>
                                    <select name="country_residency1" class="form-select" >
                                        @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Passport No : <small style="color: red">(min number of characters is 6)</small></label>
                                    <input name="passport1" minlength="6"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                                 </div>


                                 <div class="mb-3">
                                    <label for="password" class="form-label">Issue date :</label>
                                    <input  name="date_issue1" min="1800-05-11" max="{{ \Carbon\Carbon::today()->toDateString()}}"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
                                 </div>


                                 <div class="mb-3">
                                    <label for="password" class="form-label">	Expiry date :</label>
                                    <input name="date_expiry1"  min="{{ \Carbon\Carbon::today()->toDateString()}}"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
                                 </div>

                                 <div class="mb-3">

                                    <label for="password" class="form-label">Place of issue  :</label>
                                    <select name="place_issue1" class="form-select" >
                                        @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Arrival date :</label>
                                    <input name="date_arrival1"  min="{{ \Carbon\Carbon::today()->toDateString()}}"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
                                 </div>

                                 <div class="mb-3">
                                    <label for="password" class="form-label">Profession :</label>
                                    <input name="profession1"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                                 </div>

                                 <div class="mb-3">
                                    <label for="password" class="form-label">Organization  :</label>
                                    <input name="organization1"  type="text" class="form-control" id="password" aria-describedby="emailHelp">
                                 </div>

                                 <div class="mb-3">

                                    <label for="password" class="form-label">Visa duration   :</label>
                                    <select name="visa_duration1" class="form-select" >
                                        @for ($i=1 ;$i<=90;$i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Visa status :</label>
                                    <input name="status1"  value="multiple" checked type="radio" style="margin-left: 30px;">Multiple
                                    <input name="status1"  value="single"  type="radio" style="margin-left: 30px;">Single
                                 </div>

                                 <div class="mb-3">
                                    <p>Please upload require documents for VISA requirement</p>
                                    <label for="password" class="form-label">Passport picture   :</label>
                                    <input name="passport_picture1"  type="file" class="form-control" id="password" aria-describedby="emailHelp">
                                    <label for="password" class="form-label">Personal picture    :</label>
                                    <input name="personal_picture1"  type="file" class="form-control" id="password" aria-describedby="emailHelp">
                                    <p>Note: picture most meet requirement in order to apply for VISA</p>
                                </div>

                        </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Next >> </button>
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

</body>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    $(document).ready(function(){

      $(".yes").click(function(){
        $(".informtion2").show();
      });

      $(".no").click(function(){
        $(".informtion2").hide();
      });


    });
</script>


</html>
