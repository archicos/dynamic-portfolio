<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DAISY UI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.9/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>
<body>
    <div class="w-screen h-screen flex justify-center items-center bg-base-200">

        

        <div class="card bg-base-100 shadow-xl h-fit items-center">
            <div class="card-body">
                <h2 class="card-title">Login</h2>
                @if (Session::has('status'))    
                    <p class="text-error">
                        {{ Session::get('message') }}
                    </p>
                @endif
                <form method="POST" action="{{ route('authenticating') }}">
                    @csrf
                    <div class="form-control w-96">
                    <label for="username" class="label">Username</label>
                    <input name="username" type="text" placeholder="Type here" id="username" class="input input-bordered w-full" required/>
                    <label for="password" class="label">Password</label>
                    <input name="password" type="password" placeholder="Type here" id="password" class="input input-bordered w-full" required/>
                </div>
                <div class="divider"></div>
                <div class="form-action">
                    <button type="submit" class="btn btn-primary w-full">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>