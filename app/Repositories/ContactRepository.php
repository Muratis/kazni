<?php
namespace App\Repositories;
use Mail;

class ContactRepository
{

	public function sendMailToAdmin($data)
	{
		Mail::send('mail.UserMail', ['data' => $data], function ($m) use ($data){
			$m->from($data->emailUser, $data->nameUser);
			$m->to('kaznikolas12@gmail.com')->subject($data->subjectUser);
		});
	}

}