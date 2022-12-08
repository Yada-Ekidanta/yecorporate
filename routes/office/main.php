<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Office\AuthController;
use App\Http\Controllers\Office\ProfileController;
use App\Http\Controllers\Office\DashboardController;
use App\Http\Controllers\Office\Master\TaxController;
use App\Http\Controllers\Office\Master\BankController;
use App\Http\Controllers\Office\Master\KbliController;
use App\Http\Controllers\Office\Master\AssetController;
use App\Http\Controllers\Office\Master\ProductController;
use App\Http\Controllers\Office\Master\TrainerController;
use App\Http\Controllers\Office\Master\CaseTypeController;
use App\Http\Controllers\Office\Master\GoalTypeController;
use App\Http\Controllers\Office\Master\JobStageController;
use App\Http\Controllers\Office\Master\PositionController;
use App\Http\Controllers\Office\Master\AwardTypeController;
use App\Http\Controllers\Office\Master\TaskStageController;
use App\Http\Controllers\Office\Master\ClientTypeController;
use App\Http\Controllers\Office\Master\CompetencyController;
use App\Http\Controllers\Office\Master\DepartmentController;
use App\Http\Controllers\Office\Master\IncomeTypeController;
use App\Http\Controllers\Office\Master\LeadSourceController;
use App\Http\Controllers\Office\Master\LoanOptionController;
use App\Http\Controllers\Office\Master\MailConfigController;
use App\Http\Controllers\Office\Master\TargetListController;
use App\Http\Controllers\Office\Master\ExpenseTypeController;
use App\Http\Controllers\Office\Master\PaymentTypeController;
use App\Http\Controllers\Office\Master\PayslipTypeController;
use App\Http\Controllers\Office\Master\ProductUnitController;
use App\Http\Controllers\Office\Master\CampaignTypeController;
use App\Http\Controllers\Office\Master\DocumentTypeController;
use App\Http\Controllers\Office\Master\TrainingTypeController;
use App\Http\Controllers\Office\Master\DocumentFolderController;
use App\Http\Controllers\Office\Master\DocumentOptionController;
use App\Http\Controllers\Office\Master\AllowanceOptionController;
use App\Http\Controllers\Office\Master\DeductionOptionController;
use App\Http\Controllers\Office\Master\PerformanceTypeController;
use App\Http\Controllers\Office\Master\ProductCategoryController;
use App\Http\Controllers\Office\Master\TerminationTypeController;
use App\Http\Controllers\Office\Master\OpportunityStageController;
use App\Http\Controllers\Office\Master\ShippingProviderController;
use App\Http\Controllers\Office\Master\ClientContractTypeController;
use App\Http\Controllers\Office\Master\EmployeeContractTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['domain' => ''], function() {
    Route::prefix('office')->name('office.')->group(function(){
        Route::prefix('auth')->name('auth.')->group(function(){
            Route::get('',[AuthController::class, 'index'])->name('index');
            Route::get('register',[AuthController::class, 'register'])->name('register');
            Route::get('forgot',[AuthController::class, 'forgot'])->name('forgot');
            Route::post('do-login',[AuthController::class, 'do_login'])->name('dologin');
            Route::post('do-register',[AuthController::class, 'do_register'])->name('doregister');
            Route::post('do-forgot',[AuthController::class, 'do_forgot'])->name('doforgot');
            Route::post('do-reset',[AuthController::class, 'do_reset'])->name('doreset');
        });
        Route::middleware(['auth:employees'])->group(function(){
            Route::prefix('dashboard')->name('dashboard.')->group(function(){
                Route::get('',[DashboardController::class, 'index'])->name('index');
                Route::get('ecommerce',[DashboardController::class, 'ecommerce'])->name('ecommerce');
            });
            Route::name('master.')->group(function(){
                Route::resource('allowance', AllowanceOptionController::class);
                Route::resource('asset', AssetController::class);
                Route::resource('award-type', AwardTypeController::class);
                Route::resource('bank', BankController::class);
                Route::resource('campaign-type', CampaignTypeController::class);
                Route::resource('case-type', CaseTypeController::class);
                Route::resource('client-contract-type', ClientContractTypeController::class);
                Route::resource('client-type', ClientTypeController::class);
                Route::resource('competency', CompetencyController::class);
                Route::resource('deduction-option', DeductionOptionController::class);
                Route::resource('department', DepartmentController::class);
                Route::resource('document-folder', DocumentFolderController::class);
                Route::resource('document-option', DocumentOptionController::class);
                Route::resource('document-type', DocumentTypeController::class);
                Route::resource('employee-contract-type', EmployeeContractTypeController::class);
                Route::resource('expense-type', ExpenseTypeController::class);
                Route::resource('goal-type', GoalTypeController::class);
                Route::resource('income-type', IncomeTypeController::class);
                Route::resource('job-stage', JobStageController::class);
                Route::resource('kbli', KbliController::class);
                Route::resource('lead-source', LeadSourceController::class);
                Route::resource('loan-option', LoanOptionController::class);
                Route::resource('mail-config', MailConfigController::class);
                Route::resource('opportunity-stage', OpportunityStageController::class);
                Route::resource('payment-type', PaymentTypeController::class);
                Route::resource('payslip-type', PayslipTypeController::class);
                Route::resource('performance-type', PerformanceTypeController::class);
                Route::resource('position', PositionController::class);
                Route::resource('product-category', ProductCategoryController::class);
                Route::resource('product-unit', ProductUnitController::class);
                Route::resource('product', ProductController::class);
                Route::resource('shipping-provider', ShippingProviderController::class);
                Route::resource('target-list', TargetListController::class);
                Route::resource('task-stage', TaskStageController::class);
                Route::resource('tax', TaxController::class);
                Route::resource('termination-type', TerminationTypeController::class);
                Route::resource('trainer', TrainerController::class);
                Route::resource('training-type', TrainingTypeController::class);
                Route::resource('vendor', VendorController::class);
            });
            Route::prefix('profile')->name('profile.')->group(function(){
                Route::get('',[ProfileController::class, 'index'])->name('index');
                Route::get('setting',[ProfileController::class, 'setting'])->name('setting');
                Route::get('security',[ProfileController::class, 'security'])->name('security');
                Route::get('activity',[ProfileController::class, 'activity'])->name('activity');
                Route::get('billing',[ProfileController::class, 'billing'])->name('billing');
                Route::get('statement',[ProfileController::class, 'statement'])->name('statement');
                Route::get('referral',[ProfileController::class, 'referral'])->name('referral');
                Route::get('apikey',[ProfileController::class, 'apikey'])->name('apikey');
                Route::get('log',[ProfileController::class, 'log'])->name('log');
            });
            Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
        });
    });
});