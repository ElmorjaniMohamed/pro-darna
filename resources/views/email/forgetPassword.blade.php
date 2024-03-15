<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Email</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-[linear-gradient(225deg,rgba(239,18,98,1)_0%,rgba(67,97,238,1)_100%)] p-5 lg:inline-flex lg:max-w-[835px] xl:-ms-28 ltr:xl:skew-x-[14deg] rtl:xl:skew-x-[-14deg]">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white shadow-md rounded-md p-8 max-w-md w-full">
            <h1 class="text-3xl  text-gray-900 font-bold mb-6 text-center">Forget Password Email</h1>
            <p class="text-lg text-gray-700 mb-8 text-center">You can reset password from below link:</p>
            <div class="flex justify-center">
                <a href="{{ route('reset.password.get', $token) }}" class="btn btn-gradient border-0 uppercase text-white font-semibold py-2 px-4 rounded-lg">Reset Password</a>
            </div>
        </div>
    </div>
</body>
</html>
