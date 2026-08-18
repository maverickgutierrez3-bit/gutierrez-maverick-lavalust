<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Maverick Gutierrez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-zinc-100 min-h-screen flex flex-col justify-between font-sans">

    <!-- Top Bar -->
    <header class="bg-zinc-950 border-b border-zinc-800 shadow-md">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
              </div>
            <nav class="space-x-4 text-sm font-semibold">
                <a href="<?=site_url('student/home');?>" class="text-orange-500 hover:text-orange-400 transition">Home</a>
                <a href="<?=site_url('student/profile');?>" class="text-zinc-400 hover:text-orange-500 transition">Profile</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="max-w-4xl mx-auto px-6 py-10 w-full flex-grow">
        <div class="bg-zinc-950 rounded-xl shadow-lg border border-zinc-800 p-8">
            <h1 class="text-2xl font-bold text-white mb-2">Welcome to my Student Page</h1>
            <p class="text-zinc-400">This is the main page for Maverick Gutierrez's .</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-zinc-950 border-t border-zinc-900 py-4 text-center text-xs text-zinc-500">
        &copy; <?= date('Y'); ?> Student Portal &bull; LavaLust Framework
    </footer>

</body>
</html>