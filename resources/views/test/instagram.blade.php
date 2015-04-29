@extends('app') 


<!-- Copy and paste this in the head section --> 
<script> 
	
	function devicecheck()
	{
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   		
		}else 
		{
    		alert("This service is only available on mobile devices. "); 
		}
	}


</script> 

<style> 

button{
	background-color: blue;
	width: 140px;
	height:50px;
}

#instagramText{
	color:white;
}

#buttonPanel{
	position:relative;
	top:50%;
	left:50%;
	
}

</style> 

@section('content')

<!-- Copy and paste this in the place of the button --> 
	<a href="instagram://camera">
		<img src="http://i62.tinypic.com/x6n951.png" id="instagramImage" onclick="devicecheck()">
	</a>

<a href="http://tinypic.com?ref=x6n951" target="_blank"><img src="http://i62.tinypic.com/x6n951.png" border="0" alt="Image and video hosting by TinyPic"></a>

@stop
	