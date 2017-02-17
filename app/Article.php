<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Carbon\Carbon $published_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $intro
 * @method static \Illuminate\Database\Query\Builder|\App\Article published()
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereIntro($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $fillable=['title','content','published_at','user_id'];
    protected $dates=['published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
