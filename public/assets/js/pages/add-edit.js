$(document).ready(function(){
	events.pageLoad();
	events.events();

});
events = {

	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		$('#fileupload').fileupload({
			// Uncomment the following to send cross-domain cookies:
			//xhrFields: {withCredentials: true},
			url: '/admins/pages/pages-image/upload',
			dataType:'json',
			autoUpload: true,

			done: function(e, data){
				r = data.result;
				if(r.success === true) {
					var path = r.path;
					var name = r.name;
					var new_input = create_input(name);
					$("#imageDiv").append(new_input);
					// Remove disabled button and add in cancel button
					$(document).find('#displayImagesTable tbody tr .cancel').addClass('hide');
					$(document).find('#displayImagesTable tbody tr .cancel').addClass('hide');
					$(document).find('#displayImagesTable tbody tr .remove').removeClass('hide');
				}
			}
		});

		$(document).on('click', '.fileinput-button', function() {
			$('.template-upload').remove();
			$('#imageDiv').html('');
        });
		$(document).on('click', '.remove', function() {
			$('.template-upload').remove();
			$('#imageDiv').html('');
        });
	},
	events: function() {
        $(document).on('click','.events',function(){
        	if (!$.isEvents('text')) {

            }
        	//CHECKBOX
            var $this = $(this);
		     
		    // $this will contain a reference to the checkbox   
		    if ($this.is(':checked')) {
		       
		    } else {
		        // the checkbox was unchecked
		    }
        });
        $(document).on('click','._ignore_',function(){
		});
	}
}
request = {
	events: function(id) {
		var token = $('meta[name=csrf-token]').attr('content');
		$.post(
			'/',
			{
				"_token": token
			},
			function(result){
				var status = result.status;

				switch(status) {
					case 200: 
						
					break;				
					case 400: 
						
					break;
					default:
					break;
				}

				}
				);
	}
};
function eventsf(url)
{

}
// Create input
function create_input(path) {
	var count = $(document).find('.images').length;
	return '<input class="images" name="files['+count+'][path]" type="hidden" value="'+path+'"/>';
}