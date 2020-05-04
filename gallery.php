 <?php include('header2.php'); ?>
	<!-- Banner Section -->
	<div id="page-banner" class="page-banner services-banner container-fluid no-padding">
		<div class="banner-content">
			<h3>Our Gallery</h3>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
			</ol>
		</div>
	</div><!-- Banner Section /- -->
	
	<!-- breadcrumb start -->
	<div class="breadcrumb-area">
	   <div class="container">
	      <div class="row">
	         <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
	            <nav class="breadcrumb">
	               <a class="home" href="index.php"><span>Home</span></a>
	               <i class="fa fa-angle-right" aria-hidden="true"></i>
	               <span>Gallery</span>
	            </nav>
	         </div>
	      </div>
	   </div>
	</div>
	<!-- breadcrumb end -->

<!-- gallery Section start -->
	<div class="gallery-section section-padding">
		<!-- Container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header-1">
				<h3>Our Gallery</h3>
				<p> See Our Gallary to our service and work.</p>
			</div>
			
			   <div align="center">
		            <button class="btn btn-default filter-button active" data-filter="all">All</button>
		            <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
		            <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
		            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
		            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
		        </div>
		        <div class="row">
		            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 filter hdpe">
		                <div class="gallery_box">
					         <a href="#"><img src="images/gallery/g1.jpg" alt=""></a>
					         <div class="image_title">
					            <i class="fa fa-truck"></i>
					            <h4><a href="#e/">GOODS TRANSPORT</a></h4>
					         </div>
					    </div>
		            </div>

		            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 filter sprinkle">
		                <div class="gallery_box">
					         <a href="#"><img src="images/gallery/g2.jpg" alt=""></a>
					         <div class="image_title">
					            <i class="fa fa-truck"></i>
					            <h4><a href="#e/">OFFICE RELOCATION</a></h4>
					         </div>
					      </div>
		            </div>

		            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 filter hdpe">
		                <div class="gallery_box">
					         <a href="#"><img src="images/gallery/g3.jpg" alt=""></a>
					         <div class="image_title">
					            <i class="fa fa-truck"></i>
					            <h4><a href="#e/">WAREHOUSE SERVICE</a></h4>
					         </div>
					      </div>
		            </div>

		            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 filter irrigation">
		                <div class="gallery_box">
					         <a href="#"><img src="images/gallery/g4.jpg" alt=""></a>
					         <div class="image_title">
					            <i class="fa fa-truck"></i>
					            <h4><a href="#e/">LOADING AND UNLOADING</a></h4>
					         </div>
					      </div>
		            </div>

		            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 filter spray">
		                <div class="gallery_box">
					         <a href="#"><img src="images/gallery/g5.jpg" alt=""></a>
					         <div class="image_title">
					            <i class="fa fa-truck"></i>
					            <h4><a href="#e/">CAR-BIKE RELOCATION</a></h4>
					         </div>
					      </div>
		            </div>

		            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 filter irrigation">
		                <div class="gallery_box">
					         <a href="#"><img src="images/gallery/g6.jpg" alt=""></a>
					         <div class="image_title">
					            <i class="fa fa-truck"></i>
					            <h4><a href="#e/">SEPERATE TRANSPORT SERVICE</a></h4>
					         </div>
					      </div>
		            </div>
					</div>
			
		</div>
	</div>
	<!-- gallery Section end -->

		
	
	<?php include('footer.php'); ?>
	<script>
		$(document).ready(function(){
		    $(".filter-button").click(function(){
		        var value = $(this).attr('data-filter');
		        
		        if(value == "all")
		        {
		            //$('.filter').removeClass('hidden');
		            $('.filter').show('1000');
		        }
		        else
		        {
		//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
		//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
		            $(".filter").not('.'+value).hide('3000');
		            $('.filter').filter('.'+value).show('3000');
		            
		        }
		    });

		});
	</script>