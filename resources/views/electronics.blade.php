@extends('layouts.full')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Electronics</h3>
	</div>
</div>
<!-- //banner -->
<div class="electronics">
	<div class="container">
		<div class="col-md-8 electro-left text-center">
			<div class="electro-img-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/watch.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e1.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-right mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e2.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 electro-right text-center">
			<div class="electro-img-rt mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e4.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="ele-bottom-grid">
				<h3><span>Latest </span>Collections</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
					<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ph1.png" alt="" class="pro-image-front">
									<img src="images/ph1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Apple Iphone 6</a></h4>
									<div class="info-product-price">
										<span class="item_price">$500.99</span>
										<del>$700.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ph3.png" alt="" class="pro-image-front">
									<img src="images/ph3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Apple Iphone 6s</a></h4>
									<div class="info-product-price">
										<span class="item_price">$799.99</span>
										<del>$999.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ph2.png" alt="" class="pro-image-front">
									<img src="images/ph2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Apple Iphone 6</a></h4>
									<div class="info-product-price">
										<span class="item_price">$180.99</span>
										<del>$250.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ph4.png" alt="" class="pro-image-front">
									<img src="images/ph4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Apple Iphone 6s</a></h4>
									<div class="info-product-price">
										<span class="item_price">$179.99</span>
										<del>$200.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep1.png" alt="" class="pro-image-front">
									<img src="images/ep1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">Combo Pack</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep2.png" alt="" class="pro-image-front">
									<img src="images/ep2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep3.png" alt="" class="pro-image-front">
									<img src="images/ep3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$149.99</span>
										<del>$180.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep4.png" alt="" class="pro-image-front">
									<img src="images/ep4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href={{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$119.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ph1.png" alt="" class="pro-image-front">
									<img src="images/ph1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{$url->getElectronic()}}">Apple Iphone 6</a></h4>
									<div class="info-product-price">
										<span class="item_price">$500.99</span>
										<del>$700.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ph3.png" alt="" class="pro-image-front">
									<img src="images/ph3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Apple Iphone 6s</a></h4>
									<div class="info-product-price">
										<span class="item_price">$799.99</span>
										<del>$999.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep4.png" alt="" class="pro-image-front">
									<img src="images/ep4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$119.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep1.png" alt="" class="pro-image-front">
									<img src="images/ep1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{$url->getElectronic()}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{{$url->getElectronic()}}">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
			</div>
	</div>
</div>
<!-- //Electronics -->
@endsection
