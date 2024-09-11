<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Testimonial;

class Testimonials extends Component
{
    public $testimonial;

    /**
     * Create a new component instance.
     *
     * @param  Testimonial  $testimonial
     * @return void
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }

    /**
     * Get the star rating as HTML.
     *
     * @return string
     */
    public function starRating()
    {
        $rating = $this->testimonial->rating;
        $fullStars = str_repeat('<i class="fas fa-star text-yellow-400"></i>', $rating);
        $emptyStars = str_repeat('<i class="far fa-star text-gray-300"></i>', 5 - $rating);
        return $fullStars . $emptyStars;
    }
}
