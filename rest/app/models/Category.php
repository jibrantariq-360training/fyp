<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userid
 * @property string $type
 * @property string $updated_at
 * @property string $created_at
 * @property User $user
 */
class Category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'category';

    /**
     * @var array
     */
    protected $fillable = ['userid', 'type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }
}
