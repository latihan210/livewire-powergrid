<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonationController extends Controller
{
    public function start(Request $request, Member $member): RedirectResponse
    {
        $admin = $request->user();

        abort_unless($admin?->isAdministrator(), 403);
        abort_if($request->session()->has('impersonator_id'), 403);
        abort_unless($member->user_id, 404);

        $member->loadMissing('user');

        abort_if(! $member->user || $member->user->is($admin), 404);

        $request->session()->put('impersonator_id', $admin->id);
        $request->session()->put('impersonator_back_to', $request->headers->get('referer', route('member')));

        Auth::guard('web')->login($member->user);
        $request->session()->regenerate();

        return redirect()->route('dashboard')
            ->with('status', 'Anda sedang masuk sebagai member '.$member->username.'.');
    }

    public function stop(Request $request): RedirectResponse
    {
        $impersonatorId = $request->session()->get('impersonator_id');

        abort_unless($impersonatorId, 403);

        $backTo = $request->session()->pull('impersonator_back_to', route('dashboard'));
        $request->session()->forget('impersonator_id');

        Auth::guard('web')->loginUsingId($impersonatorId);
        $request->session()->regenerate();

        return redirect()->to($backTo)
            ->with('status', 'Anda sudah kembali ke akun admin.');
    }
}
