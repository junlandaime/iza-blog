<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class FeatBlogPost extends Component
{
    public $post;

    /**
     * Create a new component instance.
     *
     * @param  Post  $post
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.feat-blog-post');
    }

    /**
     * Get the post's excerpt.
     *
     * @return string
     */
    public function excerpt()
    {
        return Str::limit($this->post->content, 150);
    }

    /**
     * Get the formatted date of the post.
     *
     * @return string
     */
    public function formattedDate()
    {
        return $this->post->created_at->format('F d, Y');
    }
}
