<?php

// ok kao testni controller za servis-e

// ...

  $action = $_SERVER['HTTRequestmethod'];
  $action = lower($action).'_Action';
  
  switch($action){
  
    case  'post_Action':
        // ... processiraj 
	break;
    case 'put_Action':
    	// ... procesiraj
	break;
    case 'get_Action':
    	// ... procesiraj
	break;
    case 'delete_Action':
    	// procesiraj
	error();
	break;
  
  }

  // ok to je kao ena primitivna koda ....

