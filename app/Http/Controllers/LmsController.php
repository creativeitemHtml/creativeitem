<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmailWithPassword;
use App\Models\ElementCategory;
use App\Models\PricingPackage;
use App\Models\SaasCompany;
use App\Models\SaasSubscription;
use App\Models\Setting;
use App\Models\User;use DB;use GuzzleHttp\Client;use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Laravel\Sanctum\PersonalAccessToken;
use mysqli;
use PDO;

class LmsController extends Controller
{
    public function index()
    {

        $page_data['page_title'] = 'Creative LMS';

        return view('frontend.creative_lms.home', $page_data);
    }

    public function features()
    {
        $element_categories = ElementCategory::where('parent_id', null)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/Features', [
            'element_categories' => $element_categories,
        ]);
    }

    public function pricing()
    {
        $element_categories = ElementCategory::where('parent_id', null)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/Pricing', [
            'element_categories' => $element_categories,
        ]);
    }

    public function solution_course_selling()
    {
        $element_categories = ElementCategory::where('parent_id', null)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/SolutionCourseSelling', [
            'element_categories' => $element_categories,
        ]);
    }

    public function solution_training()
    {
        $element_categories = ElementCategory::where('parent_id', null)->orderBy('order', 'asc')->get();

        return Inertia::render('Frontend/Lms/SolutionTraining', [
            'element_categories' => $element_categories,
        ]);
    }

    public function demo()
    {
        $url           = url()->previous();
        $urlParts      = explode('/', $url);
        $lastPartOfUrl = end($urlParts);

        return Inertia::render('Frontend/Lms/Demo', [
            'lastPartOfUrl' => $lastPartOfUrl,
        ]);
    }

    public function register_company_lms(Request $request)
    {
        die();
        if (! empty($request->all())) {

            if (auth()->user()) {
                $user = User::find(auth()->user()->id);
            } else {
                $this->validate($request, [
                    'email' => 'required|email',
                ]);

                $name = strstr($request->email, '@', true);

                $check_email = User::where('email', $request->email)->first();

                if (! empty($check_email)) {
                    // $user = $check_email;
                    return redirect()->route('login')->with('info', 'This email already exists. Please login or provide new email address');
                } else {
                    $password = random(8);

                    $user = User::create([
                        'name'     => $name,
                        'email'    => $request->email,
                        'role_id'  => '6',
                        'password' => Hash::make($password),
                    ]);

                    $pin = rand(10000, 99999);

                    DB::table('password_resets')
                        ->insert(
                            [
                                'email' => $request->email,
                                'token' => $pin,
                            ]
                        );

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                    // $token = $user->createToken('myapptoken')->plainTextToken;
                }
                relogin_user($user->id);
            }

            $company = $request->company_name;

            $company_check = SaasCompany::where('company_name', $company)->first();

            if (! empty($company_check)) {
                // $user = $check_email;
                return redirect()->back()->with('info', 'This company name already in use. Try different name.');
            } else {

                $data = [
                    'company_name'   => $company,
                    'company_slug'   => company_slugify($company),
                    'admin_name'     => $user->name,
                    'admin_email'    => $user->email,
                    'admin_password' => $request->input('password'),
                    'action'         => 'create_company',
                ];

                // Create a new Guzzle client
                $client = new Client();

                // Make a POST request to the API
                $response = $client->post('http://192.168.10.199/pollob/academy-laravel/api/register_company', [
                    'form_params' => $data,
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
                if ($responseData['status'] == 200) {
                    // $responseData = $response->json(); // Decode the JSON response

                    $data1 = SaasCompany::create([
                        'user_id'      => $user->id,
                        'saas_id'      => 1,
                        'company_name' => $company,
                        'company_slug' => company_slugify($company),
                    ]);

                    // Redirect to the specified URL with the company slug
                    // return redirect()->to('https://lms.creativeitem.com/' . $data1->company_slug);
                    return redirect()->back()->with('message', 'Company created successfully.');
                } else {
                    return back()->with('error', 'Failed to register the company. Please try again.');
                }
            }

        } else {
            return redirect()->back()->with('error', 'Please fill up the form first.');
        }
    }

    public function company_lms_register(Request $request)
    {
        if (! empty($request->company_name) && ! empty($request->email) && ! empty($request->password)) {

            if (auth()->user()) {
                $user = User::find(auth()->user()->id);

                $check_verification = auth()->user()->email_verified_at;

                if (is_null($check_verification)) {

                    $passwordReset = DB::table('password_resets')
                        ->where('email', $request->email)
                        ->first();

                    if (empty($passwordReset)) {

                        $pin = rand(10000, 99999);

                        DB::table('password_resets')
                            ->insert(
                                [
                                    'email' => $request->email,
                                    'token' => $pin,
                                ]
                            );

                        Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $request->password));
                    } else {
                        Mail::to($request->email)->send(new VerifyEmailWithPassword($passwordReset->token, $user, $request->password));
                    }

                }

            } else {
                // Define a stricter regex pattern for email validation
                $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

                // Use the regex pattern in the validator
                $validator = Validator::make($request->all(), [
                    'email' => ['required', 'regex:' . $emailRegex],
                ]);

                if ($validator->fails()) {
                    // Get the error messages as a string
                    $errorMessages = $validator->messages()->all();
                    $errorString   = implode(' ', $errorMessages);

                    // Pass the error messages to the session
                    $response = [
                        'status'  => '500',
                        'message' => 'Check your email Address',
                    ];

                    $response = json_encode($response);

                    return $response;
                }

                $name = strstr($request->email, '@', true);

                $check_email = User::where('email', $request->email)->first();

                if (! empty($check_email)) {
                    // $user = $check_email;
                    return redirect()->route('login')->with('info', 'This email already exists. Please login or provide new email address');
                } else {
                    $password = random(8);

                    $user = User::create([
                        'name'     => $name,
                        'email'    => $request->email,
                        'role_id'  => '6',
                        'password' => Hash::make($password),
                    ]);

                    $pin = rand(10000, 99999);

                    DB::table('password_resets')
                        ->insert(
                            [
                                'email' => $request->email,
                                'token' => $pin,
                            ]
                        );

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                    // $token = $user->createToken('myapptoken')->plainTextToken;
                }
                relogin_user($user->id);
            }

            $company = $request->company_name;

            $company_check = SaasCompany::where('company_name', $company)->first();

            if (! empty($company_check)) {

                header('Content-Type: application/json');

                $response = [
                    'status'  => '500',
                    'message' => 'This company name already in use. Try different name',
                ];

                $response = json_encode($response);

                return $response;
            } else {

                $company_data = [
                    'admin_name'     => $user->name,
                    'admin_email'    => $user->email,
                    'admin_password' => $request->password,
                    'company_name'   => $company,
                    'user_id'        => $user->id,
                ];

                $company_data = json_encode($company_data);

                $data = $this->create_db($company_data);

                $data1 = json_decode($data, true);

                if (is_array($data1) && $data1['status'] == 200) {

                    $check_verification = auth()->user()->email_verified_at;

                    if (is_null($check_verification)) {
                        return view('frontend.creative_lms.company_email_verify');
                    } else {
                        return view('frontend.creative_lms.company_create_success');
                    }

                    // Step 4: Set the appropriate header
                    header('Content-Type: application/json');

                    return $data;

                } else {
                    // Step 4: Set the appropriate header
                    header('Content-Type: application/json');

                    $response = [
                        'status'  => '500',
                        'message' => 'Failed to create company',
                    ];

                    $response = json_encode($response);

                    return $response;
                }
            }

        } else {

            header('Content-Type: application/json');

            $response = [
                'status'  => '500',
                'message' => 'Failed to create company',
            ];

            $response = json_encode($response);

            return $response;
        }
    }

    public function company_email_verify(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'verification_code' => 'required|digits:5',
        ]);

        $verificationCode = $request->input('verification_code');
        $userEmail        = Auth::user()->email; // Assuming the user is logged in

        // Check the code from the password_resets table
        $passwordResetEntry = DB::table('password_resets')->where([
            ['email', $userEmail],
        ]);

        if ($passwordResetEntry->exists()) {

            $passwordResetEntry->delete();

            // Update the email_verified_at column in the users table
            DB::table('users')
                ->where('email', $userEmail)
                ->update(['email_verified_at' => now()]);

            // Return the success view
            return view('frontend.creative_lms.company_create_success');
        } else {
            // Return an error response if the code is incorrect
            return response()->json(['message' => 'Invalid verification code.'], 400);
        }

    }

    //Database create

    public function create_db($company_data)
    {

        // Root Database credentials
        $servername = "localhost";
        $username   = "root";
        $password   = "";

        // New DB name
        $dbname = 'ctmacademy_saas_' . random(9);

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database
        $sql = "CREATE DATABASE $dbname";
        if ($conn->query($sql) === true) {
            // echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        // SQL statements to grant privileges and flush privileges
        // This is cpanel phpmyadmin root user name: cpses_ctt4t58hgx
        $sql1 = "GRANT ALL PRIVILEGES ON $dbname.* TO '$username'@'localhost'";
        // Execute SQL statements
        if ($conn->query($sql1) === true) {
            // echo "Privileges granted successfully<br>";
        } else {
            echo "Error granting privileges: " . $conn->error;
        }

        $sql2 = "FLUSH PRIVILEGES";
        if ($conn->query($sql2) === true) {
            // echo "Privileges flushed successfully<br>";
            return $this->create_blank_sql($dbname, $username, $password, $servername, $company_data);
        } else {
            echo "Error flushing privileges: " . $conn->error;
        }

        // Close connection
        $conn->close();

    }

    public function create_blank_sql($db_name, $db_user, $db_pass, $db_host, $company_data)
    {

        // Create a new PDO instance
        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }

        // Path to the SQL file
        $sqlFilePath = 'public/assets/install.sql';

        // Read the file into an array of lines
        $lines = file($sqlFilePath);

        // Initialize templine variable
        $templine = '';

        // Loop through each line
        foreach ($lines as $line) {
            // Skip it if it's a comment
            if (substr(trim($line), 0, 2) == '--' || $line == '') {
                continue;
            }

            // Add this line to the current templine we are creating
            $templine .= $line;

            // If it has a semicolon at the end, it's the end of the query, so can process this templine
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                try {
                    $pdo->exec($templine);
                    // Reset temp variable to empty
                    $templine = '';
                } catch (PDOException $e) {
                    echo "Error executing query: " . $e->getMessage();
                }
            }
        }

        return $this->insert_db_config($db_name, $db_user, $db_pass, $db_host, $company_data);

    }

    public function insert_db_config($db_name, $db_user, $db_pass, $db_host, $company_data)
    {

        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }

        $admin = json_decode($company_data, true);

        // Sample data (in a real scenario, this would come from a form or another source)
        $data = [
            'admin_name'     => $admin['admin_name'],
            'admin_email'    => $admin['admin_email'],
            'admin_password' => $admin['admin_password'],
            'admin_address'  => '123 Admin St',
            'admin_phone'    => '123-456-7890',
        ];

        // Admin data
        $admin_data = [
            'name'              => $data['admin_name'],
            'email'             => $data['admin_email'],
            'status'            => 1,
            'skills'            => json_encode([]),
            'password'          => password_hash($data['admin_password'], PASSWORD_BCRYPT),
            'role'              => 'admin',
            'address'           => $data['admin_address'],
            'phone'             => $data['admin_phone'],
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at'        => date('Y-m-d H:i:s')
        ];

        // Insert data into database
        try {
            $sql = "INSERT INTO users (name, email, status, skills, password, role, address, phone, email_verified_at, created_at)
                    VALUES (:name, :email, :status, :skills, :password, :role, :address, :phone, :email_verified_at, :created_at)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($admin_data);

            return $this->insert_db_config_to_main_db($db_name, $company_data);

            // return json_encode($response);
        } catch (PDOException $e) {
            echo "Error inserting data: " . $e->getMessage();
        }

        // return json_encode($response);

    }

    public function insert_db_config_to_main_db($db_name, $company_data)
    {

        $company_data = json_decode($company_data, true);

        // Ensure slugify method is accessible
        $company_slug = company_slugify($company_data['company_name']);

        $companyInfo = SaasCompany::create([
            'user_id'      => $company_data['user_id'],
            'saas_id'      => 1,
            'company_name' => $company_data['company_name'],
            'company_slug' => $company_slug,
            'db_name'      => $db_name,
        ]);

        if (! empty($companyInfo)) {

            $response = array(
                'status'  => '200',
                'message' => 'Company created successfully',
            );

            return json_encode($response);

        } else {

            $response = array(
                'status'  => '500',
                'message' => 'Failed to create company!',
            );

            return json_encode($response);
        }

    }

    public function check_subscription($email, $product)
    {
        $user = User::where('email', $email)->first();
        if (! $user) {
            return response()->json([
                'err' => 'User not found',
            ]);
        }

        $subscription = SaasSubscription::where('user_id', $user->id)
            ->whereHas('package', function ($query) use ($product) {
                $query->where('product_id', $product);
            })
            ->with('package', 'user')
            ->first();

        if ($subscription) {
            return response()->json([
                'data' => [
                    'subscription_info' => $subscription,
                ],
            ]);
        } else {
            $starter = PricingPackage::where('type', 'starter')->where('product_id', $product)->first();
            return response()->json([
                'data' => [
                    'package_info' => $starter,
                ],
            ]);
        }
    }
}
