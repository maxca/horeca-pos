<?php
#header( "location: quickprinter://test" );
header( 'refresh: 2; url=intent://#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;');

//echo "<script>
// window.location.href = 'intent://#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;';
//";
//
//echo "</script>";
#header( "location: intent://#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;" );
exit(0);