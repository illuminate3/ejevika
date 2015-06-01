<? 

Menu::handler('catalog')->hydrate(function()
  {
    return App\Model\Catalog::active()->get();
  },
  function($children, $item)
  {

    $children->add('catalog/'.$item->slug,$item->name);

  });
  
