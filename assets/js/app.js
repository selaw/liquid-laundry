             // sidebar
	     $(document).ready(function () {
             
             $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').fadeOut();
             });

             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').addClass('active');
                 $('.overlay').fadeIn();
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
        
        // Add smooth scrolling to all links in navbar + footer link
		$(document).ready(function(){
		  $(".nav-link").on('click', function(event) {

			if (this.hash !== "") {

			  event.preventDefault();

			  var hash = this.hash;

			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 800, function(){
				window.location.hash = hash;
			  });
			} 
		  });

		})
        
        // google maps
        function initMap() {
            var uluru = {lat: 31.968599, lng: -99.901813};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 6,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
