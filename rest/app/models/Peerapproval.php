<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $userid1
 * @property integer $userid2
 * @property integer $eventid
 * @property boolean $status
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 * @property User $user
 * @property User $user
 * @property Event $event
 */
class Peerapproval extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'peersapproval';

    /**
     * @var array
     */
    protected $fillable = ['userid1', 'userid2', 'eventid', 'status', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventid');
    }
}
