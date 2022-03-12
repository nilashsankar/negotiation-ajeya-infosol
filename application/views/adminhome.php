<div id="page-banner-area" class="page-banner-area" style="background-image:url(../assets/images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Schedule List</h2>
               <ol class="breadcrumb">
                  
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->

      <section class="ts-schedule">
         <div class="container">

            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title">
                     Events for Today
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs">
                     <div role="tabpanel" class="tab-pane active" id="date3">
                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
						   <?php foreach($events as $event) : ?> 
                              <span> <?php echo $event->event_datetime; ?></span>
                              
                           </div>
                           <div class="schedule-slot-info">
     
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title"><?php echo $event->name;?>
                                 
                                 </h3>
                                 <p> Email: <?php echo $event->email;?> <br> Participant Count: <?php echo $event->participant_count; ?>  <br> Arena Code: <?php echo $event->arena_code; ?> <br> Location: <?php echo $event->location; ?></p>
									<?php  endforeach; ?> 
                              </div>
                              
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap2" src="<?php echo base_url();?>assets/images/shap/home_schedule_memphis1.png" alt="">
            <img class="shap1" src="<?php echo base_url();?>assets/images/shap/home_schedule_memphis2.png" alt="">
         </div>
      </section>
	  
	  <section class="ts-schedule">
         <div class="container">

            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title">
                    Upcoming Events
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs">
                     <div role="tabpanel" class="tab-pane active" id="date3">
                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
						   <?php foreach($upcomingevents as $event) : ?> 
                              <span> <?php echo $event->event_datetime; ?></span>
                              Workshop
                           </div>
                           <div class="schedule-slot-info">
     
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title"><?php echo $event->name;?>
                                 
                                 </h3>
                                 <p> Email: <?php echo $event->email;?> <br> Participant Count: <?php echo $event->participant_count; ?>  <br> Arena Code: <?php echo $event->arena_code; ?> <br> Location: <?php echo $event->location; ?></p>
									<?php  endforeach; ?> 
                              </div>
                              
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div><!-- container end-->
         
      </section>