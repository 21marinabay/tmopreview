
			
function reset()
{
	$('#loading').fadeIn('slow');
	
	$.ajax({
	  url: 'reset.php',
	  cache: false,
	  async: false,
	  success: function(html){
 
  	}
	});


		$.getJSON('fullview.php?reset=1',{}
		,function(data)
		{
			
			$('#loading').fadeOut('slow');
			
		
			$.each(data, function(index, itemData) {
				var layer = 'lay' + data[index].layer;
			
				if(data[index].path == 'img/Shirt/')
				{	
			
					$('#'+layer).attr('src','img/transparent.png');
				
				} else {
					$('#'+layer).attr('src',data[index].path);
					
				}
				
			});
		});			
	
	updateRender_preview('0001');
}


function set_value(key,value)
{
	$('#loading').fadeIn('slow');
	
	$.ajax({
	  url: 'system/modules/session.php?key='+key+'&value='+value,
	  cache: false,
	  async: false,
	  success: function(html){
 
  	}
	});

		
}



$("#details").click(function(){

	$('.modalOverlay').remove();
	$("body").append('<div class="modalOverlay">');
	$("#detailsZoom").dialog({
		close: function(event, ui) { $('.modalOverlay').remove(); },
		height:470,
		width:470,
		title:'DETAILS SUMMARY',
		closeText:' ',
		
	});

});

function show_price()
{
	
	$.ajax({
	  url: 'display_price.php',
	  cache: false,
	  async: false,
	  success: function(html){
 		$('#total').html(html);
	
  	}
	});

	
}


