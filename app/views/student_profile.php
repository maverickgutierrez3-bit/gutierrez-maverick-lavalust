<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile | Maverick Gutierrez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1b2e] text-slate-100 min-h-screen font-sans antialiased">
    <header class="border-b border-slate-800 bg-[#171b2d]">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="text-sm font-semibold tracking-wide text-slate-300">Student Portal</div>
            <nav class="flex items-center gap-2">
                <a href="<?=site_url('student/home'); ?>" class="px-3 py-2 rounded-md text-sm font-medium text-slate-300 hover:text-white">Home</a>
                <a href="<?=site_url('student/profile'); ?>" class="px-3 py-2 rounded-md text-sm font-medium text-orange-400 bg-slate-800/60 border border-slate-700">Profile</a>
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-6 py-10">
        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 shadow-lg">
            <div class="flex items-center justify-between border-b border-slate-800 pb-5 mb-6">
                <h1 class="text-2xl font-bold text-white">Student Profile</h1>
                <span class="px-3 py-1 text-xs font-semibold rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400">
                    Active Student
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Student ID</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['student_id']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Full Name</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['name']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Course</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['course']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Year Level</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['year']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Email Address</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['email']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Address / Location</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['address']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4 md:col-span-2">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Technical Skills</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['skills']); ?></p>
                </div>

                <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-4 md:col-span-2">
                    <p class="text-xs uppercase tracking-wider text-slate-400">Hobbies & Interests</p>
                    <p class="mt-2 text-base font-semibold text-slate-100"><?= htmlspecialchars($student['hobbies']); ?></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
