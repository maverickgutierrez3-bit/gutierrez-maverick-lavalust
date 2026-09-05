<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Gutierrez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1b2e] text-slate-100 min-h-screen font-sans antialiased">
    <header class="border-b border-slate-800 bg-[#171b2d]">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="text-sm font-semibold tracking-wide text-slate-300">Student Portal</div>
            <nav class="flex items-center gap-2">
                <a href="<?=site_url('student/home'); ?>" class="px-3 py-2 rounded-md text-sm font-medium text-orange-400 bg-slate-800/60 border border-slate-700">Home</a>
                <a href="<?=site_url('student/profile'); ?>" class="px-3 py-2 rounded-md text-sm font-medium text-slate-300 hover:text-white">Profile</a>
            </nav>
        </div>
    </header>

    <main class="min-h-[calc(100vh-77px)] flex items-center justify-center text-center px-6">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold text-orange-500 leading-tight">Welcome to My Student Page</h1>
            <p class="mt-5 text-lg text-slate-300">
                This is the home page for Maverick Gutierrez.
            </p>
            <div class="mt-6 text-blue-400 text-base font-medium">
                <a href="<?=site_url('student/home'); ?>" class="hover:text-blue-300">Home</a>
                <span class="mx-3 text-slate-500">|</span>
                <a href="<?=site_url('student/profile'); ?>" class="hover:text-blue-300">Student Profile</a>
            </div>
        </div>
    </main>
</body>
</html>