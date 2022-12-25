<?php

namespace App\Http\Controllers\Office\Finance;

use App\Http\Controllers\Controller;
use App\Models\Finance\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\Client;
class BudgetController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $periods = Budget::$period;
            $data['monthList'] = $month = $this->yearMonth();          //Monthly

            $data['quarterly_monthlist'] = [                          //Quarterly
                                                                      'Jan-Mar',
                                                                      'Apr-Jun',
                                                                      'Jul-Sep',
                                                                      'Oct-Dec',
            ];

            $data['half_yearly_monthlist'] = [                     // Half - Yearly
                                                                   'Jan-Jun',
                                                                   'Jul-Dec',
            ];

            $data['yearly_monthlist'] = [                   // Yearly
                                                            'Jan-Dec',
            ];


            $data['yearList'] = $this->yearList();
            $collection = Budget::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.budget.list', compact('collection', 'periods', 'incomeproduct', 'expenseproduct'), $data);
        }
        return view('pages.office.finance.budget.main');
    }
    public function create()
    {
            $periods = Budget::$period;
            $data1['monthList'] = $month = $this->yearMonth();          //Monthly

            $data1['quarterly_monthlist'] = [                          //Quarterly
                                                                      'Jan-Mar',
                                                                      'Apr-Jun',
                                                                      'Jul-Sep',
                                                                      'Oct-Dec',
            ];

            $data1['half_yearly_monthlist'] = [                     // Half - Yearly
                                                                   'Jan-Jun',
                                                                   'Jul-Dec',
            ];

            $data1['yearly_monthlist'] = [                   // Yearly
                                                            'Jan-Dec',
            ];


            $data1['yearList'] = $this->yearList();
        return view('pages.office.finance.budget.input', ['periods'=> $periods, 'data1'=> $data1, 'data' => new Budget]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
         
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $budget = new Budget;
        $budget->client_id      = $request->client_id;
            $budget->subject     = $request->subject;
            $budget->type        = $request->type;
            $budget->value       = $request->value;
            $budget->start_date  = $request->start_date;
            $budget->end_date    = $request->end_date;
            $budget->status    = $request->status;
            $budget->description = $request->description;
            $budget->created_by  = 1;

        $budget->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Budget has been saved',
        ], 200);
    }
    public function show(Budget $budget)
    {
        //
    }
    public function edit(Budget $budget)
    {
        $clients = Client::orderBy('name', 'asc')->get();
        $types = BudgetType::orderBy('name', 'asc')->get();
        return view('pages.office.finance.budget.input', ['types' => $types, 'clients' => $clients, 'data' => $budget]);
    }
    public function update(Request $request, Budget $budget)
    {
        $validator = Validator::make($request->all(), [
          
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $budget->client_id      = $request->client_id;
            $budget->subject     = $request->subject;
            $budget->type        = $request->type;
            $budget->value       = $request->value;
            $budget->start_date  = $request->start_date;
            $budget->end_date    = $request->end_date;
            $budget->status    = $request->status;
            $budget->description = $request->description;
            $budget->created_by  = 1;

        $budget->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Budget has been updated',
        ], 200);
    }
    public function destroy(Budget $budget)
    {
        $budget->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Budget has been deleted',
        ], 200);
    }
    public function yearMonth()
    {

        // $month[] = __('January');
        // $month[] = __('February');
        // $month[] = __('March');
        // $month[] = __('April');
        // $month[] = __('May');
        // $month[] = __('June');
        // $month[] = __('July');
        // $month[] = __('August');
        // $month[] = __('September');
        // $month[] = __('October');
        // $month[] = __('November');
        // $month[] = __('December');

        $month[] = 'January';
        $month[] = 'February';
        $month[] = 'March';
        $month[] = 'April';
        $month[] = 'May';
        $month[] = 'June';
        $month[] = 'July';
        $month[] = 'August';
        $month[] = 'September';
        $month[] = 'October';
        $month[] = 'November';
        $month[] = 'December';

        return $month;
    }


    public function yearList()
    {
        $starting_year = date('Y', strtotime('-5 year'));
        $ending_year   = date('Y');

        foreach(range($ending_year, $starting_year) as $year)
        {
            $years[$year] = $year;
        }

        return $years;
    }
}
