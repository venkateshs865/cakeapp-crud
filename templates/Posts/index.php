<div class="row">
	<div class="col-md-3">
		<h3>User Details</h3>
	</div>
	<div class="col-md-3 text-right">
		<?php echo $this->Html->link('Add Data', ['action'=>'add'], ['class'=>'btn btn-primary']); ?>
		<?php echo $this->Html->link('logout', ['action'=>'logout'], ['class'=>'btn btn-info'])?>
	</div>
</div>
<table class="table table-borderd table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th width="160">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($posts as $post):
		
		?>
		<tr>
			<td><?php echo $post->id ?></td>
			<td><?php echo $post->fname ?></td>
			<td><?php echo $post->mail ?></td>
			<td><?php echo $post->phn ?></td>
			<td>
				<?php echo $this->Html->link('Edit', ['action'=>'edit', $post->id], ['class'=>'btn btn-warning']); ?>
				<?php echo $this->Html->link('Delete', ['action'=>'delete', $post->id], ['class'=>'btn btn-danger', 'confirm'=>'Are you sure?']); ?>
			</td>
		</tr>
		<?php
		endforeach;
		?>
	</tbody>
</table>
<?php
	$paginator = $this->Paginator->setTemplates([
		'number'=>'<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</li>',
		'current'=>'<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</li>',
		'first'=>'<li class="page-item"><a href="{{url}}" class="page-link">&laquo</li>',
		'last'=>'<li class="page-item"><a href="{{url}}" class="page-link">&raquo</li>',
		'prevActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&lt</li>',
		'nextActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&gt</li>'
	]);
?>
<nav>
	<ul class="pagination">
		<?php
			echo $paginator->first();
			if($paginator->hasPrev()){
				echo $paginator->prev();
			}
			echo $paginator->numbers();
			if($paginator->hasNext()){
				echo $paginator->next();
			}
			echo $paginator->last();
		?>
	</ul>
</nav>