<?php

namespace App\Http\Controllers;

use App\Domains\User\Entities\UserProfile;
use Mehnat\User\Entities\User;
use Mehnat\User\Repository\UserRepository;
use Mehnat\User\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userClass;
    private $userService;
    private $userRepository;
    private $smsGate;

    public function __construct(SmsGateInterface $smsGate)
    {
        $this->smsGate = $smsGate;

        $this->userClass = User::class;
        $this->userService = new UserService();
        $this->userRepository = new UserRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userClass;
        $users = $this->userService->filter($users);
        $users = $this->userService->sort($users);

        //get_users
        $users = $this->userRepository->getAll($users);

        $smsGate->send('0696969', 'bbh3wbh3b');

        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = $this->userRepository->cerate($request);
        $profile = $this->userProfileRepository->cerate($user);

        /*$profile = UserProfile::create([
            'user_id' => $user->id
        ]);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
