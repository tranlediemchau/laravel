<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\typemarchandise;
//use Illuminate\Users\Repository as UserRepository; tu nhien thay cut no di,.thay bo un

class CateroryMenuComposer
{
    /**
     * The user repository implementation.
     *	
     * @var UserRepository
     */
  //  protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
   // public function __construct(UserRepository $users)
   // {
        // Dependencies automatically resolved by service container...
  //      $this->users = $users;
   // }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $allproductType = typemarchandise::all();
        $view->with('allproductType',$allproductType);

    }
}



