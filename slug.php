public static function boot()
{
    parent::boot();

    static::creating(function ($post) {
        $title = str_replace('?', '', $post->title);
        $post->slug = preg_replace('/\s+/', '-', $title);
    });
}}
