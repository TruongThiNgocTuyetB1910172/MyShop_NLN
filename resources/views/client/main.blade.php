
<!DOCTYPE html>
<html lang="zxx">

@include('client.head')

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
  @include('client.navbar')
    

   
  @yield('content')
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
   
    <!-- Lookbok Section End -->

  

    <!-- Footer Section Begin -->
    @include('client.footter')
</body>

</html>