<?php namespace DocsPen;

class View extends Model
{

    protected $fillable = ['user_id', 'views'];

    /**
     * Get all owning viewable models.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function viewable()
    {
        return $this->morphTo();
    }
}
