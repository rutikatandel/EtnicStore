<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('user.include.header')

	<div class="banner">
		<div class="container">
<div class="banner-bottom">
	<div class="banner-bottom-left">
		<h2>B<br>U<br>Y</h2>
	</div>
	<div class="banner-bottom-right">
		<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3>Smart But Casual</h3>
									<p>Start your shopping here...</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>Shop Online</h3>
									<p>Start your shopping here...</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								  <h3>Pack your Bag</h3>
									<p>Start your shopping here...</p>
								</div>								
							</li>
						</ul>
					</div>
					<!--banner-->
	  			<script src="{{ asset('user/js/responsiveslides.min.js') }}"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</div>
	<div class="clearfix"> </div>
</div>
	<div class="shop">
		<a href="single">SHOP COLLECTION NOW</a>
	</div>
	</div>
		</div>
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-4 follow-us">
						<h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-4 shipping-grid">
						<div class="shipping">
							<img src="{{ asset('user/css/bootstrap.css') }}images/shipping.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>Free Shipping</h3>
							<p>on orders over $ 199</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 online-order">
						<p>Order online</p>
						<h3>Tel:999 4567 8902</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="products-grid">
				<header>
					<h3 class="head text-center">Latest Products</h3>
				</header>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p1.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">Sed ut perspiciatis</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$329</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p2.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">great explorer</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$599.8</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p3.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">similique sunt</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$359.6</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p4.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">shrinking </a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$649.99</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p5.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">perfectly simple</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$750</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p6.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">equal blame</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$295.59</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p7.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single.html">Quick View</a>
						</div>
						<a class="product_name" href="single">Neque porro</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$380</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p8.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">perfectly simple</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$540.6</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single"><img src="{{ asset('user/images/p9.jpg') }}" alt="" /></a>
						<div class="mask">
							<a href="single">Quick View</a>
						</div>
						<a class="product_name" href="single">praising pain</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$229.5</span></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">Featured Collection</h3>        			
				     <ul id="flexiselDemo3">
						<li><a href="single"><img src="{{ asset('user/images/l1.jpg') }}" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single">perfectly simple</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
							</div>
						</li>
						<li><a href="single"><img src="{{ asset('user/images/l2.jpg') }}" class="img-responsive" alt="" /></a>						
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single">praising pain</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
							</div>
						</li>
						<li><a href="single"><img src="{{ asset('user/images/l3.jpg') }}" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single">Neque porro</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
							</div>
						</li>
						<li><a href="single"><img src="{{ asset('user/images/l4.jpg') }}" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single">equal blame</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
							</div>
						</li>
						<li><a href="single"><img src="{{ asset('user/images/l5.jpg') }}" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single">perfectly simple</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
							</div>
						</li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="{{ asset('user/js/jquery.flexisel.js') }}"></script>
				   </div>
				   </div>
		<!-- content-section-ends-here -->

		@include('user.include.footer')
	