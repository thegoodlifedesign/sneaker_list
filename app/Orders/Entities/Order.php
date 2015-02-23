<?php namespace TGL\Orders\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
		'order_number',
		'size',
		'brand',
		'model',
		'url',
		'msg',
		'price',
		'status_id'
	];

	/*
	 * RELATIONSHIPS
	 */

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('TGL\Users\Entities\User');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function status()
	{
		return $this->belongsTo('TGL\Orders\Entities\Status');
	}

	/**
	 * Relationship between tasks and its comments
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		return $this->morphMany('TGL\Comments\Comment', 'commentable');
	}

}
