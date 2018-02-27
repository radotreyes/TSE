/* NAMESPACE VARIABLE AND METHODS */
const Page = {
	sees: function( u, l = false ) {
		const inUpperBound = u > window.pageYOffset && u <= ( window.pageYOffset + $( window ).height() )
		const inLowerBound = l ? l > window.pageYOffset && l <= ( window.pageYOffset + $( window ).height() ) : false
		return( inUpperBound || inLowerBound ) ? true : false
	},

	through: function( e ) {
		return( e <= window.pageYOffset ) ? true : false
	},

	Component: {
		fadeInSoft: function( e, breakpoint ) {
			try {
				if( breakpoint ) {
					$( e ).delay( 100 ).css( 'visibility', 'visible' ).hide().fadeIn()
				}
			}
			catch( err ) {}
		},

		fadeOutSoft: function( e, breakpoint ) {
			try {
				if( breakpoint ) {
					$( e ).css( 'visibility', 'hidden' )
				}
			}
			catch( err ) {}
		}
	}
}

window.onload = function() {
	/**
	 * Simple sticky navbar script.
	 * @file   ../src/assets/js/stickyNav.js
	 */

	/* FADE IN/OUT ON SCROLL */
	// define nav target elements and breakpoints

	const nav = $( '#sticky-nav' ) // target element

	/* execute window-based scrolling if breakpoints are defined */
	try {
		const heroBtn = $( '#indexHeroBtn' )
		const bkpBody = $( '#body-breakpoint' ).offset().top
		const bkpFooter = $( '#footer-breakpoint' ).offset().top

		// certain elements appear on page breakpoints
		$( window ).on( 'scroll', function() {
			/* NAVBAR BREAKPOINTS */
			let navState = nav.css( 'display' ) // current display state

			// hide the hero button if we have scrolled down at all
			window.pageYOffset ? heroBtn.fadeOut() : heroBtn.fadeIn()

			// trigger show navbar on pass body breakpoint
			if( Page.through( bkpBody ) && !Page.through( bkpFooter ) ) {
				if( navState === 'none' ) {
					nav.fadeIn()
				} // make sure nav is hidden 1st
			}
			// (implicitly declared) trigger hide navbar on pass footer breakpoint
			else {
				if( navState !== 'none' ) {
					nav.fadeOut()
				} // make sure nav is shown 1st
			}

		} )

		/* test carousel fancy code */
		const s = $( `#widescreen` )
		const highlight = function( color ) {
			s.css( 'background-color', color )
		}
		const revert = function() {
			s.css( 'background-color', 'black' )
		}

		$( `#tab-1` ).hover(
			() => {
				highlight( '#ff4040' )
			},
			function() {
				revert()
			}
		)
		$( `#tab-2` ).hover(
			function() {
				highlight( '#fccf48' )
			},
			function() {
				revert()
			}
		)
		$( `#tab-3` ).hover(
			function() {
				highlight( '#3d96fe' )
			},
			function() {
				revert()
			}
		)
	}
	catch( e ) {
		// else just display the scrollbar by default, then show on scroll up
		let lastOffset = 0
		let navState = nav.css( 'display' )

		$( window ).on( 'scroll', function() {
			if( window.pageYOffset < lastOffset ) {
				nav.fadeOut()
			}
			else {
				nav.fadeIn()
			}
			lastOffset = window.pageYOffset
		} )
	}
}
