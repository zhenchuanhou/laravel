<?php

namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller
{
    public function info($id)
    {
        return Member::getMember();
//        return 'member-id-' . $id;

//        return route('memberinfo');
//        return view('member/info', [
//            'name'=>'haley'
//        ]);

    }
}