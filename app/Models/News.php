<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Text;
use App\Models\Comments;



class News extends Model
{

	protected $text;
	protected $comments;
	protected $table = 'posts';

	protected $primaryKey = 'post_id';
	
	
	public function comment_users()
	{
		//Отношение один ко многим
		return $this->hasMany('App\Models\Comments', 'post_id', 'post_id');
	}
	
	


}