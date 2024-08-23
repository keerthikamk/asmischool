
@extends('layouts.master')
			@section('title','Gallery')
			@section('content')
			<section class="page-header" style="background-image: url(/assets/images/backgrounds/g22.jpg);">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Gallery</h2>
        <ul class="kidearn-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="gallery-one gallery-one--page">
	<div class="container">
		<!-- <div class="text-center">
			<ul class="list-unstyled post-filter gallery-one__filter__list">
				<li class="active" data-filter=".filter-item"><span>All</span></li>
				<li data-filter=".children"><span>Children</span></li>
				<li data-filter=".development"><span>Development</span></li>
		
			</ul>
		</div> -->
		<div class="row masonry-layout filter-layout">
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g55.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g55.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g11.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g11.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g22.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g22.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g33.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g33.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g44.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g44.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g66.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g66.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g77.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g77.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g88.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g88.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g99.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g99.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->
			<div class="col-md-6 col-lg-4 filter-item children">
				<div class="gallery-one__card">
					<img src="assets/images/gallery/g1010.jpg" alt="">
					<div class="gallery-one__card__hover">
						<a href="assets/images/gallery/g1010.jpg" class="img-popup">
							<span class="gallery-one__card__icon"></span>
						</a>
					</div><!-- /.gallery-one__card__hover -->
				</div><!-- /.gallery-one__card -->
			</div><!-- /.col-md-6 col-lg-4 -->

		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section><!-- /.gallery-one -->
@endsection