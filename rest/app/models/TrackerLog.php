<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $trackerid
 * @property string $description
 * @property integer $hours
 * @property string $updated_at
 * @property string $created_at
 * @property Tracker $tracker
 */
class TrackerLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'trackerlog';

    /**
     * @var array
     */
    protected $fillable = ['trackerid', 'description', 'hours'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tracker()
    {
        return $this->belongsTo('App\Tracker', 'trackerid');
    }
}
