@extends('main')

@section('content')
	<!-- start banner Area -->
	@include('banner')
	<!-- End banner Area -->	

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="map-wrap" style="width:100%; " ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4205948966037!2d106.78291401533438!3d10.855580060694816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175276e7ea103df%3A0xb6cf10bb7d719327!2sHUTECH%20University%20-%20E%20Campus%20(SHTP)!5e0!3m2!1svi!2s!4v1638284842116!5m2!1svi!2s" width="100%" height="445" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
				{{-- <div class="col-lg-4 d-flex flex-column">
					<a class="contact-btns" href="#">Submit Your CV</a>
					<a class="contact-btns" href="#">Post New Job</a>
					<a class="contact-btns" href="#">Create New Account</a>
				</div> --}}
				<div class="col-lg-8">
					<form class="form-area " action="/contacts" method="POST" class="contact-form text-right">
						@csrf
						<div class="row">	
							<div class="col-lg-12 form-group">
								<h4 style="padding-bottom: 15px">Họ và tên</h4>
								<input name="name" placeholder="Nhập họ và tên" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập họ và tên'" class="common-input mb-20 form-control" required="" type="text">
								
								<h4 style="padding-bottom: 15px">Email</h4>
								<input name="email" placeholder="Nhập email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập email'" class="common-input mb-20 form-control" required="" type="email">

								<h4 style="padding-bottom: 15px">Tiêu đề</h4>
								<input name="subject" placeholder="Nhập tiêu đề liên hệ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tiêu đề liên hệ'" class="common-input mb-20 form-control" required="" type="text">

								<h4 style="padding-bottom: 15px">Nội dung liên hệ</h4>
								<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Nhập nội dung liên hệ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập nội dung liên hệ'" required=""></textarea>
								<button type="submit" class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
								<div class="mt-20 alert-msg" style="text-align: left;"></div>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>	
	</section>
	<!-- End contact-page Area -->
@endsection