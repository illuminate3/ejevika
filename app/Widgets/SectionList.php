<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use \App\Model\Catalog;
use Illuminate\Http\Request;

class SectionList extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
	
    public function run(Catalog $catalog,Request $request)
    {
    	
    	if($request->path()!=='/')
    		return;
    		
    	$catalogList = $catalog->active()->get();
    	
        return view('widgets.sectionList',compact('catalogList'));
    }
}