@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
    	<div class="col-xs-12 col-sm-4">
    		<a href="https://www.walmart.com/" target="blank"><img id="walmart_logo" src="{{ URL::asset('/images/Walmart_logo.png') }}"></img></a>
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
	var results = 0;
	var totalResults = 0;
	function APICall(){
				results = 0;
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
	                    	totalResults = response.totalResults;
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
        window.onscroll = function(ev) {
        	var page = 0;
		    if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight-2) {
		    	console.log("fired");
		        page = page + 1;
		        results = results + 24;
		        console.log(results);
		        var input = $("#search-input").val();
                //Making an ajax call to the API Site, say URL be: http://example.com/api/search.php?keyword=nepal
                var url = "http://api.walmartlabs.com/v1/search";
                var data = {
                    query: input,
                    format: 'json',
                    responseGroup: 'full',
                    numItems: '24',
                    start: results,
                    order: 'asc',
                    sort: 'price',
                    apiKey: 'h35svtsrqv93bmkuu96f8bef'
                }
                console.log(totalResults);
                if(results < totalResults ){


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
					    		console.log("Nope");
		                       $('#show').append('<h2>No more items to load</h2>');
		   
		                    }else {
		                    	var productList= "";
		                    	$.each(response.items, function(index, value) {
		                    	
		                    		productList += '<div class="col-xs-12 col-sm-3"><div class="item"><div class="itemImage"><img class="img-responsive" src= "' 
		                    		+ value.largeImage + '"><h2 class="itemName">' + value.name + '</h2><h3 class="itemPrice">$' + value.salePrice + '</h3></div></div></div>';

								});
								$('#show').append($(productList).hide().fadeIn(2000));
					
		                    }
					    },
					    error : function(response)
					    {
					       $('#show').append('<h2>Could not get more items</h2>');
					    }
	                });
				}
		    }
		};
</script>
@endsection