/*auth component*/
$(document).ready(function(){
	ejevika.eventBind();	
/*top auth menu ajax authinticat*/	
	$('#auth-run').click(function(){
		 $.fancybox({
		        width: 400,
		        height: 400,
		        autoSize: false,
		        href: '/auth/login-ajax',
		        type: 'ajax',
		        afterShow:function(){
		        	$('#auth-login').unbind('click');
		        	$('#auth-login').click(function(){
		        		var email = $('#email').val();
		        		var pass = $('#pass').val();
		        		var request = $.ajax({
		        			url:'/auth/login',
		        			method:"POST",
		        			data:{
		        				'email':email,
		        				'password':pass,
		        			},
		        			 beforeSend: function(request) {
		        			        return request.setRequestHeader('X-CSRF-Token',  $( "input[name*='_token']" ).val());
		        			 }
		        		});
		        		
		        		request.done(function( msg ) {
		        				$('#errors').text(msg.toString());
		        				
		        			});
		        			 
		        		request.fail(function( jqXHR, textStatus ) {
		        				
		        				$('#errors').text(jqXHR.responseText);
		        				
		        			});
		        		
		        	});
		        }
		    });
	});
/*****************************************/
	
});

var ejevika = (function(){
	
	return {
		'eventBind':function(){
			$('body').click(function(e){
				var elem = $(e.target);
				
				/***buy btn button click***/
				if(elem.hasClass('buy-btn')){
					var id = elem.data('id');
					var count = elem.parents('.product').find('product-count').val();
					$.ajax({
						method:'post',
						url:'/cart/add',
						data:{
							'id':id,
							'count':count,
						},
	        			 beforeSend: function(request) {
	        			        return request.setRequestHeader('X-CSRF-Token',  $('meta[name="token"]').attr('content'));
	        			 }
					});
				}
					
			})
		}
	}
})();
/*end auth componten*/