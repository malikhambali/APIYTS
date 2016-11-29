@extends('app')

@section('head')

@endsection

@section('script')
	<script type="text/javascript">
	    var html = '';
	    @if(Route::current()->getParameter('page_number'))
	    	var url = "https://yts.ag/api/v2/list_movies.json?page={{ Route::current()->getParameter('page_number') }}&limit=12";
	    @else
	    	var url = "https://yts.ag/api/v2/list_movies.json?limit=12";
	    @endif

	    $.getJSON(url, function(result){
	        $.each(result.data.movies, function(index, value){
	        	html = html + "<div class='col s12 m4'>"+
		          "<div class='card'>"+
		            "<div class='card-image'>"+
		              "<img src='"+value.large_cover_image+"'>"+
		              "<span class='card-title'>"+value.title+"</span>"+
		            "</div>"+
		            "<div class='card-content'>"+
		              "<a href='"+value.torrents[0].url+"' target='_blank'>"+value.torrents[0].quality+" ("+value.torrents[0].size+")</a>"+
		            "</div>"+
		            "<div class='card-action'>"+
		              "<a href='"+value.url+"' target='_blank'>Read More</a>"+
		            "</div>"+
		          "</div>"+
		        "</div>";
	            console.log(value.title);
	        });
	        $("#listMovie").html(html);
	    });

		// $.ajax({
		//     url: 'https://sportsop-soccer-sports-open-data-v1.p.mashape.com/v1/leagues',
		//     type: 'GET',
		//     data: {},
		//     dataType: 'json',
		//     success: function(data) {
		// 		console.log(data);
		// 		$.each(data.data.leagues, function(index, value){
		// 			console.log(value);
		// 			html = html + "<option value='"+value.league_slug+"'>"+value.name+" - "+value.nation+"</option>";
		// 		});
		// 		$("#selectLeague").html(html);
		// 	    $('select').material_select();
		// 		console.log(html);
	 //        },
		//     error: function(err) { alert(err); },
		//     beforeSend: function(xhr) {
		//     	xhr.setRequestHeader("X-Mashape-Authorization", "sG1VF0TSQ3mshRbi20GvcLLjLdAsp1LkRENjsnOQEk38aPBRvJ"); // Enter here your Mashape key
		//     }
		// });
	</script>
@endsection

@section('content')
	<div class="section no-pad-bot" id="index-banner">
    	<div class="container">
	      	<br><br>
	      	<h1 class="header center grey-text indigo-3">Movie List</h1>
	      	<div class="row" id="listMovie">

			</div>

			<ul class="pagination">
				@if(Route::current()->getParameter('page_number') && Route::current()->getParameter('page_number') != '1')
					<li class="waves-effect"><a href="{{ url('/page/prev') }}"><i class="material-icons">chevron_left</i></a></li>
				@else
					<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
				@endif
				<li {{ Request::is('/') || Route::current()->getParameter('page_number') == 1 ? 'class=active' : '' }}><a href="{{ url('/page/1') }}">1</a></li>
				<li {{ Route::current()->getParameter('page_number') == 2 ? 'class=active' : '' }}><a href="{{ url('/page/2') }}">2</a></li>
				<li {{ Route::current()->getParameter('page_number') == 3 ? 'class=active' : '' }}><a href="{{ url('/page/3') }}">3</a></li>
				<li {{ Route::current()->getParameter('page_number') == 4 ? 'class=active' : '' }}><a href="{{ url('/page/4') }}">4</a></li>
				<li {{ Route::current()->getParameter('page_number') == 5 ? 'class=active' : '' }}><a href="{{ url('/page/5') }}">5</a></li>
				@if(Route::current()->getParameter('page_number') != '5')
					<li class="waves-effect"><a href="{{ url('/page/next') }}"><i class="material-icons">chevron_right</i></a></li>
				@else
					<li class="disabled"><a href="{{ url('/page/next') }}"><i class="material-icons">chevron_right</i></a></li>
				@endif
			</ul>

    	</div>
  	</div>
@endsection
