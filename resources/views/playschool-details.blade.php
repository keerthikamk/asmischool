@extends('layouts.master')
			@section('title','play-school-details')
			@section('content')
<section class="page-header">
	<div class="page-header__bg"  style="background-image:url(/assets/images/backgrounds/g1.jpg);"></div>
	<!-- /.page-header__bg -->
	<div class="container">
		<h2 class="page-header__title">Play School</h2>
		<ul class="kidearn-breadcrumb list-unstyled">
			<li><a href="/">Home</a></li>
			<li><a href="program">Programs</a></li>
			<li><span>Programs details</span></li>
		</ul><!-- /.thm-breadcrumb list-unstyled -->
	</div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-one blog-one--page">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="blog-details">
	<div class="blog-card blog-card-two @@extraClassName">
		<div class="blog-card__image">
			<img src="assets/images/program/pro1.2.jpg" alt="">
		</div><!-- /.blog-card__image -->
		<div class="blog-card__content">
			<div class="blog-card__content__top">
				<a href="program" class="blog-card__category">Play School</a>
				
			</div><!-- /.blog-card__content__top -->
			<h3 class="blog-card__title">The complete web developer guideline 2023</h3><!-- /.blog-card__title -->
			<p class="blog-card-two__text ">At A.S.M.I Global Pre School most children love the play school more than playgrounds. Children at this age are a little anxious about leaving the parents and vice versa. With our experienced teachers, who treat the children with love and care, children soon adapt and have a good time learning and playing.</p>
			<p class="blog-card-two__text"> We ensure that children:<br>
			<ul class="list-unstyled  ">
                            <li>•	Overcome separation anxiety</li>
							<li> 
							•	Learn basics through play-way							  <ul>
								<li>   Recognition of objects, shapes and colors</li>
								<li>	Developing imagination and creativity</li>
								<li>	Learning through fun activities – singing, dancing, outdoor and indoor games</li>
								<li>	Sensorial learning</li>
								<li>	Developing abilities in cooperative play, self-expression</li>
							  </ul>
							</li>
							<li>•	Participate in theme-based events every month</li>
							<li>•	Learn and have fun through interesting field trips</li>
							
            </ul>
</p>
			<!-- /.blog-card-two__text -->
			<div class="text-center mt-3">
                    <a href="contact" class="kidearn-btn ">
                                <span>Enquiry</span>
                            </a>
                    </div>
		</div><!-- /.blog-card__content -->
	
	</div><!-- /.blog-card -->
	



			</div><!-- /.col-lg-8 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->






@endsection