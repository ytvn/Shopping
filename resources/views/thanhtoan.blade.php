@extends('layouts.full')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
	<div class="row">
            <div class="col-sm-6">
             <!-- <form  enctype="multipart/form-data" id="sendemail">
                    {{ csrf_field() }} -->
                    <p class="user_id" style="display: none;">{{$id}}</p>
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="user_name" value="{{$name}}"name="name"disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="user_email" value="{{$email}}" name="email"disabled>
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" id="user_address" placeholder="Enter your Address"
                            name="address">
                        <p id="error_address" style="color:red;"></p>
                    </div>
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="text" class="form-control" id="user_phone" placeholder="Enter your phone" name="phone">
                        <p id="error_phone" style="color:red;"></p>
                    </div>
                   
                        <button  class="charge btn btn-warning btn-rounded w-md waves-effect waves-light m-b-7">Charge</button>
                <!-- </form> -->
            </div>
            <div class="col-sm-6">
				<!-- <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div> -->
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s" style="width:80%;" >
					<h4>Shopping basket</h4>
					<ul>
						<li></li>
						<li class="total">Total <i>-</i> <span id="total"></span>  </li>
					</ul>
				</div>
				<!-- <div class="clearfix"> </div>		 -->
			</div>
	</div>
</div>
<!-- //check out -->	
<script src="{{asset('js/checkout.js')}}"></script>
@endsection
