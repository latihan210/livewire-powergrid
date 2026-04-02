<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $member = Member::with(['sponsorData', 'upline'])->findOrFail($id);

        return view('pages.member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $member = Member::with(['sponsorData', 'upline'])->findOrFail($id);

        return view('pages.member.show', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): View
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): View
    {
        $member = Member::with(['sponsorData', 'upline'])->findOrFail($id);

        return view('pages.member.show', compact('member'));
    }
}
