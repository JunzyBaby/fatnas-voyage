<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IdReservation
 * @property string $DateReservation
 * @property int $NbrPlace
 * @property string $updated_at
 * @property string $created_at
 * @property int $IdClient
 * @property int $IdVol
 * @property Client $client
 * @property Vol $vol
 */
class Reservation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'reservation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IdReservation';

    /**
     * @var array
     */
    protected $fillable = ['DateReservation', 'NbrPlace','statut', 'updated_at', 'created_at', 'IdClient', 'IdVol'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Client', 'IdClient', 'IdClient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vol()
    {
        return $this->belongsTo('App\Vol', 'IdVol', 'IdVol');
    }
}
