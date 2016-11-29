@extends('app')

@section('head')

@endsection

@section('script')
	<script type="text/javascript">
	    var html = '<option value="" disabled selected>Choose your option</option>';

		$.ajax({
		    url: "https://sportsop-soccer-sports-open-data-v1.p.mashape.com/v1/leagues/{{ Route::current()->getParameter('league') }}",
		    type: 'GET',
		    data: {},
		    dataType: 'json',
		    success: function(data) {
				console.log(data);
				$("#leagueName").html(data.data.leagues[0].name + " - " + data.data.leagues[0].nation);
				// $.each(data.data.leagues, function(index, value){
				// 	console.log(value);
				// 	html = html + "<option value='"+value.league_slug+"'>"+value.name+" - "+value.nation+"</option>";
				// });
				// $("#selectLeague").html(html);
			 //    $('select').material_select();
				// console.log(html);
	        },
		    error: function(err) { alert(err); },
		    beforeSend: function(xhr) {
		    	xhr.setRequestHeader("X-Mashape-Authorization", "sG1VF0TSQ3mshRbi20GvcLLjLdAsp1LkRENjsnOQEk38aPBRvJ"); // Enter here your Mashape key
		    }
		});
	</script>
@endsection

@section('content')
	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      	<br><br>
      	<h2 class="header center orange-text" id="leagueName"></h2>
      	<div class="row">
          <div class="col m12">
          	
          </div>
        </div>
    </div>
  </div>
@endsection