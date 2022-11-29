<?php
namespace App\Traits;
use Jenssegers\Agent\Agent;
trait ResponseView{
    public function render_view($view,$compact=null,$alternativePath=null){
        $agent = new Agent();
        // dd("boom");
        if($agent->isMobile()){
            // dd("sad");
            if(view()->exists('pages.web.mobile.'.$view)){
                #return view mobile
                if($compact!=null){
                    return view('pages.web.mobile.'.$view,$compact);
                }else{
                    return view('pages.web.mobile.'.$view);
                }
            }else{
                return redirect($alternativePath);
            }
        }else{
            // dd("dasd");
            if(view()->exists('pages.web.desktop.'.$view)){
                #return view frontend
                if($compact!=null){
                    return view('pages.web.desktop.'.$view,$compact);
                }else{
                    return view('pages.web.desktop.'.$view);
                }
            }else{
                return redirect($alternativePath);
            }
        }
    }
}