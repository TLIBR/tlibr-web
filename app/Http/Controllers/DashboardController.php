<?php

/**
 *    Copyright 2018 The Lost Island : Battle Royale.
 *
 *    This file is part of TLIBR Web. TLIBR Web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of The Lost Island : Battle Royale.
 *
 *    TLIBR Web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    TLIBR Web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with TLIBR Web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Http\Controllers;

use App\Carousel;
use App\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function carousel()
    {
        return view('dashboard.carousel')->with('images', Carousel::orderBy('sort_order', 'asc')->get());
    }

    public function tagList()
    {
        return view('dashboard.tag_list');
    }

    public function news()
    {
        return view('dashboard.news');
    }

    public function pages()
    {
        return view('dashboard.pages');
    }

    public function team()
    {
        return view('dashboard.team')->with('employees', Team::orderBy('sort_order', 'asc')->get());
    }
}
