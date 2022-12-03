<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingCustomerController extends Controller
{
    /**
     * Customer Didn't Confirm booking
     * @param Request $request
     * @return mixed
     */
    public function customerNotCall(Request $request)
    {
        $data = $request->all();

        $response = $this->repository->customerNotCall($data);

        return response($response);

    }
}
