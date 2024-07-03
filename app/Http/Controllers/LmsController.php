<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Setting, ElementCategory, SaasCompany};
use Illuminate\Support\Facades\Cookie;
use Illuminate\Auth\Events\Registered;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmailWithPassword;
use Laravel\Sanctum\PersonalAccessToken;
use GuzzleHttp\Client;

class LmsController extends Controller
{
    public function index()
    {

        $page_data['page_title'] = 'Creative LMS';

        return view('frontend.creative_lms.home', $page_data);
    }

    public function features()
    {
        $element_categories = ElementCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/Features', [
            'element_categories' => $element_categories,
        ]);
    }

    public function pricing()
    {
        $element_categories = ElementCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/Pricing', [
            'element_categories' => $element_categories,
        ]);
    }

    public function solution_course_selling()
    {
        $element_categories = ElementCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/SolutionCourseSelling', [
            'element_categories' => $element_categories,
        ]);
    }

    public function solution_training()
    {
        $element_categories = ElementCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/SolutionTraining', [
            'element_categories' => $element_categories,
        ]);
    }

    public function demo() 
    {
        $url = url()->previous();
        $urlParts = explode('/', $url);
        $lastPartOfUrl = end($urlParts);
        
        return Inertia::render('Frontend/Lms/Demo', [
            'lastPartOfUrl' => $lastPartOfUrl,
        ]); 
    }

    public function register_company_lms(Request $request) 
    {
        die();
        if(!empty($request->all()))
        {

            if(auth()->user()) {
                $user = User::find(auth()->user()->id);
            } else {
                $this->validate($request, [
                    'email' => 'required|email',
                ]);

                $name = strstr($request->email, '@', true);

                $check_email = User::where('email', $request->email)->first();

                if(!empty($check_email)){
                    // $user = $check_email;
                    return redirect()->route('login')->with('info', 'This email already exists. Please login or provide new email address');
                } else {
                    $password = random(8);

                    $user = User::create([
                        'name' => $name,
                        'email' => $request->email,
                        'role_id' => '6',
                        'password' => Hash::make($password)
                    ]);

                    $pin = rand(100000, 999999);

                    DB::table('password_resets')
                        ->insert(
                            [
                                'email' => $request->email, 
                                'token' => $pin
                            ]
                        );

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                    // $token = $user->createToken('myapptoken')->plainTextToken;
                }
                relogin_user($user->id);
            }

            $company = $request->company_name;

            $company_check = SaasCompany::where('company_name', $company)->first();

            if(!empty($company_check)){
                // $user = $check_email;
                return redirect()->back()->with('info', 'This company name already in use. Try different name.');
            } else {

                $data = [
                    'company_name' => $company,
                    'company_slug' => company_slugify($company),
                    'admin_name' => $user->name,
                    'admin_email' => $user->email,
                    'admin_password' => $request->input('password'),
                    'action' => 'create_company'
                ];

                // Create a new Guzzle client
                $client = new Client(); 

                // Make a POST request to the API
                $response = $client->post('http://192.168.10.199/pollob/academy-laravel/api/register_company', [
                    'form_params' => $data
                ]);

                // Get the response body
                $responseBody = $response->getBody()->getContents();

                // Decode the JSON response if needed
                $responseData = json_decode($responseBody, true);

                // Print the response for debugging purposes
                // echo '<pre>';
                // print_r($responseData);
                // echo '</pre>';

                // die();

                // Check if the response status is 200
                if ($responseData['status'] == 200) 
                {
                    // $responseData = $response->json(); // Decode the JSON response

                     $data1 = SaasCompany::create([
                        'user_id' => $user->id,
                        'saas_id' => 1,
                        'company_name' => $company,
                        'company_slug' => company_slugify($company)
                    ]);

                    // Redirect to the specified URL with the company slug
                    // return redirect()->to('https://lms.creativeitem.com/' . $data1->company_slug);
                    return redirect()->back()->with('message','Company created successfully.');
                } 
                else 
                {
                    return back()->with('error', 'Failed to register the company. Please try again.');
                }
            }

        } else {
            return redirect()->back()->with('error', 'Please fill up the form first.');
        }
    }

    public function company_lms_register(Request $request)
    {
        if(!empty($request->company_name) && !empty($request->email) && !empty($request->password)) 
        {
            return $request->all();
        } else {
            return 'none';
        }
    }

    public function company_email_verify(Request $request) 
    {
        return view('frontend.creative_lms.company_email_verify');
    }
}
