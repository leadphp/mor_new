<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Coupons;

class CouponController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        
        return view('admin.Coupons.home');
    }

    public function index(Request $request)
    {   
        $coupons= Coupons::orderBy('id','DESC')->paginate(10);
        return view('admin.Coupons.index',compact('coupons'));
    }

    public function create()
    {
        return view('admin.Coupons.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'coupon_code' => 'required',
            'type' => 'required',
            'description' => 'required',
            'amount' => 'required',
        ]);

        $b= new Coupons;
        $b->coupon_code = trim($request->coupon_code);
        $b->type        = trim($request->type);
        $b->description = trim($request->description);
        $b->amount      = trim($request->amount);

        if($b->save()){
            return redirect('/admin/coupons/index')->with('flash_success','Coupon created successfully.');
        }
    }

    public function show($id)
    {
        $coupons= Coupons::find($id);
        return view('admin.Coupons.show',compact('coupons'));
    }

    public function edit($id)
    {
        $coupons= Coupons::find($id);
        return view('admin.Coupons.edit',compact('coupons'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'coupon_code' => 'required',
            'type' => 'required',
            'description' => 'required',
            'amount' => 'required',
        ]);

        $b=Coupons::find($request->id);
        $b->coupon_code = trim($request->coupon_code);
        $b->type        = trim($request->type);
        $b->description = trim($request->description);
        $b->amount      = trim($request->amount);

        if($b->save()){
            return redirect('/admin/coupons/index')->with('flash_success','Coupon updated successfully.');
        }
    }

    public function destroy(Request $request)
    {
        Coupons::find($request->get('id'))->delete();
        return redirect('admin/coupons/index')
                        ->with('success','Coupon deleted successfully');
    }
}
