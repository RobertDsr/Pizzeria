const siteNavigation = document.getElementById( 'site-navigation' );
const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];
	
	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
		console.log('ok');
	} );