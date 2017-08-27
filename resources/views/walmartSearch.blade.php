@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
    	<div class="col-xs-12 col-sm-4">
    		<img id="walmart_logo" src="{{ URL::asset('/images/Walmart_logo.png') }}"></img>
    	</div>
    	<div class="col-xs-12 col-sm-8">
    		<form id="search-form" onsubmit='APICall(); return false'>
			  <input type='search' placeholder='Enter Search Keyword' id="search-input" />
			  <input type='submit' value='Search' id="search-btn">
			</form>
    	</div>
	</div>
	<div class="row">
		
		<div id="show"></div>
	</div>
</div>
<script type="text/javascript">
	function APICall(){
                console.log("caled")
                var input = $("#search-input").val();
                //Making an ajax call to the API Site, say URL be: http://example.com/api/search.php?keyword=nepal
                var url = "http://api.walmartlabs.com/v1/search";
                var data = {
                    query: input,
                    format: 'json',
                    responseGroup: 'full',
                    numItems: '24',
                    order: 'asc',
                    sort: 'price',
                    apiKey: 'h35svtsrqv93bmkuu96f8bef'
                }
                var request = $.ajax({
                    url : url,
                    data : data,
                    method : 'get',
                    dataType : 'jsonp',
                    headers: {
                        "auth-key":"h35svtsrqv93bmkuu96f8bef"
                    },
                    success: function(response){             
				    	if(response.length === 0){
	                       $('#show').html("No results found."); 
	                       console.log("nothing");
	                    }else {
	                    	$("#show").html("");
	                    	$("#show").css("display", "none");
	                    	var productList= "";
	                    	$.each(response.items, function(index, value) {
	                    	
	                    		productList += '<div class="col-xs-12 col-sm-3"><div class="item"><div class="itemImage"><img class="img-responsive" src= "' 
	                    		+ value.largeImage + '"><h2 class="itemName">' + value.name + '</h2><h3 class="itemPrice">$' + value.salePrice + '</h3></div></div></div>';

							});
							$('#show').append(productList);
							$('#show').fadeIn(1100).delay(2000);
	                    	console.log("somthing");
	                    	console.log(response);
	                    }
				    },
				    error : function(response)
				    {
				        $('#show').html("Failed to get data."); 
                   		console.log("broken");
				    }
                });
            }
</script>
@endsection