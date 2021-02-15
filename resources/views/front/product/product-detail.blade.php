@extends('front.master')

@section('body')

<div class="men">
	<div class="container">
	  <div class="single_top">
	       <div class="col-md-9 single_right">
	   	       <div class="grid images_3_of_2">
						<ul id="etalage">
							@foreach($sub_images as $key => $sub_image)

							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="{{asset( $sub_image->sub_image)}}" class="img-responsive" />
									<img class="etalage_source_image" src="{{asset($sub_image->sub_image)}}" class="img-responsive" title="" />
								</a>
							</li>

							@endforeach
							
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				    <h1>{{ $product->name }}</h1>
				    <p class="m_5"> {{ $product->price }} <a href="#">click for offer</a></p>
				    <h4>Category Name : {{ $product->category->name }}</h4>
					<h4>Brand Name : {{ $product->brand->name }}</h4>
					<h4>Stock Status : {{ $product->stock_amount > 0 ? 'Available' : 'Not Available' }}</h4>
					<div class="btn_form">
						<form action="{{ route('add-to-cart') }}" method="POST">
							@csrf
							<input type="number" name="qty" class="from-control" value="1" min="1"/>
							<input type="hidden" name="id" value="{{ $product->id }}"/>
							<input type="submit" value="Add To Cart" title="">
						</form>
					 </div>
					 <span class="m_link"><a href="#">login to save in wishlist</a> </span>
					 <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit </p>
				  </div>
				  <div class="clearfix"></div>	
       </div>
       <div class="col-md-3">
      	<!-- FlexSlider -->
              <section class="slider_flex">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="{{asset('/')}}front/images/pic4.jpg" class="img-responsive" alt=""/></li>
						<li><img src="{{asset('/')}}front/images/pic7.jpg" class="img-responsive" alt=""/></li>
						<li><img src="{{asset('/')}}front/images/pic6.jpg" class="img-responsive" alt=""/></li>
						<li><img src="{{asset('/')}}front/images/pic5.jpg" class="img-responsive" alt=""/></li>
				    </ul>
				  </div>
	          </section>
<!-- FlexSlider -->
      </div>
      <div class="clearfix"> </div>
     </div>
       <div class="toogle">
     	<h2>Product Short Description</h2>
     	<p class="m_text2">{{ $product->short_description }}</p>
     </div>
     <div class="toogle">
     	<h2>Product Long Description</h2>
     	<p class="m_text2">{{ $product->long_description }}</p>
     </div>
     <h4 class="head_single">Related Products</h4>
     <div class="span_3">
	 			@foreach( $related_products as $key => $related_product)
				 @if($related_product->id != $product->id)
				 <div class="col-sm-3 grid_1">
	          	    <a href="{{ route('product-detail',[ 'id' => $related_product->id]) }}">
				     <img src="{{ asset($related_product->image) }}" class="img-responsive" alt="" style="height:250px;"/>
				     <h2>{{ $related_product->name }}</h2>
				   	 
				   	 <h4>TK. {{ $related_product->price }}</h4>
			         </a>  
				  </div> 
				 @endif
	          	 
				@endforeach
				<div class="clearfix"></div>
	     </div>
      </div>
</div>
     
@endsection
