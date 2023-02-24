<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalType extends Model
{
    use HasFactory;
    public static $goalType = [
        'Invoice',
        'Bill',
        'Revenue',
        'Payment',
    ];

    public function target($type, $from, $to, $amount)
    {
        $total = 0;
        $fromDate = $from . '-01';
        $toDate = $to . '-01';
        if (\App\Models\Master\GoalType::$goalType[$type] == 'Invoice') {
            $invoices = Invoice::select('*')->where('issue_date', '>=', $fromDate)->where('issue_date', '<=', $toDate)->get();
            $total = 0;
            foreach ($invoices as $invoice) {
                $total += $invoice->getTotal();
            }
        } elseif (\App\Models\Master\GoalType::$goalType[$type] == 'Bill') {
            $bills = Bill::select('*')->where('bill_date', '>=', $fromDate)->where('bill_date', '<=', $toDate)->get();
            $total = 0;
            foreach ($bills as $bill) {
                $total += $bill->getTotal();
            }
        } elseif (\App\Models\Master\GoalType::$goalType[$type] == 'Revenue') {
            $revenues = Revenue::select('*')->where('date', '>=', $fromDate)->where('date', '<=', $toDate)->get();
            $total = 0;

            foreach ($revenues as $revenue) {
                $total += $revenue->amount;
            }
        } elseif (\App\Models\Master\GoalType::$goalType[$type] == 'Payment') {
            $payments = Payment::select('*')->where('date', '>=', $fromDate)->where('date', '<=', $toDate)->get();
            $total = 0;

            foreach ($payments as $payment) {
                $total += $payment->amount;
            }

        }

        $data['percentage'] = ($total * 100) / $amount;
        $data['total'] = $total;

        return $data;
    }
}
