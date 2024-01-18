
<div class="dropdown">
	<a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
	<div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
		<ul class="link-list-plain">
			<li><a href="{{ url('users/'.$id.'/edit')}}" class="text-primary"><em class="icon ni ni-edit-fill"></em> تعديل</a></li>
			<li><a href="#" data-toggle="modal" data-target="#delete_record{{$id}}" class="text-danger"><em class="icon ni ni-trash-fill text-danger"></em> حذف</a></li>
		</ul>
	</div>
</div>
<div class="modal fade" id="delete_record{{$id}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">حذف</h4>
				<button class="close" data-dismiss="modal">x</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-exclamation-triangle"></i> هل تريد باالفعل حذف هذا العنصر؟
			</div>
			<div class="modal-footer">
                <form action="{{route('users.destroy', $id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-flat">تأكيد</button>
                    <a class="btn btn-default btn-flat" data-dismiss="modal">إلغاء</a>
                </form>
			</div>
		</div>
	</div>
</div>
