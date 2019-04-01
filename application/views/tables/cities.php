<input hidden id="title_modal" value="<?=$title_modal?>">

<div class="container-fluid bg-light py-3">
	<div class="container">	
		<div class="row">	
			<div class="col-4 text-left">	
				<? if (isset($view) and ($view == 'dynamic')) : ?>
						<input id="datepicker_m" class=" col form_control" autocomplete="off"></input>
						<? endif ?>
						<? if (isset($view) and ($view == 'dynamic_days')) : ?>
						<input id="datepicker" class="col py-3 button--white" autocomplete="off"></input>
						<? endif; ?>
					</div>
			<div class="col-4 text-center">	
				<a href="#" class="btn btn-primary" data-toggle="modal">Без фільтра</a>
			</div>
			<div class="col-4 text-right">
				<a href="#edit_row" class="add_btn btn btn-success" data-toggle="modal"><i class="fas fa-plus"></i> Додати</a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<table class="table table-striped table-hover mt-1">
		<thead class="thead-dark">
			<tr>
				<? foreach ($table_fields as $id => $fld) : ?>
				<th><?=$fld['name']?></th>
				<? endforeach; ?>
				<th>Дії</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($records as $rec) : ?>
			<tr>
				<? foreach ($table_fields as $id => $fld) : ?>
				<td class="<?=$fld['class']?>"><?=$rec->$id?></td>
				<? endforeach; ?>
				<? foreach ($hidden_fields as $id => $fld) : ?>
				<td class="d-none"><?=$rec->$id?></td>
				<? endforeach; ?>
				<td>
					<a href="#edit_modal" class="mr-2" data-toggle="modal"><i class="fas fa-pen-alt" title="Редагувати"></i></a>
					<a href="#delete_modal" class="text-danger" data-toggle="modal"><i class="far fa-trash-alt" title="Видалити"></i></a>
					<a href="#delete_modal" class="float-right text-success" data-toggle="modal"><i class="fas fa-history" title="Історія змін"></i></a>
				</td>
			</tr>
			<? endforeach; ?>
			</tbody>
			</table>
		</div>
	</div>
	
