<?php


namespace App\Services;


use App\Models\customers;
use App\Models\Departments;

class PageServices
{

    public function getCustomers($where)
    {
        $customers = app(Customers::class)::with('departments')->where('deleted_at', NULL);
        if (!is_null($where)) {
            $customers->where($where);
        }
        return $customers->get();
    }

    public function getDepartments()
    {
        return app(Departments::class)::all();
    }

    public function insertCustomer($items)
    {
        return app(Customers::class)::insert($items);
    }

}
