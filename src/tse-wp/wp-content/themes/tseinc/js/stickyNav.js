/* NAMESPACE VARIABLE AND METHODS */
const Page = {
  sees: function( u, l = false ) {
    const inUpperBound = u > window.pageYOffset && u <= ( window.pageYOffset + $( window ).height() )
    const inLowerBound = l ? l > window.pageYOffset && l <= ( window.pageYOffset + $( window ).height() ) : false
    return ( inUpperBound || inLowerBound ) ? true : false
  },

  through: function( e ) {
    return ( e <= window.pageYOffset ) ? true : false
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
   const bkpBody = $( '#body-breakpoint' ).offset().top
   const bkpFooter = $( '#footer-breakpoint' ).offset().top

   // define project section target elements and breakpoints
   // let numOfComponents;
   // for( component in document.getElementsByClassName( 'component-fade' ) ) {
   //   if( component === 'item' ) { break }
   //   document.getElementsByClassName( 'component-fade' )[component].id = `fade-${ component }`
   //   numOfComponents = component
   // }
   //
   // let transientSections = []
   // for( let i = 0; i <= numOfComponents; i++ ) {
   //   if( !( $( `#fade-${ i }` ) ) ) { break }
   //   transientSections.push( $( `#fade-${ i }` ) )
   // }

  // certain elements appear on page breakpoints
  $( window ).on( 'scroll', function() {
    /* NAVBAR BREAKPOINTS */
    let navState = nav.css( 'display' ) // current display state

    // trigger show navbar on pass body breakpoint
    if( Page.through( bkpBody ) && !Page.through( bkpFooter ) ) {
      if( navState === 'none' ) { nav.fadeIn() } // make sure nav is hidden 1st
    }
    // (implicitly declared) trigger hide navbar on pass footer breakpoint
    else {
      if( navState !== 'none' ) { nav.fadeOut() } // make sure nav is shown 1st
    }

    /* PROJECTS SECTION BREAKPOINTS */
    // transientSections.forEach( s => {
    //   if( s.css( 'visibility' ) === 'hidden' && Page.through( 0.9 *s.offset().top ) ) {
    //     Page.Component.fadeInSoft( s, s )
    //   }
    // } )
    // for( t in transientSections ) {
    //   let s = transientSections[t]
    //   let tState = s.component.css( 'visibility' )
    //
    //   if( tState === 'hidden' && Page.through( s.upperBound ) ) {
    //     Page.Component.fadeInSoft( s.component )
    //   }
    //
    //
    // }
    // let pState = p.css( 'visibility' )
    // if( Page.sees( bkpProjects, bkpProjects + p.height() ) ) {
    //   if( pState === 'hidden' ) { Page.Component.fadeInSoft( p, bkpProjects ) }
    // }
    // else { Page.Component.fadeOutSoft( p, bkpProjects ) }

    // DEBUG
    // console.log(`
    //   Window upper bound: ${ window.pageYOffset }
    //   Window lower bound: ${ window.pageYOffset + $( window ).height() }
    //   pState: ${ String( pState ) }
    //   pUBound: ${ bkpProjects }
    //   pLBound: ${ bkpProjects + p.height() }
    //   Target breakpoint: ${ bkpProjects }
    //   Sees target breakpoint: ${ Page.sees( bkpProjects ) }
    // `)
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
    function() { highlight( '#ff4040' ) },
    function() { revert() }
  )
  $( `#tab-2` ).hover(
    function() { highlight( '#fccf48' ) },
    function() { revert() }
  )
  $( `#tab-3` ).hover(
    function() { highlight( '#3d96fe' ) },
    function() { revert() }
  )
}
