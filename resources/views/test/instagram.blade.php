@extends('app') 

<script> 
	
	function devicecheck()
	{
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   		
		}else 
		{
    		alert("This service is only available on mobile devices."); 
		}
	}


</script> 

@section('content')
	<a href="instagram://camera"><img src="http://www.westerngazette.ca/wp-content/uploads/2015/03/222129-1r8o5m1400449246.png" width="100px" height="100px" id="instagramImage" onclick="devicecheck()"></a>
@stop