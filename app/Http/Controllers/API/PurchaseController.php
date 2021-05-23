<?php

namespace App\Http\Controllers\API;

use App\Services\PurchaseService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'sortBy' =>
                ['nullable',
                    function ($attribute, $value, $fail) {
                        if (!Schema::hasColumn('purchases', $value)) {
                            $fail('The '.$attribute.' is invalid.');
                        }
                    },
                ],
            'desc' => ['nullable', 'boolean'],
        ]);

        $sortBy = $request->get('sortBy') ?? 'created_at';
        $sortType = $request->get('desc') ? 'desc' : 'asc';

        return api_response(PurchaseService::getPurchases($sortBy, $sortType));
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100|min:4',
            'specId' => 'required|regex:/^[A-Za-z0-9]+$/i',
        ]);

        $title = $request->post('title');
        $specId = $request->post('specId');

        return api_response(PurchaseService::createPurchase($title, $specId));
    }
}
