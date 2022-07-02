<?php

	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\LoginController;
    use App\Http\Controllers\MemberController;

	Route::get("/", [LoginController::class, "login"]);

    Route::get("/member/createMember", [MemberController::class, "create"]);