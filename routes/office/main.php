<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Office\AuthController;
use App\Http\Controllers\Office\PM\TaskController;
use App\Http\Controllers\Office\PM\TeamController;
use App\Http\Controllers\Office\PM\ZoomController;
use App\Http\Controllers\Office\ProfileController;
use App\Http\Controllers\Office\DashboardController;
use App\Http\Controllers\Office\Master\TaxController;
use App\Http\Controllers\Office\PM\ProjectController;
use App\Http\Controllers\Office\PM\TrackerController;
use App\Http\Controllers\Office\Master\BankController;
use App\Http\Controllers\Office\Master\KbliController;
use App\Http\Controllers\Office\PM\CalendarController;
use App\Http\Controllers\Office\PM\TodoListController;
use App\Http\Controllers\Office\Master\AssetController;
use App\Http\Controllers\Office\PM\InvoicePMController;
use App\Http\Controllers\office\PM\MilestoneController;
use App\Http\Controllers\Office\Master\ProductController;
use App\Http\Controllers\Office\Master\TrainerController;
use App\Http\Controllers\Office\Master\CaseTypeController;
use App\Http\Controllers\Office\Master\GoalTypeController;
use App\Http\Controllers\Office\Master\JobStageController;
use App\Http\Controllers\Office\Master\PositionController;
use App\Http\Controllers\Office\Master\RegionalController;
use App\Http\Controllers\Office\Master\AwardTypeController;
use App\Http\Controllers\Office\Master\TaskStageController;
use App\Http\Controllers\Office\Master\ClientTypeController;
use App\Http\Controllers\Office\Master\CompetencyController;
use App\Http\Controllers\Office\Master\DepartmentController;
use App\Http\Controllers\Office\Master\IncomeTypeController;
use App\Http\Controllers\Office\Master\LeadSourceController;
use App\Http\Controllers\Office\Master\LoanOptionController;
// use App\Http\Controllers\Office\Master\MailConfigController;
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
use App\Http\Controllers\Office\PM\TimesheetController;

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
        Route::redirect('/','/auth');
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
                Route::get('regional/{regional}/create',[RegionalController::class, 'create_province'])->name('regional.create_province');
                Route::post('regional/store-province',[RegionalController::class, 'store_province'])->name('regional.store_province');
                Route::get('regional/{regional}/{province}/edit-province',[RegionalController::class, 'edit_province'])->name('regional.edit_province');
                Route::patch('regional/{province}/update-province',[RegionalController::class, 'update_province'])->name('regional.update_province');
                Route::delete('regional/{province}/destroy-province',[RegionalController::class, 'destroy_province'])->name('regional.destroy_province');

                Route::get('province/{province}/show_regency',[RegionalController::class, 'show_regency'])->name('regional.show_regency');
                Route::get('province/{province}/create',[RegionalController::class, 'create_regency'])->name('regional.create_regency');
                Route::post('province/store-regency',[RegionalController::class, 'store_regency'])->name('regional.store_regency');
                Route::get('province/{province}/{regency}/edit-regency',[RegionalController::class, 'edit_regency'])->name('regional.edit_regency');
                Route::patch('province/{regency}/update-regency',[RegionalController::class, 'update_regency'])->name('regional.update_regency');
                Route::delete('province/{regency}/destroy-regency',[RegionalController::class, 'destroy_regency'])->name('regional.destroy_regency');

                Route::get('regency/{regency}/show_district',[RegionalController::class, 'show_district'])->name('regional.show_district');
                Route::get('regency/{regency}/create',[RegionalController::class, 'create_district'])->name('regional.create_district');
                Route::post('regency/store-district',[RegionalController::class, 'store_district'])->name('regional.store_district');
                Route::get('regency/{regency}/{district}/edit-district',[RegionalController::class, 'edit_district'])->name('regional.edit_district');
                Route::patch('regency/{district}/update-district',[RegionalController::class, 'update_district'])->name('regional.update_district');
                Route::delete('regency/{district}/destroy-district',[RegionalController::class, 'destroy_district'])->name('regional.destroy_district');

                Route::get('district/{district}/show_village',[RegionalController::class, 'show_village'])->name('regional.show_village');
                Route::get('district/{district}/create',[RegionalController::class, 'create_village'])->name('regional.create_village');
                Route::post('district/store-village',[RegionalController::class, 'store_village'])->name('regional.store_village');
                Route::get('district/{district}/{village}/edit-village',[RegionalController::class, 'edit_village'])->name('regional.edit_village');
                Route::patch('district/{village}/update-village',[RegionalController::class, 'update_village'])->name('regional.update_village');
                Route::delete('district/{village}/destroy-village',[RegionalController::class, 'destroy_village'])->name('regional.destroy_village');

                Route::resource('regional', RegionalController::class);
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
                Route::get('kbli/{kbli}/create',[KbliController::class, 'create_sub'])->name('kbli.create_sub');
                Route::post('kbli/store-sub',[KbliController::class, 'store_sub'])->name('kbli.store_sub');
                Route::get('kbli/{kbli}/{data}/edit-sub',[KbliController::class, 'edit_sub'])->name('kbli.edit_sub');
                Route::patch('kbli/{kbli}/update-sub',[KbliController::class, 'update_sub'])->name('kbli.update_sub');
                Route::delete('kbli/{kbli}/destroy-sub',[KbliController::class, 'destroy_sub'])->name('kbli.destroy_sub');
                Route::resource('kbli', KbliController::class);
                Route::resource('lead-source', LeadSourceController::class);
                Route::resource('loan-option', LoanOptionController::class);
                // Route::resource('mail-config', MailConfigController::class);
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
                // Route::resource('vendor', VendorController::class);
            });
            Route::prefix('crm')->name('crm.')->group(function(){
            });
            Route::prefix('finance')->name('finance.')->group(function(){
            });
            Route::prefix('pm')->name('pm.')->group(function(){
                Route::resource('project', ProjectController::class);
                Route::resource('milestone', MilestoneController::class);
                Route::get('milestone/{project}/index',[MilestoneController::class, 'index'])->name('milestone.index');
                Route::get('milestone/{project}/create',[MilestoneController::class, 'create'])->name('milestone.create');
                Route::post('milestone/{project}/store',[MilestoneController::class, 'store'])->name('milestone.store');
                Route::resource('invoice-pm', InvoicePMController::class);
                Route::resource('tracker', TrackerController::class);
                Route::post('/fetch-task/{id}',[TrackerController::class, 'fetchTask'])->name('tracker.fetchTask');
                Route::resource('task', TaskController::class);
                Route::get('task/{project}/index',[TaskController::class, 'index'])->name('task.index');
                Route::get('task/{project}/create',[TaskController::class, 'create'])->name('task.create');
                Route::post('task/{project}/store',[TaskController::class, 'store'])->name('task.store');
                Route::resource('team', TeamController::class);
                Route::get('team/{project}/index',[TeamController::class, 'index'])->name('team.index');
                Route::get('team/{project}/create',[TeamController::class, 'create'])->name('team.create');
                Route::post('team/{project}/store',[TeamController::class, 'store'])->name('team.store');
                Route::resource('todo-list', TodoListController::class);
                Route::get('todo-list/{task}/create',[TodoListController::class, 'create'])->name('todo-list.create');
                Route::post('todo-list/{task}/store',[TodoListController::class, 'store'])->name('todo-list.store');
                Route::put('todo-list/{todo_list}',[TodoListController::class, 'updateStatus'])->name('todo-list.updateStatus');
                Route::resource('zoom', ZoomController::class);
                Route::resource('calender', CalendarController::class);
                Route::resource('time-sheet', TimesheetController::class);
            });
            Route::prefix('setting')->name('setting.')->group(function(){
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
