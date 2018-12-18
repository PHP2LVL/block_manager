<div class="row" id='<?php echo $content['parentId'];?>' orderID='<?php echo $content['orderID'];?>' data-filename ='text_blocks' data-filename ='testimonial_block' onclick="addClassBox(this)">
    <div class="full-wrapper testimonial_4_wrapper lazyload-container">
        <div class="container">
            <div class="testimonials testimonials-style-4">
                <div class="testimonials-title">
                    <h2><?php echo $content[0]['value'];?></h2>
                </div>
                <div class="testimonials-container">
                    <div class="testimonials-slider slider-type-4 owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
					<div class="owl-stage" style="transform: translate3d(-1880px, 0px, 0px); transition: all 0.25s ease 0s; width: 2820px;">
						<div class="owl-item" style="width: 940px; margin-right: 0px;">
							<div class="item">
								<div class="testimonials-image">
									<img src="<?php echo $content[1]['value'];?>" title ="<?php echo $content[2]['value'];?>" alt="<?php echo $content[3]['value'];?>" class="">
								</div>
								<div class="testimonials-info">
									<p class="description-client"><span class="<?php echo $content[4]['style'];?>"><?php echo $content[4]['value'];?></span></p>
									<h3 class="name-client"><span class="<?php echo $content[5]['style'];?>"><?php echo $content[5]['value'];?></span></h3>
								</div>
							</div>
						</div>
						<div class="owl-item" style="width: 940px; margin-right: 0px;">
							<div class="item">
								<div class="testimonials-image">
									<img src="<?php echo $content[6]['value'];?>" title ="<?php echo $content[7]['value'];?>" alt="<?php echo $content[8]['value'];?>" class="">
								</div>
								<div class="testimonials-info">
									<p class="description-client"><span class="<?php echo $content[9]['style'];?>"><?php echo $content[9]['value'];?></span></p>
									<h3 class="name-client"><span class="<?php echo $content[10]['style'];?>"><?php echo $content[10]['value'];?></span></h3>
								</div>
							</div>
						</div>
						<div class="owl-item active" style="width: 940px; margin-right: 0px;">
							<div class="item">
								<div class="testimonials-image">
									<img src="<?php echo $content[11]['value'];?>" title ="<?php echo $content[12]['value'];?>" alt="<?php echo $content[13]['value'];?>" class="">
								</div>
								<div class="testimonials-info">
									<p class="description-client"><span class="<?php echo $content[14]['style'];?>"><?php echo $content[14]['value'];?></span></p>
									<h3 class="name-client"><span class="<?php echo $content[15]['style'];?>"><?php echo $content[15]['value'];?></span></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-controls">
					<div class="owl-nav">
						<div class="owl-prev" style="">prev</div>
						<div class="owl-next" style="">next</div>
					</div>
					<div class="owl-dots" style="display: none;"></div>
				</div>
			</div>
			<script type="text/javascript">
				require([
					'jquery',
					'owlcarousel'
				], function ($) {
						var testimonial_4 = $(".slider-type-4");
						testimonial_4.owlCarousel({
							nav: true,
							dots:false,
							responsive: {
								0: {items:1},
								480: {items:1},
								768: {items:1},
								991: {items:1},						
								1200: {items:1}
							}
						});	  
					});
			</script>
		</div>
	</div>
</div>