<?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;
        use App\Models\UsersClient;
        class RegisterController extends Controller
        {
            //
            // public function for showing the form register
            public function showForm()
            {
                return view('Auth.register');
            }

            // public function process the form register
            public function RegsFrm(Request $request)
            {
                $request->validate([
                    'username' => 'required|string|max:100',
                    'email' => 'required|email|max:100|unique:users_client,email',
                    'password' => 'required|string|min:8',

                    // 'NameUser' => 'required|string|max:100|unique:users_client',
                    // 'EmailUser' => 'required|email|max:100|unique:users_client,email',
                    // 'password' => 'required|string|min:8',
                ]);

                // Create a new user
            UsersClient::create([
                'username'=> $request->username,
                'email'=> $request->email,
                'password' => bcrypt($request->password), // Hash the password

                // 'NameUser'=> $request->username,
                // 'EmailUser'=> $request->email,
                // 'password' => bcrypt($request->password), // Hash the password
            ]);
                //return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
            }

        }
