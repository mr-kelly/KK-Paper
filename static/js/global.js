	$(function(){
		$('.delete_btn').click(function() {
			if (!confirm('确定要删除?')) {
				return false;
			}
		});
	});