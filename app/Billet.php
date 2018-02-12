<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IdBillet
 * @property string $TypeBille
 * @property string $prix
 * @property string $updated_at
 * @property string $created_at
 * @property int $IdVol
 * @property Vol $vol
 */
class Billet extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'billet';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IdBillet';

    /**
     * @var array
     */
    protected $fillable = ['TypeBille', 'prix', 'updated_at', 'created_at', 'IdVol'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vol()
    {
        return $this->belongsTo('App\Vol', 'IdVol', 'IdVol');
    }
}
