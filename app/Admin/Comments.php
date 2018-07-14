<?php
use App\Models\Comments;
use SleepingOwl\Admin\Model\ModelConfiguration;
AdminSection::registerModel(Comments::class, function (ModelConfiguration $model) {
	$model->setTitle('Комменарии');
	$model->setAlias('comments');
	$model->onDisplay(function () {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::text('post_id', 'Номер комментария'),
			AdminColumn::text('name_users', 'Кто оставил'),
			AdminColumn::text('text_comment', 'Комментарий'),
			AdminColumnEditable::checkbox('seen','Да', 'Нет')->setLabel('Просмотрено'),
//			AdminColumn::datetime('created_at')->setLabel('Дата')->setFormat('d.m.Y')->setWidth('150px')
		]);
		$display->paginate(15);
		return $display;
	});

	$model->onEdit(function () {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::checkbox('seen', 'Просмотрено')
		);
		return $form;
	});





});