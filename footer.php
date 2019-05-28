		<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script> 
	<script>
		$(document).ready(function(){
				$('.header-contacts__button').on("click", function(){
						$('.overlay').show();
				});
				$('.contacts-block__button').on("click", function(){
						$('.overlay').show();
				});
				$('.modal-close').on("click", function(){
					$('.overlay').hide();
				});
			 $('.production-slider__top').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  asNavFor: '.production-slider__bottom'
				});
				$('.production-slider__bottom').slick({
				  slidesToShow: 3,
				  slidesToScroll: 1,
				  asNavFor: '.production-slider__top',
				  focusOnSelect: true,
				  responsive: [
				      {
			        breakpoint: 768,
			        settings: {
			          slidesToShow: 1,
			          slidesToScroll: 1,
			          dots: true,
			          arrows: false
			        }
			       },
			       {
			        breakpoint: 1200,
			        settings: {
			          slidesToShow: 3,
			          slidesToScroll: 1,
			          dots: true,
			          arrows: false
			        }
				      }
				    ]
				});
				$('.reviews-slider').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: false,
					responsive: [
				      {
			        breakpoint: 768,
			        settings: {
			          slidesToShow: 1,
			          slidesToScroll: 1,
			          dots: true,
			          arrows: false
			        }
			       },
			       {
			        breakpoint: 1200,
			        settings: {
			          slidesToShow: 3,
			          slidesToScroll: 1,
			          dots: true,
			          arrows: false
			        }
				      }
				    ]
				})
		});
	</script>
	<script>
		new WOW().init();
	</script>

	</body>
</html>