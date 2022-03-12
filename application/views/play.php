<style>
.alert-info{
    color: #fdfdfd!important;
    background-color: #089BF8!important;
    border-color: #bee5eb!important;
    font-size: 14px!important;
}
.fade:not(.show){
    opacity: 9!important;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.error {
	color: red!important;
}
</style>
<section class="hero-area hero-speakers">
         <div class="banner-item overlay" style="background-image:url(../assets/images/hero_area/banner2.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="banner-content-wrap">

                        <!--<p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">5 to 7 June
                           2019, Waterfront Hotel, London</p>-->
                        <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                           Negotiation Arena
                           </h1>


                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
					 <?php if( $this->session->flashdata('arena_full')):?>
								<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert"><span>&times;</span></button>
										<strong><?php echo $this->session->flashdata('arena_full'); ?></strong> 
									</div>
								</div>
						    <?php endif; ?>
                        <h2>Play Now</h2>
                        
                        <form action="<?php echo base_url();?>Welcome/home" method="POST" class="hero-form">
                            <input class="form-control form-control-name" placeholder="Name" name="name" id="f-name"
                              type="text" required="">
							<input class="form-control form-control-email" placeholder="Email" name="email" id="f-email"
                              type="email" required="">
                            
						    <input class="form-control form-control-arena" placeholder="Arena Code" name="arena_code" 
                              type="text" required="">
						  <button class="btn" type="submit"> Login</button>

                        </form><!-- form end-->
                     </div><!-- hero content end-->
                  </div><!-- col end-->
               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div>
      </section>