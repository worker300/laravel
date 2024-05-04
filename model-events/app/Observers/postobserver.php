<?php

namespace App\Observers;

use App\Models\post;
use Illuminate\Support\str;

class postobserver
{
    /**
     * Handle the post "created" event.
     */
    public function retrieved(post $post): void
    {
        $post->increment('counter');
    }

    public function created(post $post): void
    {
        //
    }

    public function saving(post $post): void
    {
        $post->slug = Str::slug($post->title,"-");
    }

    /**
     * Handle the post "updated" event.
     */
    public function updated(post $post): void
    {
        //
    }

    /**
     * Handle the post "deleted" event.
     */
    public function deleted(post $post): void
    {
        
    }

    /**
     * Handle the post "restored" event.
     */
    public function restored(post $post): void
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     */
    public function forceDeleted(post $post): void
    {
        //
    }
}
