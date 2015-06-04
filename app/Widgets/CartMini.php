<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Facade;
use  Arrilot\Widgets\Factories\AbstractWidgetFactory;
use Cart;

class CartMini extends AbstractWidget
{
	
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
	
    public function run()
    {
    	
        return view('widgets.ajax_cart')->with([
        										'total'=>Cart::total(),
        										'count'=>Cart::count()
        		
        ]); 
    }
    
    public function placeholder()
    {
    	return "<span style='color:#fff'>Loading...</span>";
    }
    
    
    
    
}