<?php
#header( "location: quickprinter://test" );
header( "location: intent://#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;" );
exit(0);