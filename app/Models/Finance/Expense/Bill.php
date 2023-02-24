<?php

namespace App\Models\Finance\Expense;

use App\Models\Finance\Expense\BillItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public function tax()
    {
        return $this->hasOne('App\Models\Master\Tax', 'id', 'tax_id');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Finance\Expense\BillItem', 'bill_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\BillPayment', 'bill_id', 'id');
    }

    public function billItem()
    {
        return $this->hasMany(BillItem::class, 'bill_id');
    }

    public function getSubTotal()
    {
        $subTotal = 0;
        foreach ($this->items as $product) {
            $subTotal += ($product->price * $product->qty);
        }

        return $subTotal;
    }

    public function getTotalTax()
    {
        $totalTax = 0;
        foreach ($this->items as $product) {
            $taxes = Utility::totalTaxRate($product->tax);

            $totalTax += ($taxes / 100) * ($product->price * $product->qty);
        }

        return $totalTax;
    }

    public function getTotalDiscount()
    {
        $totalDiscount = 0;
        foreach ($this->items as $product) {
            $totalDiscount += $product->discount;
        }

        return $totalDiscount;
    }

    public function getTotal()
    {
        return ($this->getSubTotal() + $this->getTotalTax()) - $this->getTotalDiscount();
    }

    public function getDue()
    {
        $due = 0;
        foreach ($this->payments as $payment) {
            $due += $payment->amount;
        }

        return ($this->getTotal() - $due) - ($this->billTotalDebitNote());
    }

    public function client()
    {
        return $this->hasOne('App\Models\Master\Client', 'id', 'client_id');
    }

    public function debitNote()
    {
        return $this->hasMany('App\Models\Finance\Expense\DebitNote', 'bill', 'id');
    }

    public function billTotalDebitNote()
    {
        return $this->hasMany('App\Models\Finance\Expense\DebitNote', 'bill', 'id')->sum('amount');
    }

    public function lastPayments()
    {
        return $this->hasOne('App\Models\BillPayment', 'id', 'bill_id');
    }

    public function taxes()
    {
        return $this->hasOne('App\Models\Master\Tax', 'id', 'tax');
    }
    public static function vendor($venders)
    {

        $categoryArr = explode(',', $venders);
        $unitRate = 0;
        foreach ($categoryArr as $venders) {
            if ($venders == 0) {
                $unitRate = '';
            } else {
                $venders = Vender::find($venders);
                $unitRate = ($venders) ? $venders->name : ' ';
            }
        }

        return $unitRate;
    }

    public static function ProposalCategory($category)
    {
        $categoryArr = explode(',', $category);
        $categoryRate = 0;
        foreach ($categoryArr as $category) {
            $category = ProductServiceCategory::find($category);
            $categoryRate = $category->name;
        }

        return $categoryRate;
    }
}
