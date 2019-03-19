<?php

namespace HRZ\Cms;

use HRZ\Cms\Models\Admin;


class Cms
{
    public function listAdmin()
    {
        return Admin::all();
    }
}

