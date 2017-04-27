<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $userid
 * @property integer $approvalby
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 * @property User $user
 * @property User $user
 */
class Approval extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['userid', 'approvalby', 'description'];

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
    public function user()
    {
        return $this->belongsTo('App\User', 'approvalby');
    }
}
