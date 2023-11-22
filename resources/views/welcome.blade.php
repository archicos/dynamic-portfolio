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

    <title>Archico</title>

</head>
<body class="font-sans">
    
    <!-- NAVIGATION BAR -->
    <nav class="fixed top-0 left-0 right-0 z-10 shadow-lg sm:shadow">
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
                <p>Admin Mode</p>
                <a href="/logout" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <!-- End of NAVIGATION BAR -->

    <!-- DIFF -->
    <div class="diff aspect-[16/8]">
        <div class="diff-item-1">
            <img alt="daisy" src="{{ asset('img/home/jumbo-a.jpg') }}" />
        </div>
        <div class="diff-item-2">
            <img alt="daisy" src="{{ asset('img/home/jumbo-b.jpg') }}" />
        </div>
        <div class="diff-resizer"></div>
    </div>
    <!-- End of DIFF -->

    <!-- ABOUT SECTION -->
    <div class="flex flex-col sm:flex-row gap-10 sm:px-20 px-5 py-10">
        <div class="flex flex-auto w-full sm:w-1/4 justify-center sm:justify-end items-center">
            <img class="rounded-lg" src="{{ asset('img/about/malioboro.jpg') }}" />
        </div>
        <div class="flex flex-col flex-auto w-full sm:w-3/4 pr-0 sm:pr-40 gap-4">
            <h1 class="font-bold text-xl">Archico Darius Simpar Sembiring</h1>
            <p>
                Hello, My Name is <strong>Archico</strong>. I have interest in Technologies and Creative Design. For Technology, 
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
                <button class="btn btn-info w-1/2 sm:btn-wide">Resume</button>
                <button class="btn btn-info w-1/2 sm:btn-wide">LinkedIn</button>
            </div>
        </div>
    </div>
    <!-- End of ABOUT SECTION -->

    <!-- TOOLS SECTION -->
    <section class="sm:px-20 px-5 py-10">

        <h2 class="font-bold text-2xl pb-4 text-center">Tools</h2>
        <button class="btn btn-sm btn-success mb-4">Add New +</button>

        <div class="grid grid-cols-2 gap-5 sm:gap-10">           
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-md text-center">Technology</h3>
                <div class="flex flex-row justify-between"><p class="font-semibold">C</p><p>70%</p></div>
                <progress class="progress progress-info" value="70" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">Java</p><p>70%</p></div>
                <progress class="progress progress-info" value="80" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">Javascript</p><p>80%</p></div>
                <progress class="progress progress-info" value="90" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">PHP Laravel</p><p>90%</p></div>
                <progress class="progress progress-info" value="72" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">Python</p><p>72%</p></div>
                <progress class="progress progress-info" value="40" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">Bootstrap CSS</p><p>40%</p></div>
                <progress class="progress progress-info" value="90" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">Tailwind CSS</p><p>90%</p></div>
                <progress class="progress progress-info" value="85" max="100"></progress>
                <div class="flex flex-row justify-between"><p class="font-semibold">SQL</p><p>85%</p></div>
                <progress class="progress progress-info" value="78" max="100"></progress>
                <div class="flex flex-row gap-2">
                    <button class="btn btn-sm btn-warning mb-4">Edit</button>
                    <button class="btn btn-sm btn-error mb-4">Delete</button>
                </div>
            </div>
        
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-md text-center">Creativity</h3>
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
                <div class="flex flex-row gap-2">
                    <button class="btn btn-sm btn-warning mb-4">Edit</button>
                    <button class="btn btn-sm btn-error mb-4">Delete</button>
                </div>
            </div>
        
        </div>
    </section>
    <!-- End of SKILLS SECTION -->

    <!-- SKILLS SECTION -->
    <section class="sm:px-20 px-5 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Softskill</h2>
        <button class="btn btn-sm btn-success mb-4">Add New +</button>

        <div class="flex flex-row flex-wrap gap-4 justify-center">
            @foreach ($softskillList as $softskill)

                {{-- SOFTSKILL ITEM --}}
                <div class="flex flex-col gap-4">
                    <p class="text-center">Problem Solving</p>
                    <div class="radial-progress" style="--value:88; --size:9rem; --thickness: 8px;" role="progressbar">88%</div>
                </div>

                {{-- POP UP EDIT SOFTSKILL --}}
                <dialog id="editExperiencePopUp-{{ $experience->id }}" class="modal">
                    <div class="modal-box w-11/12 max-w-5xl">
                        <h3 class="font-bold text-lg mb-2">Edit Experience</h3>
                        
                        <form action="{{ route('experiences.update', $experience->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-col">
                                <label for="title" class="label label-text">Title</label>
                                <input name="title" type="text" value="{{ $experience->title }}" placeholder="{{ $experience->title }}" class="input input-bordered mb-1" required/>
                                <label for="description" class="label label-text">Description</label>
                                <textarea name="description" class="textarea textarea-bordered mb-1" placeholder="{{ $experience->description }}" required>{{ $experience->title }}</textarea>
                                <label for="link" class="label label-text">Hyperlink</label>
                                <input name="link" type="text" value="{{ $experience->title }}" placeholder="{{ $experience->link }}" class="input input-bordered mb-1" required/>
                            </div>

                            <div class="modal-action">
                                    <!-- if there is a button, it will close the modal -->
                                <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                                <form method="dialog">
                                    <button class="btn btn-secondary">Close</button>
                                </form>
                            </div>
                    </div>
                </dialog>

                {{-- POP UP DELETE SOFTSKILL --}}
                <div id="deleteExperiencePopUp-{{ $experience->id }}" role="alert" class="alert fixed top-0 left-0 right-0 m-20 w-fit hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <div>
                        <h3 class="font-bold">Delete Confirmation!</h3>
                        <div class="text">You will delete <span class="text-error font-semibold">{{ $experience->title }}</span>. Are you sure?</div>
                    </div>
                    <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <div>
                            <button type="submit" class="btn btn-sm btn-error">Delete</button>
                        </form>
                        <a class="btn btn-sm" onclick="closeDeleteExperience({{ $experience->id }})">Cancel</a>
                    </div>
                </div>
                
                
                {{-- SCRIPT FOR SOFTSKILL --}}
                <script>
                    function popupEditExperience(dialogId) {
                        var modal = document.getElementById("editExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.showModal();
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function closeEditExperience(dialogId) {
                        var modal = document.getElementById("editExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.closeModal();
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function popupDeleteExperience(dialogId) {
                        var modal = document.getElementById("deleteExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.classList.remove('hidden');
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function closeDeleteExperience(dialogId) {
                        var modal = document.getElementById("deleteExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.classList.add('hidden');
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function confirmDelete(experienceId) {
                        var isConfirmed = confirm('Are you sure you want to delete this experience?');
                        if (isConfirmed) {
                            deleteExperience(experienceId);
                        }
                    }
                </script>
            @endforeach
        </div>
    </section>

    <!-- PROJECT SECTION -->
    <section class="sm:px-20 px-5 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Project</h2>
        <button class="btn btn-sm btn-success mb-4">Add New +</button>
        <div class="flex flex-row flex-wrap gap-4 justify-center">
            <div class="card w-max sm:w-1/5 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex flex-row gap-2">
                        <button class="btn btn-sm btn-warning mb-4">Edit</button>
                        <button class="btn btn-sm btn-error mb-4">Delete</button>
                    </div>
                    <h2 class="card-title">
                        Clicknic
                        <div class="badge badge-info">Apps</div>         
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
            <div class="card w-max sm:w-1/5 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex flex-row gap-2">
                        <button class="btn btn-sm btn-warning mb-4">Edit</button>
                        <button class="btn btn-sm btn-error mb-4">Delete</button>
                    </div>
                    <h2 class="card-title">
                        Sobat Listrik
                        <div class="badge badge-info">UI/UX</div>
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
            <div class="card w-max sm:w-1/5 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex flex-row gap-2">
                        <button class="btn btn-sm btn-warning mb-4">Edit</button>
                        <button class="btn btn-sm btn-error mb-4">Delete</button>
                    </div>
                    <h2 class="card-title">
                        Talent Review Process
                        <div class="badge badge-info">RPA</div>
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
            <div class="card w-max sm:w-1/5 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex flex-row gap-2">
                        <button class="btn btn-sm btn-warning mb-4">Edit</button>
                        <button class="btn btn-sm btn-error mb-4">Delete</button>
                    </div>
                    <h2 class="card-title">
                        Terbang Bersama Boemi
                        <div class="badge badge-info">Film</div>
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
    <!-- End of PROJECT SECTION -->

    <!-- EXPERIENCE SECTION -->
    <section class="px-5 sm:px-20 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Experience</h2>
        <button class="btn btn-sm btn-success mb-4" onclick="addExperiencePopUp.showModal()">Add New +</button>
        <div class="flex flex-col gap-4">

            @foreach ($experienceList as $experience)
            
                {{-- EXPERIENCE ITEM --}}
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                        <a href="{{$experience->link}}">{{$experience->title}}</a>
                    </div>
                    <div class="collapse-content">
                        <p>
                            {{$experience->description}}
                        </p>
                    </div>
                    <div class="flex flex-row gap-2 m-4 ">
                        <button class="btn btn-sm btn-warning w-16" onclick="popupEditExperience({{$experience->id}})">Edit</button>
                        <button class="btn btn-sm btn-error w-16" onclick="popupDeleteExperience({{ $experience->id }})">Delete</button>
                    </div>
                </div>

                {{-- POP UP EDIT EXPERIENCE --}}
                <dialog id="editExperiencePopUp-{{ $experience->id }}" class="modal">
                    <div class="modal-box w-11/12 max-w-5xl">
                        <h3 class="font-bold text-lg mb-2">Edit Experience</h3>
                        
                        <form action="{{ route('experiences.update', $experience->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-col">
                                <label for="title" class="label label-text">Title</label>
                                <input name="title" type="text" value="{{ $experience->title }}" placeholder="{{ $experience->title }}" class="input input-bordered mb-1" required/>
                                <label for="description" class="label label-text">Description</label>
                                <textarea name="description" class="textarea textarea-bordered mb-1" placeholder="{{ $experience->description }}" required>{{ $experience->title }}</textarea>
                                <label for="link" class="label label-text">Hyperlink</label>
                                <input name="link" type="text" value="{{ $experience->title }}" placeholder="{{ $experience->link }}" class="input input-bordered mb-1" required/>
                            </div>

                            <div class="modal-action">
                                    <!-- if there is a button, it will close the modal -->
                                <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                                <form method="dialog">
                                    <button class="btn btn-secondary">Close</button>
                                </form>
                            </div>
                    </div>
                </dialog>

                {{-- POP UP DELETE EXPERIENCE --}}
                <div id="deleteExperiencePopUp-{{ $experience->id }}" role="alert" class="alert fixed top-0 left-0 right-0 m-20 w-fit hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <div>
                        <h3 class="font-bold">Delete Confirmation!</h3>
                        <div class="text">You will delete <span class="text-error font-semibold">{{ $experience->title }}</span>. Are you sure?</div>
                    </div>
                    <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <div>
                            <button type="submit" class="btn btn-sm btn-error">Delete</button>
                        </form>
                        <a class="btn btn-sm" onclick="closeDeleteExperience({{ $experience->id }})">Cancel</a>
                    </div>
                </div>
                
                
                {{-- SCRIPT FOR EXPERIENCE --}}
                <script>
                    function popupEditExperience(dialogId) {
                        var modal = document.getElementById("editExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.showModal();
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function closeEditExperience(dialogId) {
                        var modal = document.getElementById("editExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.closeModal();
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function popupDeleteExperience(dialogId) {
                        var modal = document.getElementById("deleteExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.classList.remove('hidden');
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function closeDeleteExperience(dialogId) {
                        var modal = document.getElementById("deleteExperiencePopUp-" + dialogId);
                        if (modal) {
                            modal.classList.add('hidden');
                        } else {
                            console.error("Modal not found with ID: " + dialogId);
                        }
                    }

                    function confirmDelete(experienceId) {
                        var isConfirmed = confirm('Are you sure you want to delete this experience?');
                        if (isConfirmed) {
                            deleteExperience(experienceId);
                        }
                    }
                </script>

            @endforeach

        </div>

        {{-- POP UP ADD EXPERIENCE --}}
        <dialog id="addExperiencePopUp" class="modal">
            <div class="modal-box w-11/12 max-w-5xl">
                <h3 class="font-bold text-lg mb-2">Add New Experience</h3>
                
                <form action="{{ route('experiences.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col">
                        <label class="label label-text">Title</label>
                        <input name="title" type="text" placeholder="Type here..." class="input input-bordered mb-1" />
                        <label class="label label-text">Description</label>
                        <textarea name="description" class="textarea textarea-bordered mb-1" placeholder="Type here..."></textarea>
                        <label class="label label-text">Hyperlink</label>
                        <input name="link" type="text" placeholder="Type here..." class="input input-bordered mb-1" />
                    </div>

                    <div class="modal-action">
                        <form method="dialog">
                            <!-- if there is a button, it will close the modal -->
                            <button class="btn btn-primary">Save</button>
                            <button class="btn btn-secondary">Close</button>
                        </form>
                    </div>
                </form>
            </div>
        </dialog>
        
        {{-- ERROR MESSAGE --}}
        @if (count($errors) > 0)
            <div role="alert" class="alert alert-error fixed top-20 left-20 right-0 w-72">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{ $error }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (\Session::has('success'))
            <div role="alert" class="alert alert-success fixed top-20 left-20 right-0 w-72" id="successAlert">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ \Session::get('success') }}</span>
            </div>

            <script>
                var successAlert = document.getElementById('successAlert');

                setTimeout(function() {
                    successAlert.classList.add('opacity-0');
                }, 4000);
            </script>
        
        @elseif (\Session::has('error'))
            <div role="alert" class="alert alert-success fixed top-20 left-20 right-0 w-72" id="errorAlert">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ \Session::get('success') }}</span>
            </div>

            <script>
                var errorAlert = document.getElementById('errorAlert');

                setTimeout(function() {
                    errorAlert.classList.add('opacity-0');
                }, 4000);
            </script>
        @endif

        

    </section>
    <!-- End of Experience Section -->

    <!-- EDUCATION SECTION -->
    <section class="px-5 sm:px-20 py-10">
        <h2 class="font-bold text-2xl pb-4 text-center">Education</h2>

        <ul class="timeline timeline-vertical sm:timeline-horizontal justify-center">
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
    <footer class="footer footer-center p-10 bg-slate-800 text-neutral-content">
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