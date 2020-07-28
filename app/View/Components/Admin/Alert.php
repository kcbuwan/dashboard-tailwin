<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getStyles()
    {
        $colors = [
            'success' => 'bg-green-100 border-green-400 text-green-700',
            'error' => 'bg-red-100 border-red-400 text-red-700',
            'warning' => 'bg-orange-100 border-orange-400 text-orange-700',
            'info' => 'bg-blue-100 border-blue-400 text-blue-700'
        ];

        return $colors[$this->type] ?? $colors['success'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.alert');
    }
}
