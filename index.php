<!DOCTYPE html> 
<html> 

<head> 
	<title> 
		How to convert an HTML element 
		or document into image ? 
	</title> 
	
	<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> 
	</script> 
	
	<script src= 
"https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> 
	</script> 
</head> 

<body> 
	<center> 
	<h2 style="color:green"> 
		Sonu Yadav 
	</h2> 
	
	<h2 style="color:purple"> 
		Convert div to image 
	</h2> 
	
	<div id="html-content-holder" style="background-color: #F0F0F1; 
				color: #00cc65; width: 500px;padding-left: 25px; 
				padding-top: 10px;"> 
		
		<strong> 
			Sonu Yadav 
		</strong> 
		
		<hr/> 
		
		<h3 style="color: #3e4b51;"> 
			ABOUT US 
		</h3> 
	
		<p style="color: #3e4b51;"> 
			<b>Sonu Yadav</b> From Delhi India a Digital Artist and Full Stack Developer
		</p> 
		<p><img src="tree.jpg" style="width:164px;"></p>
		<p style="color: #3e4b51;"> 
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


		</p> 
	</div> 

	<input id="btn-Preview-Image" type="button"
				value="Preview" /> 
		
	<a id="btn-Convert-Html2Image" href="#"> 
		Download 
	</a> 

	<br/> 
	
	<h3>Preview :</h3> 
	
	<div id="previewImage"></div> 
	
	<script> 
		$(document).ready(function() { 
		
			// Global variable 
			var element = $("#html-content-holder"); 
		
			// Global variable 
			var getCanvas; 

			$("#btn-Preview-Image").on('click', function() { 
				html2canvas(element, { 
					useCORS: true,
					onrendered: function(canvas) { 
						$("#previewImage").append(canvas); 
						getCanvas = canvas; 
					} 
				}); 
			}); 

			$("#btn-Convert-Html2Image").on('click', function() { 
				var imgageData = 
					getCanvas.toDataURL("image/png"); 
			
				// Now browser starts downloading 
				// it instead of just showing it 
				var newData = imgageData.replace( 
				/^data:image\/png/, "data:application/octet-stream"); 
			
				$("#btn-Convert-Html2Image").attr( 
				"download", "GeeksForGeeks.png").attr( 
				"href", newData); 
			}); 
		}); 
	</script> 
	</center> 
</body> 

</html>		
