<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Hash;

	use Illuminate\Validation\Rules\Password;

	use App\Http\Controllers\Controller;
	use App\Models\Member;

	class MemberController extends Controller
	{
		public function inputForm() 
		{
			return view('member.createMember');
		}

		public function confirm(Request $request) 
		{
			$request->validate([
				'name' => 'required', 'string', 'max:255',
				'phone' => 'required | numeric | digits_between:8,11',
				'email' => 'required', 'string', 'email', 'max:255', 'unique:customers',
				'password' => ['required', 'confirmed', 'max: 128', 
								Password::min(8)
								->letters()
								->mixedCase()
								->numbers()
								->uncompromised()],
				'confirmPassword' => 'required',
			]);

			$inputs = $request->all();

			return view('member.confirmMember', [ 'inputs' => $inputs ]);
		}


		public function create(Request $request)
		{
			$member = Member::create([
				'name' => $request->name,
				'phone' => $request->phone,
				'email' => $request->email,
				'password' => Hash::make($request->password),
			]);
			return view('member.confirmMember');
		}
	}