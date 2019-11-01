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
use Auth;





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
        $class =[];
        foreach($user_data as $user){
            $id = $user->id;
            $ques = question_survey::where('user_id',$id)->get();
            $quest = array();
            foreach($ques as $que){
                $ques_id = $que->question_id;
                $quest[] = $ques_id;
            }

            if(in_array(16,$quest) || in_array(15,$quest)){
                $class[]="green";
            }elseif(in_array(1,$quest)){
                $class[]="yellow";
            }else{
                $class[]="gray";
            }


        }
        

        $user_data_filter =  User::select('id','email')->distinct()->get();
       // dd($clerk_data);
        $counts = User::get()->count();
        if(count($user_data)){
            return view('admin_new.customer')->with('user_data',$user_data)->with('counts', $counts)->with('class',$class);
        }else{
            return view('admin_new.customer');
        }
        
    }

     /**Admin customers/user table FOR HEBREW**/
    public function users_hr(){

        $user_data =  User::all();
        $user_data_filter =  User::select('id','email')->distinct()->get();
       // dd($clerk_data);
        $counts = User::get()->count();
        if(count($user_data)){
            return view('admin_new.customer_hr')->with('user_data',$user_data)->with('counts', $counts);
        }else{
            return view('admin_new.customer_hr');
        }
    }

    /*Delete Customer*/

    public function delete_customer($id)
    {   

        $b= User::find($id);

        if(!empty($b)){
            $b->delete();
            return redirect('/admin/dashboard')->with('flash_success','Profile deleted successfully.');
        }else{
            return redirect('/admin/dashboard');
        }
    }
    
    /*Delete Customer for HEBREW*/

    public function delete_customer_hr($id)
    {   

        $b= User::find($id);

        if(!empty($b)){
            $b->delete();
            return redirect('/admin/dashboard-hr')->with('flash_success','Profile deleted successfully.');
        }else{
            return redirect('/admin/dashboard-hr');
        }
    }

    /*Delet Customers ends here*/


    public function clerks(Request $request){

        $clerk_data =  Clerk::get();
        if(count($clerk_data) != 0){
          $clerk_data = $clerk_data;  
        }else{
            $clerk_data = array();
        }


        $clerk_data_filter =  Clerk::select('bank','bank_type')->distinct()->get();
      
        if(count($clerk_data)){
            return view('admin_new.clerks')->with('clerk_data',$clerk_data)->with('clerk_data_filter',$clerk_data_filter);
        }else{
            return view('admin_new.clerks')->with('clerk_data',$clerk_data)->with('clerk_data_filter',$clerk_data_filter);
        }
        
    }

    public function clerks_hr(){
        $clerk_data =  Clerk::get();
        if(count($clerk_data) != 0){
          $clerk_data = $clerk_data;  
        }else{
            $clerk_data = array();
        }


        $clerk_data_filter =  Clerk::select('bank','bank_type')->distinct()->get();
      
        if(count($clerk_data)){
            return view('admin_new.clerks_hr')->with('clerk_data',$clerk_data)->with('clerk_data_filter',$clerk_data_filter);
        }else{
            return view('admin_new.clerks_hr')->with('clerk_data',$clerk_data)->with('clerk_data_filter',$clerk_data_filter);
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

    /*----------------------------------

    Customer Status Table Filter

    ----------------------------------*/

    public function custom_status(Request $request, $id){

        //return $id;select('name','surname')->where('id', 1)->get();
        $data_search = question_survey::select('user_id')->where('question_id', '<', $id)->get();
          //   dd($data_search[0]->user_id);
        $main_data= User::where('id', $data_search)->get();
        dd($main_data);
        return response()->json([
            'status'=>1,
            'data'=>$main_data
        ]);

    }

    /*----------------------------------

    Clerk Table Filter HR

    ----------------------------------*/

    public function clerk_filter_hr(Request $request, $id){
        //return $id;
        $data_search = Clerk::where('bank_type',$id)->get();
        //dd($data_search);
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
                Clerk::truncate();
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

    /**clerk_table_excel for hebrew**/

    public function clerk_table_excel_hr(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['bank_type' => $value->bank_type, 'bank' => $value->bank_name, 'branch' => $value->branch, 'city' => $value->city, 'address' => $value->address, 'clerk_name' => $value->clerk_name, 'main_phone' => $value->main_phone, 'fax' => $value->fax, 'mail' => $value->mail];
            }
            if(!empty($arr)){
                Clerk::truncate();
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
                Bank_interest::truncate();
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

    /**bank_interest_table_excel for HR**/

    public function bank_interest_table_excel_hr(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['bank_name' => $value->bank_name,'funding_type' => $value->funding_type,'prime_delta' => $value->prime_delta,'years' => $value->years,'prime' => $value->prime,'const_inter_linked' => $value->const_inter_linked,'const_inter_unlinked' => $value->const_inter_unlinked,'var_inter_5year_linked' => $value->var_inter_5year_linked,'var_inter_5year_unlinked' => $value->var_inter_5year_unlinked,'euro_inter' => $value->euro_inter,'dollar_inter' => $value->dollar_inter,'eligibility_inter' => $value->eligibility_inter,'discount' => $value->discount,'discount_status' => $value->discount_status];

            }
            if(!empty($arr)){
                Bank_interest::truncate();
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
                Bank_prime::truncate();
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

     /**bank_prime_table_excel for hebrew**/

    public function bank_prime_excel_hr(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['years' => $value->years,'prime' => $value->prime];
            }
            if(!empty($arr)){
                Bank_prime::truncate();
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

                Bank_madad::truncate();

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



/**bank_madad_table_excel for hebrew**/

    public function bank_madad_excel_hr(Request $request){

        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {

                    $arr[] = ['years' => $value->years,'madad' => $value->madad];
            }
            if(!empty($arr)){

                Bank_madad::truncate();

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


public function bank_table_discounts(Request $request){
 
    $bank = $request->bank;
    $status = $request->status;

    $bank = Bank_interest::where('bank_name',$bank)->where('funding_type','FundingA')->first()->update(['discount_status' => $status]);

    return response()->json([
      'status' => $status,
    ]); 


}






    /*------------------------------------------
        REPORT-1 
    -------------------------------------------*/
     
    public function report1($id){   
       $data = User:: where('id', $id)->get();
        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();


        /*for each question */
        $user_id = $id;
        $maindata_ques_1 = question_survey::where('user_id', $id)->where('question_id','1')->get();
        
        $maindata_ques_2 = question_survey::where('user_id', $id)->where('question_id','2')->get();

        $maindata_ques_3 = question_survey::where('user_id', $id)->where('question_id','3')->get();

        $maindata_ques_4 = question_survey::where('user_id', $id)->where('question_id','4')->get();

        $maindata_ques_5 = question_survey::where('user_id', $id)->where('question_id','5')->get();

        $maindata_ques_6= question_survey::where('user_id', $id)->where('question_id','6')->get();

        $maindata_ques_7= question_survey::where('user_id', $id)->where('question_id','7')->get();

        $maindata_ques_8= question_survey::where('user_id', $id)->where('question_id','8')->get();

        $maindata_ques_9= question_survey::where('user_id', $id)->where('question_id','9')->get();

        $maindata_ques_10= question_survey::where('user_id', $id)->where('question_id','10')->get();

        
        $maindata_ques_11= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','111')->get();
        $maindata_ques_11_2= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','112')->get();
        $maindata_ques_11_3= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','113')->get();


        $maindata_ques_11_extra= question_survey::where('user_id', $id)->where('question_id','11')->get();

        $maindata_ques_12= question_survey::where('user_id', $id)->where('question_id','14')->get();

        $maindata_ques_13= question_survey::where('user_id', $id)->where('question_id','15')->get();

        $maindata_ques_14= question_survey::where('user_id', $id)->where('question_id','16')->get();

        $maindata_ques_15= question_survey::where('user_id', $id)->where('question_id','17')->get();

        $maindata_ques_16= question_survey::where('user_id', $id)->where('question_id','18')->get();


        $checks = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();
        $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();

        return view('admin_new.report1')->with('data', $data)->with('ques', $ques)->with('user_id', $user_id)->with('maindata_ques_1', $maindata_ques_1)->with('maindata_ques_2', $maindata_ques_2)->with('maindata_ques_3', $maindata_ques_3)->with('maindata_ques_4', $maindata_ques_4)->with('maindata_ques_5', $maindata_ques_5)->with('maindata_ques_6', $maindata_ques_6)->with('maindata_ques_7', $maindata_ques_7)->with('maindata_ques_8', $maindata_ques_8)->with('maindata_ques_9', $maindata_ques_9)->with('maindata_ques_10', $maindata_ques_10)->with('maindata_ques_11',$maindata_ques_11)->with('maindata_ques_11_2',$maindata_ques_11_2)->with('maindata_ques_11_3',$maindata_ques_11_3)->with('maindata_ques_12', $maindata_ques_12)->with('maindata_ques_13', $maindata_ques_13)->with('maindata_ques_14', $maindata_ques_14)->with('maindata_ques_15', $maindata_ques_15)->with('maindata_ques_11_extra',$maindata_ques_11_extra)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE)->with('maindata_ques_16',$maindata_ques_16)->with('checks',$checks);  
    }

    public function report1_hr(){ 
        return view('admin_new.report1_hr');
    }


    /*------------------------------------------
        REPORT-2 
    -------------------------------------------*/
     
    public function report2($id){   
            $data = User:: where('id', $id)->get();
        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();


        /*for each question */
        $user_id = $id;
        $maindata_ques_1 = question_survey::where('user_id', $id)->where('question_id','1')->get();
        
        $maindata_ques_2 = question_survey::where('user_id', $id)->where('question_id','2')->get();

        $maindata_ques_3 = question_survey::where('user_id', $id)->where('question_id','3')->get();

        $maindata_ques_4 = question_survey::where('user_id', $id)->where('question_id','4')->get();

        $maindata_ques_5 = question_survey::where('user_id', $id)->where('question_id','5')->get();

        $maindata_ques_6= question_survey::where('user_id', $id)->where('question_id','6')->get();

        $maindata_ques_7= question_survey::where('user_id', $id)->where('question_id','7')->get();

        $maindata_ques_8= question_survey::where('user_id', $id)->where('question_id','8')->get();

        $maindata_ques_9= question_survey::where('user_id', $id)->where('question_id','9')->get();

        $maindata_ques_10= question_survey::where('user_id', $id)->where('question_id','10')->get();

        
        $maindata_ques_11= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','111')->get();
        $maindata_ques_11_2= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','112')->get();
        $maindata_ques_11_3= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','113')->get();


        $maindata_ques_11_extra= question_survey::where('user_id', $id)->where('question_id','11')->get();

        $maindata_ques_12= question_survey::where('user_id', $id)->where('question_id','14')->get();

        $maindata_ques_13= question_survey::where('user_id', $id)->where('question_id','15')->get();

        $maindata_ques_14= question_survey::where('user_id', $id)->where('question_id','16')->get();

        $maindata_ques_15= question_survey::where('user_id', $id)->where('question_id','17')->get();

        $maindata_ques_16= question_survey::where('user_id', $id)->where('question_id','18')->get();


        $checks = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();
        $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();

        return view('admin_new.report2')->with('data', $data)->with('ques', $ques)->with('user_id', $user_id)->with('maindata_ques_1', $maindata_ques_1)->with('maindata_ques_2', $maindata_ques_2)->with('maindata_ques_3', $maindata_ques_3)->with('maindata_ques_4', $maindata_ques_4)->with('maindata_ques_5', $maindata_ques_5)->with('maindata_ques_6', $maindata_ques_6)->with('maindata_ques_7', $maindata_ques_7)->with('maindata_ques_8', $maindata_ques_8)->with('maindata_ques_9', $maindata_ques_9)->with('maindata_ques_10', $maindata_ques_10)->with('maindata_ques_11',$maindata_ques_11)->with('maindata_ques_11_2',$maindata_ques_11_2)->with('maindata_ques_11_3',$maindata_ques_11_3)->with('maindata_ques_12', $maindata_ques_12)->with('maindata_ques_13', $maindata_ques_13)->with('maindata_ques_14', $maindata_ques_14)->with('maindata_ques_15', $maindata_ques_15)->with('maindata_ques_11_extra',$maindata_ques_11_extra)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE)->with('maindata_ques_16',$maindata_ques_16)->with('checks',$checks);  
    }

    public function report2_hr(){ 
        return view('admin_new.report2_hr');
    }


    /*------------------------------------------
        BANK INTEREST
    -------------------------------------------*/

    public function bank_interest(){
        $data = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->get();
        $prime_deltas = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->first();
        $prime_delta = $prime_deltas->prime_delta;

        $discount_status = $prime_deltas->discount_status;
        $discount = $prime_deltas->discount;
        $banks_loans = Banks_loans::get();
        $bank = Banks::get();
        $bank_madad = Bank_madad::get();
        $bank_prime = Bank_prime::get();

        return view('admin_new.bank_interestTable')->with('details', $data)->with('banks_loans', $banks_loans)->with('bank', $bank)->with('bank_madad', $bank_madad)->with('bank_prime', $bank_prime)->with('prime_delta', $prime_delta)->with('discount_status', $discount_status)->with('discount', $discount);
    }

    public function bank_interest_table_data(Request $request){

        $banks = $request->bank;
        $fundings = $request->fundings;

        $data = Bank_interest::where('bank_name',$banks)->where('funding_type',$fundings)->get();
        $disc = Bank_interest::where('bank_name',$banks)->first();
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



    public function bank_interest_madad_data(Request $request){

        $data = Bank_madad::get();

        return response()->json([
            'status'=>1,
            'data'=>$data,
        ]); 


    }

    /*------------------------------------------
        BANK INTEREST hr
    -------------------------------------------*/


     public function bank_interest_hr(){

         $data = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->get();
        $prime_deltas = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->first();
        $prime_delta = $prime_deltas->prime_delta;

        $discount_status = $prime_deltas->discount_status;
        $discount = $prime_deltas->discount;
        $banks_loans = Banks_loans::get();
        $bank = Banks::get();
        $bank_madad = Bank_madad::get();
        $bank_prime = Bank_prime::get();

        return view('admin_new.bank_interest_table_hr')->with('details', $data)->with('banks_loans', $banks_loans)->with('bank', $bank)->with('bank_madad', $bank_madad)->with('bank_prime', $bank_prime)->with('prime_delta', $prime_delta)->with('discount_status', $discount_status)->with('discount', $discount);
      
        //return view('admin_new.bank_interest_table_hr');
    }


    public function bank_interest_table_data_hr(Request $request){
 
        $banks = $request->bank;
        $fundings = $request->fundings;

        $data = Bank_interest::where('bank_name',$banks)->where('funding_type',$fundings)->get();
        $disc = Bank_interest::where('bank_name',$banks)->first();
        $discount = $disc->discount;
        $discount_status = $disc->discount_status;

        return response()->json([
            'status'=>1,
            'data'=>$data,
            'discount' => $discount,
            'discount_status' => $discount_status
        ]); 


    }

      public function bank_interest_prime_data_hr(Request $request){

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

     public function bank_interest_madad_data_hr(Request $request){

        $data = Bank_madad::get();

        return response()->json([
            'status'=>1,
            'data'=>$data,
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

    public function settings_hr(){

        $reports = ReportTable::get();
        $coupons = coupons::get();
        $checks = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();
        $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();
        
            return view('admin_new.settings_hr')->with('coupons', $coupons)->with('reports',$reports)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE)->with('checks', $checks);
            
     }   

    /*------------------------------------------
       BANK INFO
    -------------------------------------------*/

    public function bank_info($id){
        $data = User:: where('id', $id)->get();
        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();
        return view('admin_new.bank_info')->with('data', $data)->with('ques', $ques);
    } 

    // /*------------------------------------------
    //    LOG OUT
    // -------------------------------------------*/

    public function logout() {
    
       Auth::logout();
       return redirect('/');
       
    }

    /*------------------------------------------
       COMPARE OFFERS ONLINE
    -------------------------------------------*/

    public function compare_offers($id){
        $data = User:: where('id', $id)->get();
        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();
        return view('admin_new.online_compare_offer')->with('data', $data)->with('ques', $ques);
    }
      public function bank_info_hr(){
          return view('admin_new.bank_info_hr');
      }



    /*------------------------------------------
       COUPON SAVE
    --------------------------------------------*/

    public function save_coupon(Request $req){

        $req->validate([
            'cc' => 'required',
            'cp' => 'required',
        ]);


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
        // return view('admin_new.settings')->with('coupons', $coupons)->with('reports',$reports)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE);
         return redirect()->route('get_settings');
    }

    public function save_coupon_hr(Request $req){
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
        // return view('admin_new.settings')->with('coupons', $coupons)->with('reports',$reports)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE);
         return redirect()->route('get_settings_hr');
    }


    public function delete_coupon($id){

        $result = coupons::where('id',$id)->delete();

        return redirect()->route('get_settings');

    }

    public function delete_coupon_hr($id){

        $result = coupons::where('id',$id)->delete();

        return redirect()->route('get_settings_hr');

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

 /*------------------------------------------
       CONSTANT BANK LOANS SAVE HR
    --------------------------------------------*/

    public function save_constant_hr(Request $req){
        $loanfee  = $req->loanfee_;
        $interest = $req->interest_;
        $time= $req->loantime_;
        $bank_name= $req->bank_;
        Bank_settings_loans::where('bank_name', $bank_name)->update(array('loan_fee' => $loanfee, 'loan_interest' => $interest, 'loan_time' => $time));
        
        return redirect()->route('get_settings_hr');
        
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

    public function save_report_hr(Request $req){
        $r=$req->rp;
        $id= $req->rid;
        ReportTable::where('id', $id)->update(array('price' => $r));
        return redirect()->route('get_settings_hr');
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

    /*-----------------------------------------
      CHECKBOX VALUES HR
    -------------------------------------------*/


     public function check_box_value_hr(Request $request){

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

    /*-----------------------------------------
      CUSTOMER DETAILS DATA
    -----------------------------------------*/

    public function customer_details($id){

        $data = User:: where('id', $id)->get();
        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();
        return view('admin_new.customer_detail')->with('data', $data)->with('ques', $ques);

    }


    public function customer_details_hr($id){
        $data = User:: where('id', $id)->get();
        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();

     return view('admin_new.customer_details_hr')->with('data', $data)->with('ques', $ques);

    }

     /*-----------------------------------------
      COMPARE OFFER DATA
    -----------------------------------------*/

    public function  compare_offer_hr(){
        return view('admin_new.compare_offer_hr');
    }



     /*------------------------------------------
       REGISTRATION
    -------------------------------------------*/

    public function registration($id){

        $data = User:: where('id', $id)->get();

        Session::put('User_id_edit', $id);


        //$admin_options = AdminCheckboxes::get();

        //$admin_options = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();


        $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();


        /*for each question */
        $user_id = $id;
        $maindata_ques_1 = question_survey::where('user_id', $id)->where('question_id','1')->get();
        
        $maindata_ques_2 = question_survey::where('user_id', $id)->where('question_id','2')->get();

        $maindata_ques_3 = question_survey::where('user_id', $id)->where('question_id','3')->get();

        $maindata_ques_4 = question_survey::where('user_id', $id)->where('question_id','4')->get();

        $maindata_ques_5 = question_survey::where('user_id', $id)->where('question_id','5')->get();

        $maindata_ques_6= question_survey::where('user_id', $id)->where('question_id','6')->get();

        $maindata_ques_7= question_survey::where('user_id', $id)->where('question_id','7')->get();

        $maindata_ques_8= question_survey::where('user_id', $id)->where('question_id','8')->get();

        $maindata_ques_9= question_survey::where('user_id', $id)->where('question_id','9')->get();

        $maindata_ques_10= question_survey::where('user_id', $id)->where('question_id','10')->get();

        
        $maindata_ques_11= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','111')->get();
        $maindata_ques_11_2= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','112')->get();
        $maindata_ques_11_3= question_survey::where('user_id', $id)->where('question_id','11')->where('parent_id','113')->get();


        $maindata_ques_11_extra= question_survey::where('user_id', $id)->where('question_id','11')->get();

        $maindata_ques_12= question_survey::where('user_id', $id)->where('question_id','14')->get();

        $maindata_ques_13= question_survey::where('user_id', $id)->where('question_id','15')->get();

        $maindata_ques_14= question_survey::where('user_id', $id)->where('question_id','16')->get();

        $maindata_ques_15= question_survey::where('user_id', $id)->where('question_id','17')->get();

        $maindata_ques_16= question_survey::where('user_id', $id)->where('question_id','18')->get();


        $checks = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();
        $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();

        return view('admin_new.registration')->with('data', $data)->with('ques', $ques)->with('user_id', $user_id)->with('maindata_ques_1', $maindata_ques_1)->with('maindata_ques_2', $maindata_ques_2)->with('maindata_ques_3', $maindata_ques_3)->with('maindata_ques_4', $maindata_ques_4)->with('maindata_ques_5', $maindata_ques_5)->with('maindata_ques_6', $maindata_ques_6)->with('maindata_ques_7', $maindata_ques_7)->with('maindata_ques_8', $maindata_ques_8)->with('maindata_ques_9', $maindata_ques_9)->with('maindata_ques_10', $maindata_ques_10)->with('maindata_ques_11',$maindata_ques_11)->with('maindata_ques_11_2',$maindata_ques_11_2)->with('maindata_ques_11_3',$maindata_ques_11_3)->with('maindata_ques_12', $maindata_ques_12)->with('maindata_ques_13', $maindata_ques_13)->with('maindata_ques_14', $maindata_ques_14)->with('maindata_ques_15', $maindata_ques_15)->with('maindata_ques_11_extra',$maindata_ques_11_extra)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE)->with('maindata_ques_16',$maindata_ques_16)->with('checks',$checks);
    }

    public function registration_hr($id){

       $data = User:: where('id', $id)->get();
       $ques = question_survey:: select('question_id')->where('user_id', $id)->distinct()->get()->count();

        return view('admin_new.registration_hr')->with('data', $data)->with('ques', $ques);
    }


     /*_______________________________________________________________
    |
    |  question 1 post method
    |________________________________________________________________
    */
    public function questionOnePost(Request $request)
    {

          $idd= $request->user_id;
             $result = question_survey::where('question_id','1')
                      ->where('user_id',$idd)
                      ->delete();

                $id = $this->saveAndUpdate('ques1',$request->living_location,0,1,$idd);
                
                if($request->living_location == "rental_aprt"){ 
                $id = $this->saveAndUpdate('ques1Option',$request->monthly_pay,0,1,$idd);
                 }
        
            return response()->json([
              'status' => 1,
            ]);  
        
    }

    /*_______________________________________________________________
    |
    |  question 2 post method
    |________________________________________________________________
    */
    public function questionTwoPost(Request $request)
    {

        $idd = $request->user_id;


        if($request->que2 == "No"){
            $result = question_survey::where('question_id','2')->where('user_id',$idd)->delete();
            $ques2 = $this->saveAndUpdate('ques2',$request->que2,0,2,$idd);
            $ques2_1 = $this->saveAndUpdate('property_1','[null,null,null]',0,2,$idd);
            $ques2_2 = $this->saveAndUpdate('property_value','[null,null,null]',0,2,$idd);
            $ques2_3 = $this->saveAndUpdate('monthly_income','[null,null,null]',0,2,$idd);
            $ques2_5 = $this->saveAndUpdate('property_value_2','[null,null,null]',0,2,$idd);
            $ques2_6 = $this->saveAndUpdate('mortgage_balance','[null,null,null]',0,2,$idd);
            $ques2_9 = $this->saveAndUpdate('bank','[null,null,null]',0,2,$idd );
        }else{

            $result = question_survey::where('question_id','2')->where('user_id',$idd)->delete();
            $ques2 = $this->saveAndUpdate('ques2',$request->que2,0,2,$idd);
            $ques2_1 = $this->saveAndUpdate('property_1',json_encode($request->property_1),0,2,$idd);
            $ques2_2 = $this->saveAndUpdate('property_value',json_encode($request->property_value),0,2,$idd);
            $ques2_3 = $this->saveAndUpdate('monthly_income',json_encode($request->monthly_income),0,2,$idd);
             $ques2_6 = $this->saveAndUpdate('mortgage_balance',json_encode($request->mortgage_balance),0,2,$idd);
            $ques2_5 = $this->saveAndUpdate('property_value_2',json_encode($request->property_val),0,2,$idd);
            
            $ques2_9 = $this->saveAndUpdate('bank',json_encode($request->bank),0,2,$idd);
        }
                  
        return response()->json([
          'status' => 1,
        ]);  
    }
    


    /*_______________________________________________________________
    |
    |  question 3 post method
    |________________________________________________________________
    */
    public function questionThreePost(Request $request)
    {
        $idd= $request->user_id;
        $gender= $request->gender;
        $result = question_survey::where('question_id','3')->where('user_id',$idd)->delete();
        $ques3 = $this->saveAndUpdate('gender',$gender,0,3,$idd);
        return response()->json([
          'status' => 1,
        ]);  
        
    }

    /*_______________________________________________________________
    |
    |  question 4 post method
    |________________________________________________________________
    */
    public function questionFourPost(Request $request)
    {
        $idd= $request->user_id;
        $result = question_survey::where('question_id','4')->where('user_id',$idd)->delete();
        $ques4 = $this->saveAndUpdate('family_income',$request->net_income,0,4,$idd);
        return response()->json([
            'status' => 1,
        ]);  
        
    }

    /*_______________________________________________________________
    |
    |  question 5 post method
    |________________________________________________________________
    */
    public function questionFivePost(Request $request)
    {

        //dd($request->stable_statuss);
            $idd= $request->user_id;
            $fee_status = $request->stable_statuss;

            if($fee_status == 'no'){
                $fee =  $request->stable_status_fee;
            }else{
                $fee = 0;
            }

            $result = question_survey::where('question_id','5')->where('user_id',$idd)->delete();
            $ques5 = $this->saveAndUpdate('Stable_status_fee',$fee,0,5, $idd);
            $ques5 = $this->saveAndUpdate('Stable_status',$fee_status,0,5, $idd);
            
           
           
            return response()->json([
              'status' => 1,
            ]);  
        
    }

    /*_______________________________________________________________
    |
    |  question 6 post method
    |________________________________________________________________
    */
    public function questionSixPost(Request $request)
    {
        $idd= $request->user_id;
        
        $result = question_survey::where('question_id','6')
                      ->where('user_id',$idd)
                      ->delete();




        if(!empty($request->bank_account)){              
        $ques5 = $this->saveAndUpdate('bank_name',json_encode($request->bank_account),0,6,$idd);
        }else{

        }
        return response()->json([
            'status' => 1,
        ]);  
    }
    

    /*_______________________________________________________________
    |
    |  question 7 post method
    |________________________________________________________________
    */
    public function questionSevenPost(Request $request)
    {
     
            $idd= $request->user_id;
            $moveB= $request->move_bank;
            $bage= $request->age_loan_holder;
            //dd($bage);
             $result = question_survey::where('question_id','7')->where('user_id',$idd)->delete();

                $ques5 = $this->saveAndUpdate('other_banks_benifits',$request->move_bank,0,7, $idd);

                if(!empty($bage)){
                $ques5_1 = $this->saveAndUpdate('browser_age',$request->age_loan_holder,0,7, $idd);
                }else{
                 $ques5_1 = $this->saveAndUpdate('browser_age','18',0,7, $idd);   
                }


            return response()->json([
              'status' => 1,
             
        ]);  
      
    }
 /*_______________________________________________________________
    |
    |  question 8 post method
    |________________________________________________________________
    */
    public function questionEightPost(Request $request)
    {
         $idd= $request->user_id;

      $v = \Validator::make($request->all(),[
               'why_mortgage' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','8')->where('user_id',\Auth::user()->id)->delete();

            $result = question_survey::where('question_id','10')->where('user_id',\Auth::user()->id)->delete();

            $result = question_survey::where('question_id','9')->where('user_id',\Auth::user()->id)->delete();

            //$result = question_survey::where('question_id','11')->where('user_id',\Auth::user()->id)->delete();

            $ques5 = $this->saveAndUpdate('why_mortgage',$request->why_mortgage,0,8,$idd);


        if($request->why_mortgage == 'mistaken_program'){
             $ques5 = $this->saveAndUpdate('status_of_mortgage','first_aprt',0,9,$idd); 
            
            return response()->json([
              'status' => 1,
            ]);

        }elseif($request->why_mortgage == 'any_cause'){
             $ques5 = $this->saveAndUpdate('status_of_mortgage','x',0,9,$idd); 
             $ques5 = $this->saveAndUpdate('move_to_appartment_time','0',0,10,$idd);

            return response()->json([
              'status' => 1,
            ]);

        } else{
            return response()->json([
              'status' => 1,
            ]);

          } 
      }
    }

    /*_______________________________________________________________
    |
    |  question 9 post method
    |________________________________________________________________
    */
    public function questionNinePost(Request $request)
    {
        $idd= $request->user_id;
         $result = question_survey::where('question_id','9')
                      ->where('user_id',$idd)
                      ->delete();

          $this->saveAndUpdate('status_of_mortgage',$request->status_of_mortgage,0,9,$idd);
            return response()->json([
              'status' => 1,
        ]);  
      
    }

    /*_______________________________________________________________
    |
    |  question 10 post method
    |________________________________________________________________
    */
    public function questionTenPost(Request $request)
    {
        $idd = $request->user_id;
        $result = question_survey::where('question_id','10')
                  ->where('user_id',$idd)
                  ->delete();
       $this->saveAndUpdate('Grace',$request->grace,0,10,$idd);
       $this->saveAndUpdate('Grace_req',$request->req_grace,0,10,$idd);
       
          return response()->json([
          'status' => 1,
          ]);
    }






        /*_______________________________________________________________
    |
    |  question 11_1 post method
    |________________________________________________________________
    */
    public function questionElevenOnePost(Request $request)
    {
        $idd = $request->user_id;
        

        $prop_value = $request->property_value;
        $prop_value = str_replace(",","",$prop_value);
        $self_funding = $request->self_funding;
        $self_funding = str_replace(",","",$self_funding);
        $mortgage_fee = (int)$prop_value - (int)$self_funding;
        $morg_ratio = $mortgage_fee/$prop_value * 100;
         
        $result = question_survey::where('question_id','11')->where('user_id',$idd)->delete();

        $ques5_0 = $this->saveAndUpdate('property_value',$request->property_value,111,11,$idd);
        $ques5_1 = $this->saveAndUpdate('self_funding',$request->self_funding,111,11,$idd);
        $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,111,11,$idd);
        $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,111,11,$idd);
        $ques5_4 = $this->saveAndUpdate('morg_testing1','0',111,11,$idd);

        return response()->json([
          'status' => 1,
        ]);
    }

  
    /*_______________________________________________________________
    |
    |  question 11_2 (12) post method
    |________________________________________________________________
    */
    public function questionElevenTwoPost(Request $request)
    {
        $idd = $request->user_id;

        $prop_value = $request->property_value_1;
        $prop_values = str_replace(",","",$prop_value);


        $self_funding = $request->self_funding_1;
        $self_fundings = str_replace(",","",$self_funding);


        $prop_market_value = $request->market_value;
        $prop_market_values = str_replace(",","",$prop_market_value); 


        $mortgage_fee = $prop_values - $self_fundings;

        $morg_ratio = $mortgage_fee/$prop_market_values * 100;


        $result = question_survey::where('question_id','11')->where('user_id', $idd)->delete();

        


        if($prop_market_values < $prop_values){
            return response()->json([
            'status' => 1121,
            ]); 

        }elseif($self_fundings > $prop_values){
            return response()->json([
            'status' => 1122,
            ]);     

        }else{

            $ques5 = $this->saveAndUpdate('property_value',$prop_value,112,11,$idd);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$prop_market_value,112,11,$idd);
            $ques5_2 = $this->saveAndUpdate('self_funding',$self_funding,112,11,$idd);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,112,11,$idd);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,112,11,$idd);


           return response()->json([
            'status' => 1,
            ]); 
        }



        

        

    }

    /*_______________________________________________________________
    |
    |  question 11_3 (13) post method
    |________________________________________________________________
    */
    public function questionthirteenPost(Request $request)
    {
        $idd = $request->user_id;
        $result = question_survey::where('question_id','11')->where('user_id',$idd)->delete();

        $prop_value = $request->property_value_2;
        $prop_values = str_replace(",","",$prop_value);
        $mortgage_fee = $request->mortgage_fee;
        $mortgage_fees = str_replace(",","",$mortgage_fee);
        $morg_ratio = $mortgage_fees/$prop_values * 100;

        $ques5 = $this->saveAndUpdate('property_value',$prop_value,113,11,$idd);
        $ques5_1 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,113,11,$idd);
        $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,113,11,$idd);
        $ques5_4 = $this->saveAndUpdate('morg_testing1','0',113,11,$idd);
        $ques5_5 = $this->saveAndUpdate('morg_testing2','0',113,11,$idd);

        return response()->json([
          'status' => 1,
        ]);

    }



    /*_______________________________________________________________
    |
    |  question 14 post method
    |________________________________________________________________
    */
    public function questionfourteenPost(Request $request)
    {
            
        $idd = $request->user_id;
        $result = question_survey::where('question_id','14')->where('user_id',$idd)->delete();
        

        $slider_val = (int)$request->monthly_refund_input - 4;


        $ques11 = question_survey::where('user_id',$idd)->where('question_id','11')->where('meta_key','mortgage_fee')->first();
       // dd($ques11);


        $ques11_value = $ques11->meta_value;


        $ques11_value = str_replace(",","",$ques11_value);
        //dd($ques11_value);

        $val = $request->monthly_refund_input_slide;

        //dd($val);

        $saving_calculations = ((int)$ques11_value*(int)$val)/100;


        // dd($saving_calculations);



        $ques5 = $this->saveAndUpdate('monthly_refund_input',$request->monthly_refund_input_slide,0,14,$idd);
        $ques5_1 = $this->saveAndUpdate('lower_mortgage_input',$request->monthly_refund_input,0,14,$idd);
        $ques5_2 = $this->saveAndUpdate('monthly_refund_input_slider_value',$slider_val,0,14,$idd);
        $ques5_3 = $this->saveAndUpdate('saving_calculations',$saving_calculations,0,14,$idd);

      return response()->json([
      'status' => 1,
      ]);
        
          
      
    }

    
     /*_______________________________________________________________
    |
    |  question 15 post method
    |________________________________________________________________
    */
    public function questionfifteenPost(Request $request)
    {
            $idd = $request->user_id; 
            $result = question_survey::where('question_id','15')->where('user_id',$idd)->delete();

            $ques13 = $this->saveAndUpdate('money_in_the_future',$request->ques13,0,15,$idd);
            $ques13 = $this->saveAndUpdate('investment_amount',json_encode($request->investment_amount),0,15,$idd);
            $ques13 = $this->saveAndUpdate('investment_amount_1','[null]',0,15,$idd);
            $ques13 = $this->saveAndUpdate('repay_another',json_encode($request->repay_another),0,15,$idd);
            $ques13 = $this->saveAndUpdate('redeemed','[null]',0,15,$idd);
            $ques13 = $this->saveAndUpdate('loan_balance_percentage','[null]',0,15,$idd);
            $ques13 = $this->saveAndUpdate('monthly_repayments_percentage','[null]',0,15,$idd);

            return response()->json([
              'status' => 1,
        ]);  
      
    }

     /*_______________________________________________________________
    |
    |  question 16 post method
    |________________________________________________________________
    */
    public function questionsixteenPost(Request $request)
    {
        $idd = $request->user_id; 
        $result = question_survey::where('question_id','16')->where('user_id',$idd)->delete();

        $ques13 = $this->saveAndUpdate('other_loan',$request->other_loan,0,16,$idd);
        $ques13 = $this->saveAndUpdate('loan_balance_1',json_encode($request->loan_balance_1),0,16,$idd);
        $ques13 = $this->saveAndUpdate('Month_refund',json_encode($request->Month_refund),0,16,$idd);
        $ques13 = $this->saveAndUpdate('redemmed',json_encode($request->redemmed),0,16,$idd);

        return response()->json([
            'status' => 1,
        ]);  
    }
    
         /*_______________________________________________________________
    |
    |  question 17 post method
    |________________________________________________________________
    */
    public function questionseventeenPost(Request $request)
    {
        $idd = $request->user_id;
        $result = question_survey::where('question_id','17')->where('user_id',$idd)->delete();

        $ques13 = $this->saveAndUpdate('additional_loans',$request->additional_loans,0,17,$idd);
        $ques13 = $this->saveAndUpdate('loan_balance_1_1',json_encode($request->loan_balance_1_1),0,17,$idd);
        $ques13 = $this->saveAndUpdate('loan_balance_2_1','[null]',0,17,$idd);
        $ques13 = $this->saveAndUpdate('termination_of_the_loan_1_1',json_encode($request->termination_of_the_loan_1_1),0,17,$idd);
        $ques13 = $this->saveAndUpdate('termination_of_the_loan_2_1','[null]',0,17,$idd);
        $ques13 = $this->saveAndUpdate('Month_refund_1',json_encode($request->Month_refund_1),0,17,$idd);
        $ques13 = $this->saveAndUpdate('Monthly_repayments_1','[null]',0,17,$idd);

      return response()->json([
        'status' => 1,
      ]);
    }

    /*_______________________________________________________________
    |
    |  question 18 post method
    |________________________________________________________________
    */
    public function questioneightteenPost(Request $request)
    {
        $idd = $request->user_id;
            $result = question_survey::where('question_id','18')
                      ->where('user_id',$idd)
                      ->delete();


            $a = explode("/",$request->current_marriage);
            $a_calc = $a[0];
            $a_value = $a[1];

            $b = explode("/",$request->children);
            $b_calc = $b[0];
            $b_value = $b[1];

            $c = explode("/",$request->siblings);
            $c_calc = $c[0];
            $c_value = $c[1];

            $d = $request->national_service_time;
            $e = $request->military_service_time_women;

            $sum4and5 = $d + $e;

            $total_points = $a_calc + $b_calc + $c_calc;


            switch ($total_points) {

              case $total_points >= 599 && $total_points <= 999 :
                    $elegibility_score = 54240;
                    break;

              case $total_points >= 1000 && $total_points <= 1399 :
                    $elegibility_score = 62400;
                  break;

              case $total_points >= 1400 && $total_points <= 1499 :
                    $elegibility_score = 74350;
                  break;

              case $total_points >= 1500 && $total_points <= 1599 :
                    $elegibility_score = 85250;
                  break;

              case $total_points >= 1600 && $total_points <= 1699 :
                    $elegibility_score = 96190;
                  break;

              case $total_points >= 1700 && $total_points <= 1799 :
                    $elegibility_score = 107090;
                  break;

              case $total_points >= 1800 && $total_points <= 1899 :
                    $elegibility_score = 117985;
                  break;

              case $total_points >= 1900 && $total_points <= 1999 :
                    $elegibility_score = 128930;
                  break;

              case $total_points >= 2000 && $total_points <= 2099 :
                    $elegibility_score = 139825;
                  break;

              case $total_points >= 2100 && $total_points <= 2199 :
                    $elegibility_score = 150720;
                  break;

              case $total_points >= 2200:
                    $elegibility_score = 161665;
                  break;

              default:
                     $elegibility_score = 0;
            }

           
            $army_score =  $elegibility_score*$sum4and5/100;

            $final_score = $army_score + $elegibility_score;

            $ques18 = $this->saveAndUpdate('current_marriage',$a_value,0,18,$idd);
            $ques18 = $this->saveAndUpdate('children',$b_value,0,18,$idd);
            $ques18 = $this->saveAndUpdate('siblings',$c_value,0,18,$idd);
            $ques18 = $this->saveAndUpdate('military_service_time_men',$request->national_service_time,0,18,$idd);
            $ques18 = $this->saveAndUpdate('military_service_time_women',$request->military_service_time_women,0,18,$idd);
            $ques18 = $this->saveAndUpdate('total_points',$total_points,0,18,$idd);
            $ques18 = $this->saveAndUpdate('elegibility_score',$elegibility_score,0,18,$idd);
            $ques18 = $this->saveAndUpdate('army_score',$army_score,0,18,$idd);
            $ques18 = $this->saveAndUpdate('final_elegibility_score',$final_score,0,18,$idd);

        return response()->json([
            'status' => 1,
             
        ]);  
      
    }







 public function saveAndUpdate($k,$value,$parent,$no,$userId)
    {
        $survey = new question_survey(); 
        $survey->user_id = $userId;
        $survey->meta_key = $k;
        $survey->question_id = $no;
        $survey->meta_value = $value;
        $survey->parent_id = $parent;
        $survey->save();
        return $survey->id;
    }



    public function admin_ques_six_ajax(Request $request)
    {
        $bank = $request->bank_name;

        

        $prime_deltas = Bank_interest::where('bank_name',$bank)->where('funding_type','FundingA')->first();
        //dd($prime_deltas);
       
        if(!empty($prime_deltas)){
        $prime_delta = $prime_deltas->prime_delta;
        $discount_status = $prime_deltas->discount_status;
        $discount = $prime_deltas->discount;
        //dd($discount);

        }else{
        $prime_delta = "";
        $discount_status = "2";
        $discount = "";   
        }


        if($discount_status == '1'){
            return response()->json([
                'status' => 1,
                'discount' => $discount
                 
            ]);

        }elseif($discount_status == '0'){
            return response()->json([
                'status' => 0,    
            ]);

        }else{
            return response()->json([
                'status' => 2, 
            ]);

        }

    }



    public function ajax_question_twelve(Request $request){

        $id = $request->user_id;
        $maindata_ques_6 = question_survey::where('user_id', $id)->where('question_id','6')->get();
        //dd($maindata_ques_6);
        $maindata_ques_11 = question_survey::where('user_id', $id)->where('question_id','11')->get();



    }




    public function pmt_slider_ajax(){

        $prime_deltas = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->get();


        return response()->json([
            'status' => 1, 
            'data'=>$prime_deltas
        ]);

    }


public function admin_ques_report_inte_ajax(Request $request)
    {
        $bank = $request->bank_name;
        //dd($bank);
        $funding = $request->funding_type;
        //dd($funding);
        $year = $request->year;
        //dd($year);
        $fourth = $request->fourth;
       // dd($fourth);

        $six_ques_banks = $request->six_ques_banks;

        

        $six_ques_banks =  explode(",",$six_ques_banks);
        //dd($six_ques_banks);

        $prime_deltas = Bank_interest::where('bank_name',$bank)->where('funding_type',$funding)->where('years',$year)->first();


        $prime_delt = Bank_interest::where('bank_name',$bank)->where('funding_type','FundingA')->first();
        
       
        if(!empty($prime_deltas) && !empty($prime_delt)){


        $prime_delta = $prime_deltas->prime_delta;
        $discount_status = $prime_delt->discount_status;
        $discount = $prime_delt->discount;
        $interest = $prime_deltas->$fourth;
        

        }else{
        $prime_delta = "";
        $discount_status = "2";
        $discount = "";   
        }


        if($discount_status == '1'){



            

            if (in_array($bank, $six_ques_banks))
              {
                  $interest = $interest - $discount;


                return response()->json([
                    'status' => 1,
                    'interest' => $interest
                     
                ]);


              }
            else
              {
                $interest = $interest;
                return response()->json([
                    'status' => 1,
                    'interest' => $interest
                     
                ]);
             
              }



        }elseif($discount_status == '0'){
            //dd($interest);
            return response()->json([
                'status' => 0,
                'interest' => $interest    
            ]);

        }else{
            return response()->json([
                'status' => 2,
                'interest' => "admin_ques_report_inte_ajax" 
            ]);

        }

    }




public function table_best_bank_algo(Request $request){

     return response()->json($request);


    }
}



