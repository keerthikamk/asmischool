
@extends('layouts.master')
			@section('title','About')
			@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image:url(/assets/images/backgrounds/a1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Contact</h2>
        <ul class="kidearn-breadcrumb list-unstyled">
            <li><a href="index">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one">
	<div class="container">
		<div class="sec-title text-center">
	
	<h6 class="sec-title__tagline">Contact with us</h6><!-- /.sec-title__tagline -->
	
	<h3 class="sec-title__title">Feel free to write us <br> anytime</h3><!-- /.sec-title__title -->
</div><!-- /.sec-title -->



              @if(request()->get('st') == 'ok')
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> Your mail sent successfully.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
              @if(request()->get('st') == 'nk')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Danger</strong> something went wrong try again later
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
		<form class="contact-one__form contact-form-validated form-one" method="post" action="sendmail.php" >
			@csrf
			<div class="form-one__group">
				<div class="form-one__control ">
					<input type="text" name="name" placeholder="Your name" required>
				</div><!-- /.form-one__control  -->
				<div class="form-one__control ">
					<input type="email" name="email" placeholder="Email address"required >
				</div><!-- /.form-one__control  -->
				<div class="form-one__control form-one__control--full ">
					<input type="text" name="phone" placeholder="Your phone" required>
				</div><!-- /.form-one__control  -->
		
				<div class="form-one__control form-one__control--full">
					<textarea name="message" placeholder="Write  a message" required></textarea><!-- /# -->
				</div><!-- /.form-one__control -->
				<div class="form-one__control form-one__control--full text-center">
					<button type="submit" class="kidearn-btn kidearn-btn--xl" name="submit"  ><span>Send a Message</span></button>
				</div><!-- /.form-one__control -->
			</div><!-- /.form-one__group -->
		</form>
	</div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-info-one">
	<div class="container-fluid">
		<div class="contact-info-one__inner">
			<div class="row">
			<div class="col-md-12 col-lg-4">
					<div class="contact-info-one__item" style="--accent-color: #75C137;">
						<i class="icon-location-fill contact-info-one__icon"></i>
						<p class="contact-info-one__title">Pallikaranai (Jeyachandran Textiles)</p>
					
							<!-- <a href="#">jayachandran Nagar / Vengaivasal</a> -->
							<p  class=" contact-info-one__text pe-5 ps-5" >A.S.M.I. Global Pre-School, No 5, 13th Cross Street, 1st Main Road Jeyachandran Nagar, Pallikaranai, Chennai 600 100.(<b>Land Mark</b>: Behind of Jeyachandran Textiles)
							</p>
							<span class=""><a class=" extra" href="tel:9444224466">Contact Number: 9444224466</a></span>
							
					<!-- /.contact-info-one__title -->
					</div><!-- /.contact-info-one__item -->
				</div><!-- /.col-md-12 -->
				<div class="col-md-12 col-lg-4">
					<div class="contact-info-one__item" style="--accent-color: #75C137;">
						<i class="icon-location-fill contact-info-one__icon"></i>
						<p class="contact-info-one__title">Perumbakkam (Malles Aashira)</p>
						
						<p  class=" contact-info-one__text pe-5 ps-5"> A.S.M.I. Global Pre-School, Malles Aashira, Nookampalayam Road, Perumbakkam Chennai: 600 100.(<b>Land Mark</b>: HDFC Bank Block - Malles Aashira)
					
						</p>
						<span class=""><a class=" extra" href="tel:9445777833">Contact Number: 9445777833 </a></span>
						<!-- /.contact-info-one__title -->
					</div><!-- /.contact-info-one__item -->
				</div><!-- /.col-md-12 -->
				<div class="col-md-12 col-lg-4">
					<div class="contact-info-one__item" style="--accent-color: #75C137;">
						<i class="icon-location-fill contact-info-one__icon"></i>
						<p class=" contact-info-one__title">Vengaivasal (NDF community campus )</p>
					
						<p  class=" contact-info-one__text pe-5 ps-5">A.S.M.I. Global Pre-School, Anjaneyar Koil Street,Vengaivasal-Santhoshpuram Main Road, Vengaivasal, Chennai 600 126.(<b>Land Mark</b>: NDF Community College Campus) 
					
						
						</p>
						<span class=""><a class=" extra" href="tel:9445156670">Contact Number: 9445156670 </a></span>
						<!-- /.contact-info-one__title -->
					</div><!-- /.contact-info-one__item -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.contact-info-one__inner -->
	</div><!-- /.container -->
</section><!-- /.contact-info-one -->

<section class="contact-map">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12 col-lg-4 ">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.785843884874!2d80.19984899999999!3d12.921481449999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525da9542ed801%3A0xd669db56dc875772!2sA.S.M.I%20Global%20-%20Play%20%7C%20Pre%20%7C%20School%20In%20Pallikaranai%2C%20Vengaivasal%2C%20Perumbakkam!5e0!3m2!1sen!2sin!4v1719492097113!5m2!1sen!2sin" width="100%"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="hei"></iframe>
</div>
	<div class="col-md-12 col-lg-4 ">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.1479506151636!2d80.1998849!3d12.8982065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d00745560f3%3A0x773695e4c4680f64!2sA.S.M.I%20Global%20-%20Play%20%7C%20Pre%20%7C%20School%20In%20Perumbakkam%2C%20Pallikaranai%2C%20Vengaivasal!5e0!3m2!1sen!2sin!4v1719491704472!5m2!1sen!2sin" width="100%"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="hei"></iframe>
</div>
	<div class="col-md-12 col-lg-4 ">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.110260702399!2d80.16918500000001!3d12.900631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525f966bf1320f%3A0x7b6c689fa123da8a!2sA.S.M.I%20Global%20-%20Play%20%7C%20Pre%20%7C%20School%20In%20Vengaivasal%2C%20Pallikaranai%2C%20Perumbakkam!5e0!3m2!1sen!2sin!4v1719491933676!5m2!1sen!2sin" width="100%"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="hei"></></iframe>
</div>
		</div>

<!-- /.google-map -->
	</div><!-- /.container-fluid -->
</section><!-- /.contact-map -->


@endsection