
<!DOCTYPE HTML>
<html>
<head>
<title>Gifty an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('/')}}front/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="{{asset('/')}}front/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('/')}}front/css/jquery.countdown.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('/')}}front/js/jquery-1.11.1.min.js"></script>
<!-- dropdown -->
<script src="{{asset('/')}}front/js/jquery.easydropdown.js"></script>
<!-- start menu -->
<link href="{{asset('/')}}front/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('/')}}front/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{asset('/')}}front/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script src="{{asset('/')}}front/js/jquery.countdown.js"></script>
<script src="{{asset('/')}}front/js/script.js"></script>

<link rel="stylesheet" href="{{asset('/')}}front/css/etalage.css">
<script src="{{asset('/')}}front/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>


</head>
<body>
<div class="header_top">
  <div class="container">
  	<div class="header_top-box">
     <div class="header-top-left">
			  <div class="box">
			  	   	<select tabindex="4" class="dropdown drop">
					   <option value="" class="label" value="">Dollar :</option>
				       <option value="1">Dollar</option>
				       <option value="2">Euro</option>
					</select>
   			   </div>
   			   <div class="box1">
   				       <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">English :</option>
							<option value="1">English</option>
							<option value="2">Bangla</option>
							
					  </select>
   			   </div>
   				    <div class="clearfix"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
					@if(Session::get('customer_id'))
					<li><a href="" onclick="event.preventDefault(); document.getElementById('customerLogoutForm').submit()">Logout</a></li>
					<form action="{{ route('customer-logout')}}" method="POST" id="customerLogoutForm" >
						@csrf
					</form>
					@else 
					<li><a href="login.html">Log In</a></li> 
					<li><a href="register.html">Sign Up</a></li>
					@endif
				</ul>
			</div>
			<div class="clearfix"></div>
   </div>
</div>
</div>
<div class="header_bottom">
	<div class="container">
	 <div class="header_bottom-box">
		<div class="header_bottom_left">
			<div class="logo">
				<a href="{{route('/')}}"><img src="{{asset('/')}}front/images/logo.png" alt=""/></a>
			</div>
			<ul class="clock">
				<i class="clock_icon"> </i>
				<li class="clock_desc">Justo 24/h</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="header_bottom_right">
			<div class="search">
			  <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
	  		<ul class="bag">
	  			<a href="{{ route('show-cart') }}"><i class="bag_left"> </i></a>
	  			<a href="#">
				  <li class="bag_right">
				  <p> TK.
				  	 @if($grand_total = Session::get('grand_total'))
					   {{ number_format($grand_total)}}
					   @else
					   0
				  	@endif
				  </p> 
				  </li>
				  </a>
	  			<div class="clearfix"> </div>
	  		</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<div class="menu">
	<div class="container">
		<div class="menu_box">
	     <ul class="megamenu skyblue">
			<li class="active grid"><a class="color2" href="{{ route('dashboard')}}">Home</a></li>
							
			@foreach($categories as $key => $category)
			<li><a class="color4" href="{{ route('category-product',['id' => $category->id]) }}">{{ $category->name }}</a></li>
			@endforeach

			<div class="clearfix"> </div>
		 </ul>
	  </div>
</div>
</div>
@yield('body')
<div class="footer">
	<div class="container">
		<img src="{{asset('/')}}front/images/pay.png" class="img-responsive" alt=""/>
		<ul class="footer_nav">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Blog</a></li>
		  <li><a href="#">Shop</a></li>
		  <li><a href="#">Media</a></li>
		  <li><a href="#">Features</a></li>
		  <li><a href="#">About Us</a></li>
		  <li><a href="contact.html">Contact Us</a></li>
		</ul>
		<p class="copy">Copyright&copy; 2020 Template by <a href="#" target="_blank"> Sabbir</a></p>
	</div>
</div>
<link href="{{asset('/')}}front/css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="{{asset('/')}}front/js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>

 <script>
	function checkEmailAddress(email)
	{
		$.ajax({
			method : "GET",
			url    : "{{ url('check-email-address')}}",
			data   : {email:email},
			dataType : 'JSON',
			success : function(response){
				$('#emailStatusMessage').text(response.message);
				if(response.success == true)
				{
					$('#regBtn').prop('disabled',false);
				}
				else
				{
					$('#regBtn').prop('disabled',true);
				}
			}
		});
	}

 </script>
							  
</body>
</html>		