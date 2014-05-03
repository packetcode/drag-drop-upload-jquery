/** APP: Drag and Drop Image uploader with progress bar
    Website:packetcode.com
    Author: Krishna TEja G S
    Date: 3rd May 2014
***/

$(function(){

	var obj = $('.drop');

	obj.on('dragenter',function(e){
		e.stopPropagation();
		e.preventDefault();
		obj.css('border','2px solid #16a085');
	});

	obj.on('dragover',function(e){
		e.stopPropagation();
		e.preventDefault();
	});

	obj.on('drop',function(e){
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border','2px solid #16a085');

		var files = e.originalEvent.dataTransfer.files;
		var file = files[0];

		//console.log(file);
		xhr = new XMLHttpRequest();

		if(xhr.upload && check(file.type))
		{
		//open connection
		xhr.open('post','drop.php',true);

		// upload progress event listener
		xhr.upload.addEventListener('progress',function(e){
			if(e.lengthComputable){
				var percent = (e.loaded/e.total) *100;
				$('.progress').show();
				$('.progress-bar').css('width',percent+'%');
			}else{
				alert("Failed to compute the file upload length");
			}
		},false);

		//checking for status complete
		xhr.onreadystatechange = function(oEvent){
			if(xhr.readyState === 4){
				if(xhr.status===200){
					$('.progress').hide();
					$(".image").html("<img src='"+xhr.responseText+"' width='100%'/>");
				}else
				{
					alert('Error'+xhr.statusText);
				}
			}
		};

		//set headers
		xhr.setRequestHeader("Content-type","multipart/form-data");
		xhr.setRequestHeader("X-File-Name",file.fileName);
		xhr.setRequestHeader("X-File-Size",file.fileSize);
		xhr.setRequestHeader("X-File-Type",file.fileType);

		xhr.send(file);
		}else
			alert('please upload only images');

	});

	function check(type){
		switch(type){
			case 'image/jpeg':
			return 1;
			case 'image/png':
			return 1;
			case 'image/gif':
			return 1;
			default:
			return 0;
		}
	}
});`