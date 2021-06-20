<?php

namespace App\Http\Controllers;

use App\Services\PageServices;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $pageServices;

    public function __construct()
    {
        $this->pageServices = new PageServices();
    }

    public function index()
    {
        $data['customers'] = $this->pageServices->getCustomers();

        return view('index', $data);
    }

    public function insertCustomer(Request $request)
    {
        if ($request->has('insert')) {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'gsm_no' => 'numeric|max:10',
                'department_id' => 'required|numeric',
            ]);


            $this->pageServices->insertCustomer($request->except('_token', 'insert'));
            return redirect()->route('index')->with('success', 'Customer Inserted');
        }
        $data['departments'] = $this->pageServices->getDepartments();

        return view('insert', $data);
    }
}
