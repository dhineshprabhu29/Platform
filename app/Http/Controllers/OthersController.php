<?php

/**
 * Copyright (c) 2017 - present, DocsPen, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace DocsPen\Http\Controllers;

use Activity;
use DocsPen\Repos\EntityRepo;
use Illuminate\Http\Response;
use Views;

class OthersController extends Controller
{
    public function credits()
    {
        return view('others.credits');
    }
}