<?php

	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\LoginController;
    use App\Http\Controllers\MemberController;

	Route::get("/", [LoginController::class, "login"]);

    Route::get("/member/createMember",  [MemberController::class, "inputForm"]);
	Route::post("/member/confirm",  [MemberController::class, "confirm"]);
    Route::get("/member/create", [MemberController::class, "create"]);