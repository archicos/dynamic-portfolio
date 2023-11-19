<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DAISY UI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.9/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }

            plugins: [require("daisyui")],

            // daisyUI config (optional - here are the default values)
            daisyui: {
                themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
                darkTheme: "dark", // name of one of the included themes for dark mode
                base: true, // applies background color and foreground color for root element by default
                styled: true, // include daisyUI colors and design decisions for all components
                utils: true, // adds responsive and modifier utility classes
                prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
                logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
                themeRoot: ":root", // The element that receives theme color CSS variables
            },
        }

        // add daisyUI plugin
        

        module.exports = {
            plugins: [require("@tailwindcss/typography"), require("daisyui")],
        }
        
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>

    

    <title>Archico</title>

</head>
<body class="font-sans">
    
    <!-- NAVIGATION BAR -->
    <nav>
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </label>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>About</a></li>
                        <li><a>Portfolio</a></li>
                        <li><a>Experience</a></li>
                        <li><a>Education</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost text-xl">Archico</a>
            </div>
            <div class="navbar-end">
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </button>
            </div>
        </div>
    </nav>
    <!-- End of NAVIGATION BAR -->

    <!-- DIFF -->
    <div class="diff aspect-[16/8]">
        <div class="diff-item-1">
            <img alt="daisy" src="https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg" />
        </div>
        <div class="diff-item-2">
            <img alt="daisy" src="https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg" />
        </div>
        <div class="diff-resizer"></div>
    </div>
    <!-- End of DIFF -->

    <!-- ABOUT SECTION -->
    <div class="flex gap-10 px-20 py-10">
        <div class="flex flex-auto w-1/4 justify-end items-center">
            <img class="rounded-lg" src="https://picsum.photos/250" />
        </div>
        <div class="flex flex-col flex-auto w-3/4 pr-40 gap-4">
            <h1 class="font-bold text-xl">Archico Darius Simpar Sembiring</h1>
            <p>
                Halo, My Name is <strong>Archico</strong>. I have interest in Technologies and Creative Design. For Technology, 
                I've learn about Software Engineering and Artificial Intelligence. And for Creative Design, 
                I've learn about Graphic Design, Photography, and Cinematography. 
                I often combine those two kind of my interest to became a complete unified interest. 
                I have area of interest in digital arts, both in Graphic Design and UI/UX Design. 
                I have a lot of experience in graphic design, from editing, illustrating, photography, videography. 
                And then I implemented that experience into my study of Informatics in the form of UI/UX Design 
                for developing websites and applications. I'm also on going to explore front-end and back-end developer, 
                by leading and directing a few simple projects.
            </p>
            <div class="flex flex-row gap-4">
                <button class="btn btn-wide">Resume</button>
                <button class="btn btn-wide">LinkedIn</button>
            </div>
        </div>
    </div>
    <!-- End of ABOUT SECTION -->

    <!-- TOOLS SECTION -->
    <section class="px-20 py-10 ">

        <h2 class="font-bold text-2xl pb-4">Tools</h2>

        <div class="grid grid-cols-2 gap-10">

            
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-md">Technology</h3>
                <div class="flex flex-row justify-between"><p>C</p><p>70%</p></div>
                <progress class="progress progress-primary" value="70" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Java</p><p>70%</p></div>
                <progress class="progress progress-primary" value="80" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Javascript</p><p>80%</p></div>
                <progress class="progress progress-primary" value="90" max="100"></progress>
                <div class="flex flex-row justify-between"><p>PHP Laravel</p><p>90%</p></div>
                <progress class="progress progress-primary" value="72" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Python</p><p>72%</p></div>
                <progress class="progress progress-primary" value="40" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Bootstrap CSS</p><p>40%</p></div>
                <progress class="progress progress-primary" value="90" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Tailwind CSS</p><p>90%</p></div>
                <progress class="progress progress-primary" value="85" max="100"></progress>
                <div class="flex flex-row justify-between"><p>SQL</p><p>85%</p></div>
                <progress class="progress progress-primary" value="78" max="100"></progress>
            </div>
        
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-md">Creativity</h3>
                <div class="flex flex-row justify-between"><p>Adobe Photoshop</p><p>95%</p></div>
                <progress class="progress progress-primary" value="95" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Adobe Premiere Pro</p><p>97%</p></div>
                <progress class="progress progress-primary" value="97" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Adobe Illustrator</p><p>82%</p></div>
                <progress class="progress progress-primary" value="82" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Adobe After Effect</p><p>75%</p></div>
                <progress class="progress progress-primary" value="75" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Davinci Resolve</p><p>85%</p></div>
                <progress class="progress progress-primary" value="85" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Wondershare Filmora</p><p>93%</p></div>
                <progress class="progress progress-primary" value="93" max="100"></progress>
                <div class="flex flex-row justify-between"><p>Figma</p><p>89%</p></div>
                <progress class="progress progress-primary" value="89" max="100"></progress>
                <div class="flex flex-row justify-between"><p>SketchUp</p><p>77%</p></div>
                <progress class="progress progress-primary" value="77" max="100"></progress>
            </div>
        
        </div>
    </section>
    <!-- End of SKILLS SECTION -->

    <!-- SKILLS SECTION -->
    <section class="px-20 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Softskill</h2>

        <div class="flex flex-row flex-wrap gap-4 justify-center">
            <div class="flex flex-col gap-4">
                <p class="text-center">Problem Solving</p>
                <div class="radial-progress" style="--value:88; --size:9rem; --thickness: 8px;" role="progressbar">88%</div>
            </div>
            <div class="flex flex-col gap-4">
                <p class="text-center">Leadership</p>
                <div class="radial-progress" style="--value:84; --size:9rem; --thickness: 8px;" role="progressbar">84%</div>
            </div>
            <div class="flex flex-col gap-4">
                <p class="text-center">Public Speaking</p>
                <div class="radial-progress" style="--value:80; --size:9rem; --thickness: 8px;" role="progressbar">80%</div>
            </div>
            <div class="flex flex-col gap-4">
                <p class="text-center">Communication</p>
                <div class="radial-progress" style="--value:82; --size:9rem; --thickness: 8px;" role="progressbar">82%</div>
            </div>
            <div class="flex flex-col gap-4">
                <p class="text-center">Critical Thinking</p>
                <div class="radial-progress" style="--value:90; --size:9rem; --thickness: 8px;" role="progressbar">90%</div>
            </div>
            <div class="flex flex-col gap-4">
                <p class="text-center">Bahasa Indonesia</p>
                <div class="radial-progress" style="--value:95; --size:9rem; --thickness: 8px;" role="progressbar">95%</div>
            </div>
            <div class="flex flex-col gap-4">
                <p class="text-center">English</p>
                <div class="radial-progress" style="--value:76; --size:9rem; --thickness: 8px;" role="progressbar">76%</div>
            </div>
        </div>
    </section>

    <!-- PROJECT SECTION -->
    <section class="px-20 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Project</h2>
        <div class="flex flex-row flex-wrap gap-4 justify-center">
            <div class="card w-80 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Clicknic
                        <div class="badge badge-secondary">Apps</div>
                    </h2>
                    <p>
                        A Clinic Medical Database System Management Application to manage Patient Data and Medicine Data 
                        for Doctor, Pharmacist, and Patient.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">OOP</div>
                        <div class="badge badge-outline">Java</div>
                        <div class="badge badge-outline">SQL</div>
                    </div>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Sobat Listrik
                        <div class="badge badge-secondary">UI/UX</div>
                    </h2>
                    <p>
                        An User Interface and User Excperience Design 
                        of a Mobile Application to Save Daily Electrical Energy Consumption 
                        based on Sustainable Development Goals.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Figma</div>
                        <div class="badge badge-outline">Adobe Photoshop</div>
                    </div>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Talent Review Process
                        <div class="badge badge-secondary">RPA</div>
                    </h2>
                    <p>
                        A Robot Processing Automation using IBM RPA Studio 
                        to automate Talent Reviewing Process for employee 
                        in IDStar from IFT Group
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Automation</div>
                        <div class="badge badge-outline">IBM RPA Studio</div>
                    </div>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Terbang Bersama Boemi
                        <div class="badge badge-secondary">Film</div>
                    </h2>
                    <p>
                        A Musical Theatre Drama that Fully Filmed and staged about 
                        student that struggling with family limitations and fighting 
                        for her love and her dreams.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Cinematography</div>
                        <div class="badge badge-outline">Adobe</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of BLOG SECTION -->

    <!-- EXPERIENCE SECTION -->
    <section class="px-20 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Experience</h2>
        <div class="flex flex-col gap-4">
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                        Juara Android Compose Camp, Google
                    </div>
                    <div class="collapse-content">
                        <p>
                            Successfully finished all 25 course badges for Android Development using Kotlin and Android Studio
                            by Jetpack Compose on Google Environment.
                        </p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        Google Developer Students Club
                    </div>
                    <div class="collapse-content">
                        <p>
                            Selected as a Core Team at Mobile Development Path, and successfully organized workshop, info session, google events, and finished Juara Android Compose Camp.
                        </p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        ICStar Hackathon 2023, ONE Indonesia
                    </div>
                    <div class="collapse-content">
                        <p>
                            <ul>
                                <li>- Become a team from all of the nation that selected, trained, and assigned to complete use case of collaborated company from IDStar, IFT Group Indonesia.</li>
                                <li>- Successfully built Robot Processing Automation for Talent Review Process for StarConnect website using IBM RPA Studio, and presented to CEO of ONE Indonesia and executive of IFT Group Indonesia.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        Department of Communication and Information
                    </div>
                    <div class="collapse-content">
                        <p>
                            <ul>
                                <li>- Head of Department, manages 4 divisions: Publication, Documentation, Design, Information System.</li>
                                <li>- Chief Executive of Short Movie Competition. Lead a Short Movie Competition with theme 'What If?' with total grand prizes of Rp.2.000.000. Successfully got 3 winners from 8 movies.</li>
                                <li>- Coordinator of Multimedia on Photography Contest. Handle multimedia on contest with total grand prize of Rp.1.000.000. Successfully got 3 winners from 58 contestants.</li>
                                <li>- Division of Design. Create social media template, greeting post, twibbon, poster, and recap post.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        Lecturer Assistant of Basic Programming 
                    </div>
                    <div class="collapse-content">
                        <p>
                            Grade of Basic Programming Courses for Informatics students increased by around 20% from the    previous year, especially in implementation.
                        </p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        Assistant of Matriculation
                    </div>
                    <div class="collapse-content">
                        <ul>
                            <li>- Leading around 450+ new students in operating the tech support provided by the campus, and students successfully operating campus mailing, campus information systems, and campus courses.</li>
                            <li>- Equip new students with basic knowledge needed before entering college, and students can successfully master the basic of C Programming, Basic of Photoshop, Basic of Microsoft Office.</li>
                        </ul>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        Student Orientation Program and Student Leadership Program
                    </div>
                    <div class="collapse-content">
                        <p>
                            Lead around 450+ new students to recognize a disciplined and integrity boarding life by teaching table manners, time management, and ethics code. Students become able to manage busy schedule well, greet everyone they meet, and eat with manners, after almost 2 years of studying from home due to pandemic.
                        </p>
                    </div>
                </div>
        </div>
    </section>
    <!-- End of Experience Section -->

    <!-- EDUCATION SECTION -->
    <section class=" px-20 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Education</h2>

        <ul class="timeline timeline-horizontal justify-center">
            <li>
                <div class="timeline-start">2008</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">PAUD MDC</div>
                <hr />
            </li>
            <li>
                <hr />
                <div class="timeline-start">2009</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">SD SW GKPS 1</div>
                <hr />
            </li>
            <li>
                <hr />
                <div class="timeline-start">2015</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">SMP RK Bintang Timur</div>
                <hr />
            </li>
            <li>
                <hr />
                <div class="timeline-start">2018</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">SMA RK Budi Mulia</div>
                <hr />
            </li>
            <li>
                <hr />
                <div class="timeline-start">2021</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">Institut Teknologi Del</div>
            </li>
        </ul>
    </section>
    <!-- End of Education Section -->

    <!-- FOOTER SECTION -->
    <footer class="footer footer-center p-10 bg-primary text-primary-content">
        <aside>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                clip-rule="evenodd" class="inline-block fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p class="font-bold">
                Archico<br />Informatics Students
            </p>
            <p>Copyright © 2023 - All right reserved</p>
        </aside>
        <nav>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </nav>
    </footer>

</body>
</html>