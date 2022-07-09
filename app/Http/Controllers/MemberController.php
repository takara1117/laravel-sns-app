<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Hash;

	use App\Http\Controllers\Controller;
	use App\Models\Member;

	class MemberController extends Controller
	{
		public function inputForm() 
		{
			return view('member.createMember');
		}

		public function create(Request $request) 
		{
			$request->validate([
				'name' => 'required',
				'phone' => 'required | numeric | digits_between:8,11',
				'email' => 'required', 'string', 'email', 'max:255', 'unique:customers',
				'password' => 'required'
			]);

			$inputs = $request->all();

			return view('member.confirmMember', [ 'inputs' => $inputs ]);
		}

		// public function confirm()
		// {
		// 	return redirect('member.confirmMember');
		// }
	}