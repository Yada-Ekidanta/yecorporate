<?php

namespace App\Http\Controllers\Web;

use App\Models\Web\Contact;
use App\Models\Web\Insight;
use App\Traits\ResponseView;
use Illuminate\Http\Request;
use App\Models\Web\Portfolio;
use App\Models\Web\Subscriber;
use App\Models\Web\PortfolioFinal;
use App\Models\Web\CompanyIndustry;
use App\Models\Web\InsightCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    use ResponseView;
    public function index(Request $request)
    {
        $mobile = PortfolioFinal::where('platform','Mobile Apps')->where('is_show','y')->get();
        $web = PortfolioFinal::where('platform','Web')->where('is_show','y')->orderBy('created_at','DESC')->get();
        if($request->ajax()){
            $insight = Insight::orderBy('created_at', 'desc')->limit(3)->get();
            return $this->render_view('home.list', compact('insight'));
        }
        return $this->render_view('home.main', compact('mobile','web'));
    }
    public function about()
    {
        return $this->render_view('about.main');
    }
    public function services()
    {
        return $this->render_view('services.main');
    }
    public function ad()
    {
        return $this->render_view('services.ad');
    }
    public function pb()
    {
        return $this->render_view('services.pb');
    }
    public function ms()
    {
        return $this->render_view('services.ms');
    }
    public function ds()
    {
        return $this->render_view('services.ds');
    }
    public function tw()
    {
        return $this->render_view('services.tw');
    }
    public function qa()
    {
        return $this->render_view('services.qa');
    }
    public function career(Request $request)
    {
        if($request->ajax()){
            return $this->render_view('career.list');
        }
        return $this->render_view('career.main');
    }
    public function blog(Request $request)
    {
        $category = InsightCategory::get();
        if($request->ajax()){
            if($request->category != "" || $request->category != null){
                $collection = Insight::where('title','LIKE','%'.$request->keyword.'%')->where('insight_category_id', $request->category)->orderBy('created_at','DESC')->paginate(10);
            }else{
                $collection = Insight::where('title','LIKE','%'.$request->keyword.'%')->orderBy('created_at','DESC')->paginate(10);
            }
            return $this->render_view('insight.list', compact('collection'));
        }
        return $this->render_view('insight.main', compact('category'));
    }
    public function show_blog(Insight $insight)
    {
        if(!$insight){
            abort(404);
        }else{
            return $this->render_view('insight.show', compact('insight'));
        }
    }
    public function case_study(Request $request)
    {
        $industry = CompanyIndustry::get();
        if($request->ajax()){
            if($request->industry != "" || $request->industry != null){
                $collection = Portfolio::where('title','LIKE','%'.$request->keyword.'%')->where('company_industry_id', $request->industry)->orderBy('created_at','DESC')->paginate(5);
            }else{
                $collection = Portfolio::where('title','LIKE','%'.$request->keyword.'%')->orderBy('created_at','DESC')->paginate(5);
            }
            return $this->render_view('case_study.list', compact('collection'));
        }
        return $this->render_view('case_study.main', compact('industry'));
    }
    public function show_portfolio(Portfolio $portfolio)
    {
        if(!$portfolio){
            abort(404);
        }else{
            return $this->render_view('case_study.show', compact('portfolio'));
        }
    }
    public function contact()
    {
        return $this->render_view('contact.main');
    }
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribers,email',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $inbox = new Subscriber;
        $inbox->email = $request->email;
        $inbox->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Thank you for subscibe, we promise will not spam',
        ]);
    }
    public function send_message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'messages' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $inbox = new Contact;
        $inbox->name = $request->name;
        $inbox->phone = $request->phone;
        $inbox->wa = $request->wa;
        $inbox->email = $request->email;
        $inbox->message = $request->messages;
        $inbox->created_at = date('Y-m-d H:i:s');
        $inbox->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Thank you for contacting us, our team will respond as soon as possible',
        ]);
    }
}
