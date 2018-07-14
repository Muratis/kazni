<?php
use App\Models\Comments;
use App\Models\Text;
use App\Models\News as Article;
use SleepingOwl\Admin\Model\ModelConfiguration;
AdminSection::registerModel(Article::class, function (ModelConfiguration $model) {
	$model->setTitle('Новость');

	$model->onDisplay(function () {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::text('post_id', 'Номер новости')->setWidth('200px'),
			AdminColumn::text('title', 'Название новости')->setWidth('400px'),
			AdminColumn::image('preview_image', 'Картинка')->setWidth('400px'),
			AdminColumn::count('comment_users.text_comment', 'Комментариев')->setWidth('100px'),
			AdminColumn::datetime('created_at')->setLabel('Дата')->setFormat('d.m.Y')->setWidth('150px')
		]);
		$display->paginate(15);
		return $display;
	});

	$model->onCreateAndEdit(function () {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::text('title', 'Название новости'),
			AdminFormElement::textarea('preview_text', 'Предпросмотр новости', 'ckeditor'),
			AdminFormElement::image('preview_image', 'Картинка для предпросмотра'),
			AdminFormElement::textarea('text', 'Текст новости', 'ckeditor')
		);
		return $form;
	});





});