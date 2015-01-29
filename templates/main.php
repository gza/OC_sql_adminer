<iframe id="adminerFrame" name="adminer" width="100%" height="600px" src="<?php p($_['srcpath']); ?>?<?php p($_['queryString']); ?>"> </iframe>
<script type="text/javascript">
                function resizeFrame() {
                  var myWidth = 0, myHeight = 0, headerheight = 50;
                  if( typeof( window.innerWidth ) == 'number' ) {
                    //Non-IE
                    myHeight = window.innerHeight;
                  } else if( document.documentElement && document.documentElement.clientHeight) {
                    //IE 6+ in \'standards compliant mode\'
                    myHeight = document.documentElement.clientHeight;
                  } else if( document.body && document.body.clientHeight) {
                    //IE 4 compatible
                    myHeight = document.body.clientHeight;
                  }
                  myHeight = myHeight - headerheight; 
                  document.getElementById('adminerFrame').height= myHeight + 'px';
                }
                resizeFrame();
</script>
