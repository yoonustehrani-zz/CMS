<?php

namespace HRZ\Cms\Http\Controllers;


class AdminPanelController extends BaseController
{
    public function index()
    {
        $admins = \Cms::listAdmin();
        return view('Cms.Pages.index', compact('admins')); // CVW::Pages.index
    }
}

