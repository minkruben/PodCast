<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Item extends Model {

	protected $fillable = ['user_id', 'podcast_id', 'title', 'description', 'url', 'audio_url', 'published_at']


	public function podcast()
	{
		return $this->belongsTo('App\Podcast');
	}
}
