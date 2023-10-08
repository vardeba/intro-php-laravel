<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransactionRequest;
use App\Services\CreateTransactionService;

class TransactionController extends Controller {
    public function create(CreateTransactionRequest $request) {
        // return User::create($request->all());
        $createTransactionService = new CreateTransactionService();

        return $createTransactionService->execute($request->all());
    }

    // public function deposit(CreateDepositRequest $request) {
    //     $createDepositService = new CreateDepositService();

    //     return $createDepositService->execute(
    //         auth()->user()->id,
    //         $request->value
    //     );
    // }
}