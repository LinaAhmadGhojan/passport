<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('dashboard/assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('dashboard/assets/css/portal.css') }}">
	<style>
		td,th{
			border: solid 1px;
			text-align:center;
		}

		.app-card-orders-table .table .cell {
    border-color: #e7e9ed;
    color: #ffffff;
    vertical-align: middle;
}

.app-nav .nav-link.active ,.app-nav .nav-link.active :focus
 {
    color: #ffffff;
    background: #272525;
    border-left: 3px solid #ffd333;
    font-weight: 500;
}

.app-sidepanel .sidepanel-inner {

    background: #272525;
    box-shadow: rgba(0,0,0,.05) 0px 8px 15px;

}

.app-nav .nav-link,.app-nav .nav-link:focus {

    color: #ffffff;

}
	</style>

</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
	        <div class="container-fluid py-2" style="    background-color: #272525;">
		        <div class="app-header-content">
		            <div class="row justify-content-between align-items-center">

				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <div class="search-mobile-trigger d-sm-none col">
			            <i class="search-mobile-trigger-icon fas fa-search"></i>
			        </div><!--//col-->
		            <div class="app-search-box col">
		                <form class="app-search-form">
							<input type="text" placeholder="Search..." name="search" class="form-control search-input">
							<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button>
				        </form>
		            </div><!--//app-search-box-->


		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
                     <p style="color: white;
					 font-size: 21px;">Dashboard</p>
		        </div><!--//app-branding-->
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1" style="background-color: rgb(39, 37, 37);;">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion" style="background-color: rgb(39, 37, 37);;">



			<li class="nav-item" style="background-color: rgb(39, 37, 37);;">
				<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
				<a  class="nav-link active"href="{{ route('admin.information.order') }}">
					<span class="nav-icon">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
<path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
<circle cx="3.5" cy="5.5" r=".5"/>
<circle cx="3.5" cy="8" r=".5"/>
<circle cx="3.5" cy="10.5" r=".5"/>
</svg>
					 </span>
					 <span class="nav-link-text">information Orders</span>
				</a><!--//nav-link-->
			</li><!--//nav-item-->

					    <li class="nav-item" style="background-color: rgb(39, 37, 37);;">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a href="{{ route('admin.eligible.stay') }}" class="nav-link active" >
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Eligible stay </span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->


						<li class="nav-item" style="background-color: rgb(39, 37, 37);;">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="{{ route('admin.extra.night') }}">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Extra night </span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->




						<li class="nav-item" style="background-color: rgb(39, 37, 37);;">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active"  href="{{ route('admin.get.send.invitation') }}">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Send invitation </span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->


                        <li class="nav-item" style="background-color: rgb(39, 37, 37);;">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active"  href="{{ route('adminLogout') }}">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Log out </span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->



				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->

	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->

    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">






				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
						<br>
						<br>

					    <div class="app-card app-card-orders-table shadow-sm mb-5">

						    <div class="app-card-body" style="background-color: #ffd333;">
								<h4 style="    font-family: emoji;
								color: white;
								text-align: center;">table Eligible stay </h4>

							    <div class="table-responsive" style="padding: 22px;padding-top: 0px;">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr style="background-color: #febb25;" >
												<th class="cell">phone </th>
												<th class="cell">email </th>
												<th class="cell">check in date </th>
												<th class="cell">check out date </th>
												<th class="cell">type room</th>


											</tr>
										</thead>
										<tbody>
                                            @foreach ($rooms as $item)
                                            <tr style="background-color: rgb(39, 37, 37);;">


												<td class="cell">{{ $item->phone }}</td>
												<td class="cell">{{ $item->email }}</td>
												<td class="cell">{{ $item->check_in_date_eligible }}</td>
												<td class="cell">{{ $item->check_out_date_eligible }}</td>
												<td class="cell">{{ $item->room_type_eligible }}</td>
									    </tr>
                                            @endforeach




										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->


    </div><!--//app-wrapper-->


    <!-- Javascript -->
    <script src="{{ asset('dashboard/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>


    <!-- Page Specific JS -->
    <script src="{{ asset('dashboard/assets/js/app.js') }}"></script>

</body>
</html>

