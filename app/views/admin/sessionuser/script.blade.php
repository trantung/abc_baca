<script>

	function toggle(source) {
		checkboxes = document.getElementsByName('id[]');
		for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}

	function deleteSelected()
	{
		var check = $('input:checkbox:checked.id').val();
		if(check) {
			callDeleteSelected();
		} else {
			alert('Bạn chưa chọn mục nào!');
		}
	}
	function deleteSelectedAll()
	{
		confirm = confirm('Bạn có chắc chắn muốn xóa toàn bộ?')
		if(confirm) {
			$.ajax({
				type: 'post',
				url: "{{ url('/admin/sessionuser/deleteAll') }}",
				success: function ()
	            {
	                console.log("it Work");
					window.location.reload();
	            }
			});
		}
		return false;
	}

	function callDeleteSelected()
	{
		var values1 = $('input:checkbox:checked.id').map(function () {
		  	return this.value;
		}).get();
	
		confirm = confirm('Bạn có chắc chắn muốn xóa?')
		if(confirm) {
			$.ajax(
			{
				type:'post',
				url: '{{ url("/admin/sessionuser/deleteSessionUser") }}',
				data:{
					'id': values1
				},
				success: function()
				{
					window.location.reload();
				}
			});
		}
		return false;
	}

</script>
