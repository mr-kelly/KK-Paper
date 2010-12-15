	$(function(){
	
	
		$('.delete_btn').click(function() {
			if (!confirm('确定要删除?')) {
				return false;
			}
		});
		
		
		// Tipsy生成
		$('.tooltip').tipsy( {  gravity: $.fn.tipsy.autoNS , fade: true, live:true});
		
		// Tipsy Form表单提示～
		$('.tooltip_form [title]').tipsy( { trigger: 'focus', gravity: $.fn.tipsy.autoWE , fade: true } );
		
	});
	