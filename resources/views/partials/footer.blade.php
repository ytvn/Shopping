<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="{{$url->getHome()}}"><img src="{{asset('images/logo3.jpg')}}" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non
			numquam eius modi tempora incidunt ut labore
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="{{$url->getHome()}}">Home</a></li>
						<li><a href="{{$url->getMens()}}">Men's Wear</a></li>
						<li><a href="{{$url->getWomens()}}">Women's Wear</a></li>
						<li><a href="{{$url->getElectronic()}}">Electronics</a></li>
						<li><a href="{{$url->getCodes()}}">Short Codes</a></li>
						<li><a href="{{$url->getContact()}}">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b16.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b17.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b18.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b16.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b17.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b18.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="{{$url->getSingle()}}"><img src="{{asset('images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>

<div class="modal fade"  tabindex="-1" role="dialog"  id="charge_success" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Smart shop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn đã thanh toán thành công</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- //footer -->
