<?php

namespace App\Http\Controllers;

use App\Repository\JwtAuthRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class jwtAuthController extends Controller
{
    protected $jwtRepository;

    public function __construct(JwtAuthRepositoryInterface $jwtRepository)
    {
        $this->jwtRepository = $jwtRepository;
    }

    public function register(Request $request)
    {
        return   $this->jwtRepository->register($request);
    }

    public function login(Request $request)
    {
        return   $this->jwtRepository->login($request);
    }
    public function logout()
    {
        return   $this->jwtRepository->logout();
    }
    public function getUser()
    {
        return $this->jwtRepository->getUser();
    }
}
