<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $userid
 * @property integer $eventid
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 * @property User $user
 * @property Event $event
 */
class Userdeficiency extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'userdeficiency';

    /**
     * @var array
     */
    protected $fillable = ['userid', 'eventid', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventid');
    }
}
