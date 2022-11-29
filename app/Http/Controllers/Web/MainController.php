<?php

namespace App\Http\Controllers\Web;

use App\Models\Master\Inbox;
use App\Traits\ResponseView;
use Illuminate\Http\Request;
use App\Models\CRM\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    use ResponseView;
    public function index()
    {
        return $this->render_view('home.main');
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
    public function career()
    {
        return $this->render_view('career.main');
    }
    public function blog()
    {
        return $this->render_view('blog.main');
    }
    public function show_blog($slug)
    {
        if($slug == "kementerian-pertahanan-gelar-indo-defence-2022-expo-forum-pameran-industri")
        {
            return $this->render_view('blog.rdi');
        }
        elseif($slug == "paparan-pengembangan-aplikasi-penduduk-non-permanen-dukcapil-kementerian-dalam-negeri-republik-indonesia")
        {
            return $this->render_view('blog.nonper');
        }
        elseif($slug == "paparan-pengembangan-aplikasi-eoffice-dukcapil-kementerian-dalam-negeri-republik-indonesia")
        {
            return $this->render_view('blog.eoffice');
        }
        elseif($slug == "paparan-pengembangan-aplikasi-program-hibah-luar-negeri-tahap-1")
        {
            return $this->render_view('blog.phln');
        }else{
            abort(404);
        }
    }
    public function blog_eoffice_kemendagri()
    {
        return $this->render_view('blog.eoffice_kemendagri');
    }
    public function case_study()
    {
        return $this->render_view('case_study.main');
    }
    public function contact()
    {
        return $this->render_view('contact.main');
    }
    public function newsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:newsletters,email',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $inbox = new Newsletter;
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
            'email' => 'required',
            'messages' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $inbox = new Inbox;
        $inbox->name = $request->name;
        $inbox->email = $request->email;
        $inbox->messages = $request->messages;
        $inbox->created_at = date('Y-m-d H:i:s');
        $inbox->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Thank you for contacting us, our team will respond as soon as possible',
        ]);
    }
}
