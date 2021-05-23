<?php


namespace App\Services;


use App\Http\Resources\PurchaseCollection;
use App\Http\Resources\PurchaseResource;
use App\Purchase;

class PurchaseService
{
    public function __construct()
    {
    }

    public static function getPurchases($sortBy, $sortType)
    {
        return new PurchaseCollection(Purchase::orderBy($sortBy,$sortType)->paginate(10));
    }

    public static function createPurchase($title, $specId)
    {
        $result = Purchase::firstOrCreate(array('title' => $title,'specId' => $specId));

        return new PurchaseResource($result);
    }
}
