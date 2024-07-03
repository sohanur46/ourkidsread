<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Mail\Volunteer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use DB;



class VolunteerController extends Controller

{

    public function submit(Request $request)

    {

        $first_name = $request->firstname;

        $last_name = $request->lastname;

        $email = $request->email;
        
        $subject = $request->subject;
        
        // $message = $request->message;
        
        $v_buddy = $request->v_buddy == "1" ? true : false;
        
        // var_dump($v_buddy); die();
        
        $v_accounting = $request->v_accounting == "1" ? true : false;

        $v_legal = $request->v_legal == "1" ? true: false;

        $v_fundraising = $request->v_fundraising == "1" ? true : false;

        $v_crm = $request->v_crm == "1" ? true : false;
        
        $v_project_management = $request->v_project_management == "1" ? true : false;
        
        $v_general = $request->v_general == "1" ? true : false;

        $v_social_media = $request->v_social_media == "1" ? true : false;

        $v_programmer = $request->v_programmer == "1" ? true : false;

        $v_book_advisory = $request->v_book_advisory == "1" ? true : false;
        
        $v_it_technical = $request -> v_it_technical == "1" ? true : false;
        
        $v_marketing = $request -> v_marketing == "1" ? true : false;

        

        DB::table('tbl_volunteer')->insert([

            'volunteer_name_first'=>$first_name,

            'volunteer_name_last'=>$last_name,

            'volunteer_email'=>$email,
            
            // 'message'=>$message,

            'volunteer_buddy'=>$v_buddy,
            
            'volunteer_accounting'=>$v_accounting,
            
            'volunteer_legal'=>$v_legal,
            
            'volunteer_fundraising'=>$v_fundraising,
            
            'volunteer_crm'=>$v_crm,
            
            'volunteer_project_management'=>$v_project_management,
            
            'volunteer_general'=>$v_general,
            
            'volunteer_social_media' => $v_social_media,
    
            'volunteer_programmer' => $v_programmer,
    
            'volunteer_book_advisory' => $v_book_advisory,
            
            'volunteer_it_technical' => $v_it_technical,
            
            'volunteer_marketing' => $v_marketing,

            ]);
            try {
                Mail::to($email)->send(new Volunteer($first_name,$last_name,now()));
            } catch (\Exception $e) {
                return redirect()->back();
            }
            // return redirect()->back();
            return redirect()->back()->with('alert', 'Thank you for choosing to volunteer with Our Kids Read! We rely on our volunteers for the majority of our programming and infrastructure support. A member of our staff will be in touch with you within the next business day.');
            

    }

    

    public function volunteer(Request $request)

    {

        $first_name = $request->name_first;

        $last_name = $request->name_last;

        $email = $request->email;

        $city = $request->city;

        $state = $request->state;

        $zip = $request->zip;

        $phone_cell = $request->phone_cell;

        $service = $request->service;

        $comments = $request->comments;

        

        DB::table('tbl_vilunteer')->insert([

            

            'first_name'=>$first_name,

            'last_name'=>$last_name,

            'email'=>$email,

            'city'=>$city,

            'state'=>$state,

            'zip'=>$zip,

            'phone_cell'=>$phone_cell,

            'service'=>$service,

            'comments'=>$comments

            ]);

            

            return redirect()->back();

        

    }


    public function displayError(Request $request)
    {
         $error = $request->query('error');
    $email = $request->query('email');
         $data1['name'] = '';
        $data1['email'] = $request->query('email');
        $data1['password'] = '';
        $data1['user_name_first'] = '';
        $data1['user_name_last'] = '';
        $data1['user_profile_address_zip'] = '';
        $data1['okr_student'] = '';

        $error = "Login Failed! Please Check Your Credentials";
        return view('pages.reading_buddies', compact('error','data1'));
    }

    // public function our_kids_register(Request $request){
    //     $select_type = $request->okr_student;
    //     $fname = $request->fname;
    //     $lname = $request->lname;
    //     $email = $request->email;
    //     $password = $request->password;
    //     $cpassword = $request->cpassword;
    //     $zip = $request->zip;
    // }


    

public function our_kids_register(Request $request,User $userModel)
{

    error_reporting(0);
    if ($request->isMethod('get')) {
         return view('pages.reading_buddies');
    }else{

    $allFieldsFilled = true;

$fieldsToCheck = ['fname', 'lname', 'email', 'password', 'cpassword', 'zip'];

foreach ($fieldsToCheck as $field) {
    if (!$request->filled($field)) {
        $allFieldsFilled = false;
        break;
    }
}

    if ($allFieldsFilled) {
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');


        $item_types =  $userModel->getItemByTypeName('tbl_item_type');
        

        $data1['item_type_id'] = $item_types[0]['item_type_id'];

        $data1['name'] = $request->input('fname') . '' . $request->input('lname');
        $data1['email'] = $request->input('email');
        $data1['password'] = $request->input('password');
        $data1['user_name_first'] = $request->input('fname');
        $data1['user_name_last'] = $request->input('lname');

        
        
        $email_exists = $userModel->checkEmailExists($data1['email']);

        if ($email_exists) {
            $data1['name'] = $request->input('fname') . '' . $request->input('lname');
        $data1['email'] = $request->input('email');
        $data1['password'] = $request->input('password');
        $data1['user_name_first'] = $request->input('fname');
        $data1['user_name_last'] = $request->input('lname');
        $data1['user_profile_address_zip'] = $request->input('zip');
        $data1['okr_student'] = $request->input('okr_student');

             return view('pages.reading_buddies', [
        'error_message_email' => 'Email already exists!',
        'data1' => $data1,
    ]);
        }

        
        $last_id = $userModel->storedata($data1, 'tbl_user');

        
        $item_types_profile = $userModel->getItemTypesProfile('tbl_item_type');

        if ($last_id) {
            $data['item_type_id'] = $item_types_profile[0]['item_type_id'];
            $data['user_profile_id'] = $last_id;
            $data['user_profile_address_zip'] = $request->input('zip');
            $data['employer_id'] = 0;
            $data['user_other_activities']='';
            $data['video_1_completed']= 0;
            $data['video_2_completed']= 0;
            $data['video_3_completed']= 0;
            $data['video_4_completed']= 0;
            $data['user_think']= '';
            $data['vdo_check'] = '';

           
            $item_types_profile = $userModel->storedata($data, 'tbl_user_profile');

           
            $data2['item_type_id'] = $item_types_profile[0]['item_type_id'];
            $data2['user_id'] = $last_id;
            $data2['item_id'] = $last_id;

            $userModel->storedata($data2, 'tbl_item_user');

            
            $student = $request->input('okr_student');
            $item_user_type = $userModel->getItemUserType('tbl_item_type');

            $data2['item_type_id'] = $item_user_type[0]['item_type_id'];
            $data2['user_id'] = $last_id;
            $data2['item_id'] = $student;
            
            $userModel->storedata($data2, 'tbl_item_user');

            $data3['user_profile_id'] = $last_id;
            $data3['complete_onboarding_process'] = '';
            $data3['signature'] = '';
           $userModel->storedata($data3, 'tbl_complete_profile');
        }

        session()->flash('flash_msg_type', 'success');
        session()->flash('flash_msg_text', 'Successfully registered');

        // Login the user
        //$user_data = $userModel->loginCredentials('tbl_user',$data1['email'], $data1['password']);


        $credentials = [
                'email' => $data1['email'],
                'password' => $data1['password'],
            ];

		$externalLink = 'https://ourkidsreadinc.org/our_kids/ourkids_login?uid='.$last_id;

    // Redirect to the external link
    return Redirect::away($externalLink);

    // Send a POST request to the CodeIgniter controller
    $response = Http::post('https://www.ourkidsread.org/our_kids/static_page/portal/handleLogin', $credentials);

    
    $responseData = $response->json(); 

    

    
    return response()->json(['message' => 'Data sent successfully']);

        // if ($user_data) {
        //     session(['user_id' => $user_data['user_id'], 'email' => $user_data['email']]);

            
        //  $userId = $user_data['user_id'];

        //     $items = DB::table('tbl_item_user')
        //         ->select('*')
        //         ->where('user_id', $userId)
        //         ->where('item_type_id', 12)
        //         ->get();

        //     if ($items) {
        //         $firstRow = $items[0];
        //         $item_id = $firstRow->item_id;

        //         if ($item_id == 1) {
        //             return redirect('https://www.ourkidsread.org/our_kids/student_access/student/dashboard');
        //         }
        //     }

        //     return redirect()->route('static_page.portal.dashboard');
        // }

        //return redirect()->route('reading-buddies')->with('success', 'User registered successfully');


    }
    //return view('pages.reading_buddies', ['error_message' => 'All fields are required']);
}
}

}