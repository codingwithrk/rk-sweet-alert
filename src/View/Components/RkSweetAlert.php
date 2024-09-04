<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkSweetAlert\View\Components;

use Illuminate\View\Component;

class RkSweetAlert extends Component
{

    public $theme;

    public function __construct($theme = null)
    {
        $this->theme = $theme ?? config('rk-sweet-alert.theme');
    }

    public function render()
    {
        return view('rk-sweet-alert::alert');
    }
}