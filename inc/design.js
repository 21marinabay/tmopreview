	$(document).ready(function(){
		updateRender();	
		
		$(".toolbox .section img").click(function(){
			var imageName = $(this).attr('title');
			$(".toolbox .section img").css('border','none');
			$(this).css('border','3px solid #ababab');
			$(this).css('-moz-border-radius','15px');
			$(this).css('border-radius','15px');
			$(this).css('padding','5px');
			
		});		
		
		$(".slideshow .slide .imageBox img").click(function(){
				var imageName = $(this).attr('title');
				$(".slideshow .slide .imageBox img").css('border','none');
				$(this).css('border','3px solid #ababab');
				$(this).css('-moz-border-radius','15px');
				$(this).css('border-radius','15px');
				$(this).css('padding','5px');
				updateZoom(imageName);
				updateFabric(imageName);
				
		});	
		
		$("#zoom").click(function(){
			var src = $(this).html();
			$("#zoomImage").html(src);
			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			$("#fabricZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:470,
				width:470,
				title:'FABRIC INFORMATION',
				closeText:'CLOSE X',
				
			});
			src2 = $(".zoomLay1").attr('src');
		$.ajax
		({
			url:'index.php?r=design/default/getImageName',
			data:{'src':src2},
			success:function(data)
			{
				$("#faTitle").html(data);
			},
		});			
			
		});
		
		$("#reset").click(function(){
			reset();
		});
		$(".img1").click();
	});
	
	function renderFilename()
	{
		
	}
	
	function updateRender(json)
	{
		if(json != null)
		{
			$.each(json, function(index, itemData) {
				var layer = 'img.lay' + data[index].layer;
				$(layer).attr('src',data[index].path);
			});		
		}
		else
		{
			$.getJSON('index.php?r=design/default/currentRender',{}
			,function(data)
			{
				
				$.each(data, function(index, itemData) {
					var layer = 'img.lay' + data[index].layer;
					/*alert(layer + ' ' + data[index].path);*/
					$(layer).attr('src',data[index].path);
					
				});
				$(".fabricNumber").val(data[16].fabric);
			});			
		}

	}
	
	function updateLayer(src)
	{
		$.ajax
		({
			url:'index.php?r=design/default/updateLayer',
			data:{'src':src},
			success:function(data)
			{
				updateRender();
			},
		});
	}

	function updateFabric(src)
	{
		$.ajax
		({
			url:'index.php?r=design/default/updateFabric',
			data:{'src':src},
			success:function(data)
			{
				updateRender();
			},
		});
	}
	
	function updateZoom(imageSrc)
	{
		var fabric = $(".fabricNumber").val();
		var image_src = imageSrc;
		$.getJSON
		('index.php?r=design/default/updateZoom',{src:image_src,fab: fabric + ""}
			,function(data)
			{
				$.each
				(data,function(index,itemData)
					{
						var layer = 'img.zoomLay' + data[index].layer;
						$(layer).attr('src',data[index].path);
					}
				);
			}
		);	
	}
	
	function reset()
	{
		$.ajax
		({
			url:'index.php?r=design/default/reset',
			data:{},
			success:function(data)
			{
				updateRender();
			},
		});
	}