	<footer class="footer">

        <div class="container">

        	<article class="row">
	        	<p class="credits">Dataplease made proudly by students of HETIC</p>
	        	<ul class="nav navbar-nav navbar-right">
	              <li><a href="#">Accueil</a></li>
	              <li><a href="#">Accueil</a></li>
	              <li><a href="#">Accueil</a></li>
	            </ul>
            </article>
        
        </div>
     
     </footer>

</main>    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/waypoints.min.js" > </script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var $head = $( '' );
    $( '.ha-waypoint' ).each( function(i) {
    var $el = $( this ),
        animClassDown = $el.data( 'animateDown' ),
        animClassUp = $el.data( 'animateUp' );
 
    $el.waypoint( function( direction ) {
        if( direction === 'down' && animClassDown ) {
            $head.attr('class', 'ha-header ' + animClassDown);
        }
        else if( direction === 'up' && animClassUp ){
            $head.attr('class', 'ha-header ' + animClassUp);
        }
    }, { offset: '100%' } );
    } );
    </script>
  </body>
</html>