<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Http\Controllers\Controller;

	class MemberController extends Controller
	{
		public function create()
		{
			return view('member.createMember');
		}
	}