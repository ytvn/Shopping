<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form id="register" method="POST" action="{{route('signup')}}?returnurl=">
											<h4 id="error" style="display:none; color:red;padding-bottom:10px; ">Repassword not match</h4>
											<div class="sign-up" >
												@if(isset($status))
													@if($status=="register_fail")
													<h4 style="color:red;padding-bottom:10px; ">Your email already exist</h4>
													@endif
												@endif
												<h4>Email :</h4>
												<input type="text" id="email" name="email" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up" >
												<h4>Name :</h4>
												<input type="text" id="name" name="name" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" id="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" id="repassword" name="repassword" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input  type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
									
										<h3>Sign in with your account</h3>
										<form class="signin" method="POST" action="{{ route('signin') }}?returnurl=">
											@if(isset($status))
												@if($status=="fail")
												<h4 style="color:red;padding-bottom:10px; ">Invaild email or password</h4>
												@endif
											@endif
										
											<div class="sign-in">
												<h4>Email :</h4>
												@if(isset($status))
													@if($status=="fail")
														<input type="text" name="email" value="{{$email}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{$email}}';"  required="">
													@endif
												@else
													<input type="text" name="email" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
												
												@endif
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="javascript:void(0)" class="forgot_password">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
 

<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script>
	function check_repass(){
		$("#repassword").blur(function(){			
			var repassword = document.getElementById("repassword").value;
			var password = document.getElementById("password").value;
			if(repassword!=password)
				document.getElementById("error").style = "display:show; color:red;padding-bottom:10px; ";
			else
				document.getElementById("error").style = "display:none; color:red;padding-bottom:10px; ";
		});
	}
	function isEmpety(){
			var repassword = document.getElementById("repassword").value;
			var password = document.getElementById("password").value;
			var email = document.getElementById("email").value;
			var name = document.getElementById("name").value;
		$("#register").submit(function(event){
			event.preventDefault();
			if(repassword!="" && password!="" && email!="" && name!=""){
				$(this).unbind('submit').submit()
			}
			else{
				document.getElementById("error").innerHTML  = "You must fill in all of fields";
				document.getElementById("error").style = "display:show; color:red;padding-bottom:10px; ";
			}
		});

	}

	function setReturnUrl(){
		x=$("#register").attr("action");
		$("#register").attr("action", x+window.location.href);
		y=$(".signin").attr("action");
		$(".signin").attr("action", y+window.location.href);
	}
	$(() => {
		isEmpety();
		check_repass();
		setReturnUrl();
		if (window.location.hash === "#open-login-modal") {
			$("#myModal4").modal("show");
		}
		$(".forgot_password").click(function(){
			$("#myModal4").modal("hide");
			$("#myModalfg").modal("show");
		});
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>