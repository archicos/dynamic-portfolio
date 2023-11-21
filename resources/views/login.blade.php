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
                <div class="form-control w-96">
                    <label class="label">Username</label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full" />
                    <label class="label">Password</label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full" />
                </div>
                <div class="divider"></div>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary w-full">Login</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>