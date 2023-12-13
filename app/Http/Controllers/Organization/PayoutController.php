<?php

namespace App\Http\Controllers\Organization;
use App\Http\Controllers\Controller;
use App\DataTables\Organization\PayoutDataTable;
use App\Repositories\PayoutRepository;
use Illuminate\Support\Facades\Gate;

class PayoutController extends Controller
{
    protected $payoutRepository;

    public function __construct(PayoutRepository $payoutRepository)
    {
        $this->payoutRepository = $payoutRepository;
    }

    public function index(PayoutDataTable $dataTable)
    {
        return $dataTable->render('backend.organization.payout.index');
    }

    public function paymentMethod()
    {

        return view('backend.organization.payout.payout_method');
    }

}
