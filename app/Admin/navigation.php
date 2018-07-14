<?php

use SleepingOwl\Admin\Navigation\Page;



// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Выйти',
        'icon'  => 'fa fa-sign-out',
        'url'   => '/',
    ],

    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'Information',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.information'),
    ],

    [
        'title' => 'Новости',
        'icon'  => 'fa fa-file-text-o',
        'url'   => 'adminKazni/news',
    ],

    [
        'title' => 'Комментарии',
        'icon'  => 'fa fa-file-text-o',
        'url'   => 'adminKazni/comments',
    ],

    [
        'title' => 'Логи',
        'url'   => 'adminKazni/logs',
    ],

    [
        'title' => 'Портфолио',
        'icon'  => 'fa fa-file-text-o',
        'url'   => 'adminKazni/portfolio',
    ],

    [
        'title' => 'Пользователи',
        'icon' => 'fa fa-group',
        'pages' => [
            [
                'title' => 'Пользователи',
                'icon'  => 'fa fa-group',
                'url'   => 'adminKazni/users',
            ],
            [
                'title' => 'Роли',
                'icon'  => 'fa fa-graduation-cap',
                'url'   => 'adminKazni/roles',
            ],
            [
                'title' => 'Права',
                'icon'  => 'fa fa-key',
                'url'   => 'adminKazni/permits',
            ],
        ]


    ],




];