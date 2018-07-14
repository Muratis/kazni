<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

	protected $table = 'comments';

	protected $primaryKey = 'post_id';

	public function article()
	{
		return $this->belongsTo('App\Models\News', 'post_id', 'post_id');
	}

}