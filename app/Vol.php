<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IdVol
 * @property string $CodeVol
 * @property string $DateDepart
 * @property string $DateArrive
 * @property int $NbrePlace
 * @property string $DureeVol
 * @property string $Destination
 * @property string $updated_at
 * @property string $created_at
 * @property int $IdCompagnie
 * @property Compagnie $compagnie
 * @property Billet[] $billets
 * @property Reservation[] $reservations
 */
class Vol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vol';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IdVol';

    /**
    *    @var string 

    */

    protected $softDelete=true;

    /**
     * @var array
     */
    protected $fillable = ['CodeVol', 'DateDepart', 'DateArrive', 'NbrePlace', 'DureeVol', 'Destination','Statut', 'updated_at', 'created_at', 'IdCompagnie'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compagnie()
    {
        return $this->belongsTo('App\Compagnie', 'IdCompagnie', 'IdCompagnie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billets()
    {
        return $this->hasMany('App\Billet', 'IdVol', 'IdVol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany('App\Reservation', 'IdVol', 'IdVol');
    }
}
