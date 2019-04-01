

<div id="edit_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<?=form_open('', array('class'=>'needs-validation', 'novalidate'=>''), $hidden_fields)?>
				<div class="modal-header">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<? foreach ($form_fields as $func => $fld) : ?>
					<div class="form-group">
						<label><?=$fld['placeholder']?> <?=isset($fld['required']) ? '<span class="text-danger">*</span>' : ''?></label>
						<? $func = (isset($fld['options'])) ? 'form_dropdown' : 'form_input'?>
						<?=$func($fld)?>
						<div class="invalid-feedback">Це поле є обов'язковим.</div>
					</div>
					<? endforeach; ?>
					<div class="form-group">
						<label>Коментар <span class="text-danger">*</span></label>
						<textarea class="form-control" id="comment" name="comment" required></textarea>
						<div class="invalid-feedback">Це поле є обов'язковим.</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-danger" data-dismiss="modal" value="Відміна">
					<input type="submit" class="btn btn-primary" value="Зберегти">
				</div>
			<?=form_close()?>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>