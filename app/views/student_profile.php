<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile | Maverick Gutierrez</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen font-sans antialiased flex flex-col justify-between">

    <!-- Top Navigation -->
    <header class="sticky top-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
               </div>
            <nav class="flex space-x-2">
                <a href="<?=site_url('student/home');?>" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-slate-800/50 transition">Home</a>
                <a href="<?=site_url('student/profile');?>" class="px-4 py-2 rounded-lg text-sm font-semibold text-white bg-slate-800 border border-slate-700 transition">Profile</a>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="max-w-4xl mx-auto px-6 py-10 w-full flex-grow">
        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 shadow-2xl backdrop-blur-xl relative overflow-hidden">
            <!-- Glow effect -->
            <div class="absolute -top-12 -left-12 w-48 h-48 bg-orange-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="flex justify-between items-center border-b border-slate-800 pb-6 mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-white tracking-tight">Student Profile</h1>
                   </div>
                <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 text-xs font-semibold rounded-full flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Active Student
                </span>
            </div>

            <!-- Profile Data Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Student ID</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['student_id']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Full Name</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['name']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Course</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['course']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Year Level</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['year']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Email Address</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['email']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Address / Location</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['address']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Technical Skills</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['skills']); ?></p>
                </div>

                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800/80">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Hobbies & Interests</span>
                    <p class="text-slate-100 font-semibold text-base"><?= htmlspecialchars($student['hobbies']); ?></p>
                </div>

            </div>
        </div>
    </main>
</body>
</html>