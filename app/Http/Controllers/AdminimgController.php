<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Adminimg;
use App\question_survey;
use App\Clerk;
use App\Banks;
use App\Banks_loans;
use App\Banks_regulation;
use App\Banks_regulation_relation;
use App\User;
use App\Bank_interest;
use App\ReportTable;
use App\Coupons;
use App\Bank_madad;
use App\Bank_prime;
use App\Bank_settings_loans;
use App\AdminCheckboxes;
use Excel;
use Mail;
use Session;





class AdminimgController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $adminimgs = Adminimg::orderBy('id','desc')->paginate(15);
        return view('admin.adminimgs.index')->with('adminimgs',$adminimgs);
    }

    public function add()
    {   
        $adminimgs = Adminimg::orderBy('id','desc')->paginate(15);
        return view('admin.adminimgs.add')->with('adminimgs',$adminimgs);
    }

    public function store(Request $request)
    {
       $this->validate($request,[
                'admin_img' => 'image'
       ]);
       
        $image_name =$request->hasFile('admin_img') ? $this->updateFile($request->admin_img) : '';
        
        $b= new Adminimg;
        $b->admin_img = trim($image_name);

        if($b->save()){
            return redirect('/admin/adminimgs')->with('flash_success','Admin Profile added successfully.');
        }
    }

    public function edit($id)
    {
        $adminimg= Adminimg::find($id);
        return view('admin.adminimgs.edit')->with('adminimg',$adminimg);
    }

    public function view($id)
    {
        $adminimg= Adminimg::find($id);
        return view('admin.adminimgs.view')->with('adminimg',$adminimg);
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/adminimgs');
        $image->move($destinationPath, $name);
        return '/images/adminimgs/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'admin_img' => 'image'
       ]);


        $b=Adminimg::find($id);
        $image_name =$request->hasFile('admin_img') ? $this->updateFile($request->admin_img) : $b->admin_img;
        $b->admin_img = trim($image_name);

        if($b->save()){
            return redirect('/admin/adminimgs')->with('flash_success','Admin Profile updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Adminimg::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/adminimgs')->with('flash_success','Admin Profile deleted successfully.');
        }else{
            return redirect('/admin/adminimgs');
        }
    }








/*work started from here:*/

    /**Admin customers/user table **/
    public function users(){
        $user_data =  User::all();
        $user_data_filter =  User::select('id','email')->distinct()->get();
       // dd($clerk_data);
        $counts = User::get()->count();
        if(count($user_data)){
            return view('admin_new.customer')->with('user_data',$user_data)->with('counts', $counts);
        }else{
            return view('admin_new.customer');
        }
        
    }


    public function clerks(Request $request){


        $clerk_data =  Clerk::where(function($t) use($request){
            if(!empty($request->bank_name)){

            $t->where('bank_type',$request->bank_name);
            }
        })->paginate(10);
        $clerk_data_filter =  Clerk::select('bank','bank_type')->distinct()->get();
      
        if(count($clerk_data)){
            return view('admin_new.clerks')->with('clerk_data',$clerk_data)->with('clerk_data_filter',$clerk_data_filter);
        }else{
            return view('admin_new.clerks');
        }
        
    }


    /*----------------------------------

    Clerk Table Filter

    ----------------------------------*/

    public function clerk_filter(Request $request, $id){
        //return $id;
        $data_search = Clerk::where('bank_type',$id)->get();
        
        return response()->json([
            'status'=>1,
            'data'=>$data_search
        ]);

    }

  



    /**clerk_table_excel**/

    public function clerk_table_excel(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['bank_type' => $value->bank_type, 'bank' => $value->bank_name, 'branch' => $value->branch, 'city' => $value->city, 'address' => $value->address, 'clerk_name' => $value->clerk_name, 'main_phone' => $value->main_phone, 'fax' => $value->fax, 'mail' => $value->mail];
            }
            if(!empty($arr)){

                \DB::table('clerks')->insert($arr);
            }
            }
            return response()->json([
              'status' => 1,
            ]); 
        }
        return response()->json([
          'status' => 0,
        ]);      
    }






    /**bank_interest_table_excel**/

    public function bank_interest_table_excel(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['bank_name' => $value->bank_name,'funding_type' => $value->funding_type,'prime_delta' => $value->prime_delta,'years' => $value->years,'prime' => $value->prime,'const_inter_linked' => $value->const_inter_linked,'const_inter_unlinked' => $value->const_inter_unlinked,'var_inter_5year_linked' => $value->var_inter_5year_linked,'var_inter_5year_unlinked' => $value->var_inter_5year_unlinked,'euro_inter' => $value->euro_inter,'dollar_inter' => $value->dollar_inter,'eligibility_inter' => $value->eligibility_inter,'discount' => $value->discount,'discount_status' => $value->discount_status];

            }
            if(!empty($arr)){

                \DB::table('bank_interests')->insert($arr);
            }
            }
            return response()->json([
              'status' => 1,
            ]); 
        }
        return response()->json([
          'status' => 0,
        ]);      
    }



    /**bank_prime_table_excel**/

    public function bank_prime_excel(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['years' => $value->years,'prime' => $value->prime];
            }
            if(!empty($arr)){

                \DB::table('bank_primes')->insert($arr);
            }
            }
            return response()->json([
              'status' => 1,
            ]); 
        }
        return response()->json([
          'status' => 0,
        ]);      
    }


/**bank_madad_table_excel**/

    public function bank_madad_excel(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['years' => $value->years,'madad' => $value->madad];
            }
            if(!empty($arr)){

                \DB::table('bank_madads')->insert($arr);
            }
            }
            return response()->json([
              'status' => 1,
            ]); 
        }
        return response()->json([
          'status' => 0,
        ]);      
    }





    /*------------------------------------------
        REPORT-1 
    -------------------------------------------*/
     
    public function report1(){   
            return view('admin_new.report1');  
    }

    /*------------------------------------------
        REPORT-2 
    -------------------------------------------*/
     
    public function report2(){   
            return view('admin_new.report2');  
    }

    /*------------------------------------------
        BANK INTEREST
    -------------------------------------------*/

    public function bank_interest(){
        $data = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->get();
        $prime_delta = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->first();
        $prime_delta = $prime_delta->prime_delta;
        $banks_loans = Banks_loans::get();
        $bank = Banks::get();
        $bank_madad = Bank_madad::get();
        $bank_prime = Bank_prime::get();

        return view('admin_new.bank_interestTable')->with('details', $data)->with('banks_loans', $banks_loans)->with('bank', $bank)->with('bank_madad', $bank_madad)->with('bank_prime', $bank_prime)->with('prime_delta', $prime_delta);
    }

    public function bank_interest_table_data(Request $request){

        $banks = $request->bank;
        $fundings = $request->fundings;

        $data = Bank_interest::where('bank_name',$banks)->where('funding_type',$fundings)->get();
        $disc = Bank_interest::where('bank_name',$banks)->where('funding_type',$fundings)->first();
        $discount = $disc->discount;
        $discount_status = $disc->discount_status;

        return response()->json([
            'status'=>1,
            'data'=>$data,
            'discount' => $discount,
            'discount_status' => $discount_status
        ]); 


    }

    public function bank_interest_prime_data(Request $request){

        $banks = $request->bank;
        $fundings = $request->fundings;
        $years = $request->years;

        $data = Bank_interest::where('bank_name',$banks)->where('funding_type',$fundings)->where('years',$years)->first();

        $gg = Bank_prime::get();

        return response()->json([
            'status'=>1,
            'data'=>$data,
            'prime' => $gg
        ]); 


    }

    /*------------------------------------------
        SETTINGS
    -------------------------------------------*/

    public function settings(){
        $reports = ReportTable::get();
       $coupons = coupons::get();
       $checks = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();
       $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();
        return view('admin_new.settings')->with('coupons', $coupons)->with('reports',$reports)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE)->with('checks', $checks);
    } 

    

    /*------------------------------------------
       REGISTRATION
    -------------------------------------------*/

    public function registration(){
        return view('admin_new.registration');
    }

    /*------------------------------------------
       BANK INFO
    -------------------------------------------*/

    public function bank_info(){
        return view('admin_new.bank_info');
    }


    /*------------------------------------------
       COUPON SAVE
    --------------------------------------------*/

    public function save_coupon(Request $req){
        $c = new coupons;
        $c ->coupon_code = $req->cc;
        $c ->amount = $req->cp;
        $c->type = "0";
        $c->description = '0';
        $c->save();
        $reports = ReportTable::get();
        $coupons = coupons::get();
        $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();
        return view('admin_new.settings')->with('coupons', $coupons)->with('reports',$reports)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE);
    }


    /*------------------------------------------
       CONSTANT BANK LOANS SAVE
    --------------------------------------------*/

    public function save_constant(Request $req){
        $loanfee  = $req->loanfee_;
        $interest = $req->interest_;
        $time= $req->loantime_;
        $bank_name= $req->bank_;
        Bank_settings_loans::where('bank_name', $bank_name)->update(array('loan_fee' => $loanfee, 'loan_interest' => $interest, 'loan_time' => $time));
        
        return redirect()->route('get_settings');
        
    }


    /*-----------------------------------------
       UPDATE REPORT SAVE
    -------------------------------------------*/

    public function save_report(Request $req){
        $r=$req->rp;
        $id= $req->rid;
        ReportTable::where('id', $id)->update(array('price' => $r));
        return redirect()->route('get_settings');
    }

    /*-----------------------------------------
      CHECKBOX VALUES
    -------------------------------------------*/


     public function check_box_value(Request $request){

        $result = AdminCheckboxes::where('meta_key',$request->field_name)
                      ->where('admin_page',$request->page_name)
                      ->delete();

        $survey = new AdminCheckboxes(); 
        $survey->meta_key = $request->field_name;
        $survey->meta_value = $request->field_value;
        $survey->admin_page = $request->page_name;
        $survey->save();

        return response()->json([
            'status'=>1
        ]); 


    }

    
    
}