<style>
	.button-wrap  a{
		margin: 1px 0px;
	}
</style>
<div class="button-wrap clearfix">
	<a href="{{route('news.list.view',$model->id)}}" class="btn  btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
	    view
	</a>

	<a href="{{route('news.list.edit',$model->id)}}" class="btn btn-success btn-xs"><i
	        class="fa fa-edit"></i>&nbsp;
	    Edit
	</a>

	<a href="{{route('news.list.delete',$model->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;
	    Delete
	</a>
</div>