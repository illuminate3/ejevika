/*auth component*/
$(document).ready(function(){
	ejevika.eventBind();	
/*top auth menu ajax authinticat*/	

/*****************************************/
	
});

var ejevika = (function(){
	var add = '/cart/add';
	var remove = '/cart/remove';
	var send = function(url,data){
		$.ajax({
			method:'post',
			'url':url,
			'data':data,
			 beforeSend: function(request) {
			        return request.setRequestHeader('X-CSRF-Token',  $('meta[name="token"]').attr('content'));
			 }
		});
	};
	
	return {
		'eventBind':function(){
			$('body').click(function(e){
				var elem = $(e.target);	
				var id = elem.data('id');
				var count = elem.parents('ul').find('#product-count').val();
/*******************buy btn button click**********************/
				if(elem.hasClass('buy-btn')){
					send(add,{'id':id,'count':count});
				}
/*******************remove btn button click**********************/
				if(elem.hasClass('order-del')){
					$.ajax({
						method:'post',
						'url':remove,
						'data':{'id':id},
						 beforeSend: function(request) {
						        return request.setRequestHeader('X-CSRF-Token',  $('meta[name="token"]').attr('content'));
						 } 			 
					}).done(function(){
						 elem.parents('.box-row').remove();
					 });
				}

			})
/*******************auth click**********************/			
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
/********************************************************/
		}
	}
})();
/*end auth componten*/