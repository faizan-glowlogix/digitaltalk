<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingReOpenController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function show(Request $request)
    {
        $data = $request->all();
        $response = $this->repository->reopen($data);

        return response($response);
    }
}
