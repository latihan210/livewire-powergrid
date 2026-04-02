<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InternalRegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('pages.auth.register');
    }

    public function store(Request $request, CreateNewUser $creator): RedirectResponse
    {
        $creator->create($request->all());

        return redirect()
            ->route('member.register')
            ->with('status', __('User created successfully.'));
    }
}
