<?php
namespace App\Repositories;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Models\Comments;

class BlogRepository
{
	public function __construct()
	{
		$this->news = new News();
		$this->comments = new Comments();
	}

	public function getAllWithComments()
	{
		//Все новости вместе с количеством комментариев и пагинацией

		$posts = $this->news->leftJoin('comments', 'posts.post_id', '=', 'comments.post_id')
			->select('posts.post_id', 'posts.title', 'posts.preview_text', 'posts.preview_image', 'posts.text', 'posts.created_at', 'posts.updated_at',
				DB::raw('count(comments.comment_id) as comments'))
			->groupBy('posts.post_id')
			->latest()->paginate(6)->fragment('blog');

		return $posts;
	}

	public function getOneView($post_id) {
		$news = $this->news->select('title', 'post_id', 'text', 'created_at')->findOrFail($post_id);
		return $news;

	}

	public function getAllComments($post_id) {
		$comments = $this->comments->select('post_id', 'name_users', 'text_comment')->where('seen', '=', 1)->where('post_id', '=', $post_id)->get();
		return $comments;
	}
	
	
	public function store_comment($data)
	{
		//Добавление комментраия, если не получаеться, то выдает ошибку!

		try {
			DB::beginTransaction();
			$this->saveCommentPost($data);
			DB::commit();
		} catch (Exception $e) {
			DB::rollback();
			abort(503);
		}
	}



	/**
	 * @param $data
	 */

	public function deleteComment($data)
	{

		$this->comments->where('comment_id', '=', $data->comment_id)
			->delete();
	}





	/**
	 * @param $data
	 */

	protected function saveCommentPost($data)
	{
		$this->comments->post_id = $data->post_id;
		$this->comments->name_users = $data->nameUser;
		$this->comments->text_comment = $data->commentTxt;

		$this->comments->save();
	}

}
