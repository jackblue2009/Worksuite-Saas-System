<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkSecondary extends Component
{

    public $icon;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $icon = '')
    {
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.forms.link-secondary');
    }

}
