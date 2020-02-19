<?php

namespace App\Controllers;

class PagesController
{
    /**
     * @return void
     */
    public function home()
    {
        return view('index');
    }

    /**
     * @return void
     */
    public function about()
    {
        return view('about');
    }

    /**
     * @return void
     */
    public function aboutCulture()
    {
        $name = 'Laracasts';

        return view('about-culture', [
            'name' => $name,
        ]);
    }

    /**
     * @return void
     */
    public function contact()
    {
        return view('contact');
    }
}
