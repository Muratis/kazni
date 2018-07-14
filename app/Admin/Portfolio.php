<?php
use App\Models\Portfolio;
use SleepingOwl\Admin\Model\ModelConfiguration;
AdminSection::registerModel(Portfolio::class, function (ModelConfiguration $model) {
	$model->setTitle('Портфолио');
	$model->setAlias('portfolio');

	$model->onDisplay(function () {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::text('id', 'Номер портфолио'),
			AdminColumn::text('title', 'Проект'),
			AdminColumn::text('link_to_project', 'Ссылка'),
			AdminColumn::image('meta_project_image', 'Изображение'),

			AdminColumn::text('meta_project', 'Превью проекта'),
			AdminColumn::datetime('created_at')->setLabel('Дата')->setFormat('d.m.Y')->setWidth('150px')
		]);
		$display->paginate(8);
		return $display;
	});

	$model->onCreateAndEdit(function () {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::text('title', 'Название проекта'),
			AdminFormElement::text('link_to_project', 'Ссылка'),
			AdminFormElement::wysiwyg('meta_project', 'Текст для превью', 'ckeditor'),
			AdminFormElement::image('meta_project_image', 'Изображение для превью'),
			AdminFormElement::images('slide_images_project', 'Изображения для слайда сайта')->storeAsComaSeparatedValue()->required(),
			AdminFormElement::wysiwyg('desc_project', 'Описание проекта', 'ckeditor')
		);
		return $form;
	});





});