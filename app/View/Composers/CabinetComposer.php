<?php
 
namespace App\View\Composers;

use Illuminate\Http\Request;
use Illuminate\View\View;
 
class CabinetComposer
{
    /**
     * The user repository implementation.
     *
     * @var lluminate\Http\Request
     */
    protected $pageUrl;
 
    /**
     * Create a new profile composer.
     *
     * @param  lluminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->pageUrl = $request->getPathInfo();
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        
        $url =  $this->pageUrl;
        $view->with('widget_cabinet_aside', view('providers.cabinetaside', compact('url')));
    }
}