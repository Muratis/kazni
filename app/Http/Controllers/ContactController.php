<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\SaveMailUser;
use App\Repositories\ContactRepository;
class ContactController extends Controller {

	public function __construct(){
		$this->MailUser = new ContactRepository();
	}


	public function getViewContacts() {
		return view('contacts.contacts');
	}
	
	public function postMail(SaveMailUser $request) {
		$this->MailUser->sendMailToAdmin($request);
		return view('contacts.send_succes');
	}
}