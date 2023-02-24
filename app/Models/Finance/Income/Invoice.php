<?php

namespace App\Models\Finance\Income;

use App\Models\Finance\Income\InvoiceProduct;
use App\Models\Master\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function client()
    {
        return $this->hasOne(Client::class, 'client_id');
    }

    public function invoiceProduct()
    {
        return $this->hasMany(InvoiceProduct::class, 'invoice_id');
    }
    public function getSubTotal()
    {
        $subTotal = 0;
        foreach ($this->items as $product) {
            $subTotal += ($product->price * $product->quantity);
        }

        return $subTotal;
    }

    public function getTotalTax()
    {
        $totalTax = 0;
        foreach ($this->items as $product) {
            $taxes = Utility::totalTaxRate($product->tax);

            $totalTax += ($taxes / 100) * ($product->price * $product->quantity);
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

        return ($this->getTotal() - $due) - $this->invoiceTotalCreditNote();
    }

    public static function change_status($invoice_id, $status)
    {

        $invoice = Invoice::find($invoice_id);
        $invoice->status = $status;
        $invoice->update();
    }

    public function category()
    {
        return $this->hasOne('App\Models\ProductServiceCategory', 'id', 'category_id');
    }

    public function creditNote()
    {

        return $this->hasMany('App\Models\Finance\Income\Credit', 'invoice', 'id');
    }

    public function invoiceTotalCreditNote()
    {
        return $this->hasMany('App\Models\Finance\Income\Credit', 'invoice', 'id')->sum('amount');
    }

    public function lastPayments()
    {
        return $this->hasOne('App\Models\InvoicePayment', 'id', 'invoice_id');
    }

    public function taxes()
    {
        return $this->hasOne('App\Models\Master\Tax', 'id', 'tax');
    }
    public static function customers($customer)
    {

        $categoryArr = explode(',', $customer);
        $unitRate = 0;
        foreach ($categoryArr as $customer) {
            if ($customer == 0) {
                $unitRate = '';
            } else {
                $customer = Customer::find($customer);
                $unitRate = $customer->name;
            }
        }

        return $unitRate;
    }
    public static function Invoicecategory($category)
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
