<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/black.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="{{ asset('css/userpage.css') }}">


</head>

<body>

    <div class="wrapper hover_collapse">

        <div class="top_navbar">


            <div class="menu">
                <div class="hamburger">

                </div>
            </div>

        </div>
        <div class="sidebar">
            <div class="sidebar_inner">
                <ul>
                    <li>
                        <a href="{{ route('userpage') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path
                                        d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                    <path
                                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                                </svg></span>
                            <span class="text">Your page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mainpage') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-dpad-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 0A1.5 1.5 0 0 0 5 1.5v3a.5.5 0 0 1-.5.5h-3A1.5 1.5 0 0 0 0 6.5v3A1.5 1.5 0 0 0 1.5 11h3a.5.5 0 0 1 .5.5v3A1.5 1.5 0 0 0 6.5 16h3a1.5 1.5 0 0 0 1.5-1.5v-3a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 0 16 9.5v-3A1.5 1.5 0 0 0 14.5 5h-3a.5.5 0 0 1-.5-.5v-3A1.5 1.5 0 0 0 9.5 0zm1.288 2.34a.25.25 0 0 1 .424 0l.799 1.278A.25.25 0 0 1 8.799 4H7.201a.25.25 0 0 1-.212-.382zm0 11.32-.799-1.277A.25.25 0 0 1 7.201 12H8.8a.25.25 0 0 1 .212.383l-.799 1.278a.25.25 0 0 1-.424 0Zm-4.17-4.65-1.279-.798a.25.25 0 0 1 0-.424l1.279-.799A.25.25 0 0 1 4 7.201V8.8a.25.25 0 0 1-.382.212Zm10.043-.798-1.278.799A.25.25 0 0 1 12 8.799V7.2a.25.25 0 0 1 .383-.212l1.278.799a.25.25 0 0 1 0 .424Z" />
                                </svg></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('watchvideo') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-badge-hd-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M10.53 5.968h-.843v4.06h.843c1.117 0 1.622-.667 1.622-2.02 0-1.354-.51-2.04-1.622-2.04" />
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm5.396 3.001V11H6.209V8.43H3.687V11H2.5V5.001h1.187v2.44h2.522V5h1.187zM8.5 11V5.001h2.188c1.824 0 2.685 1.09 2.685 2.984C13.373 9.893 12.5 11 10.69 11z" />
                                </svg></span>
                            <span class="text">See a Video</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('talkpage') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg></span>
                            <span class="text">Friend talk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('socialmedia') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cast" viewBox="0 0 16 16">
                                    <path
                                        d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0" />
                                    <path
                                        d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086z" />
                                </svg> </span>
                            <span class="text">Social posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('post') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z" />
                                    <path
                                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                </svg></span>
                            <span class="text">Post your own</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('todopage') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                </svg></span>
                            <span class="text">Your quests</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('download') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708z" />
                                    <path
                                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                </svg></span>
                            <span class="text">Download</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path
                                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                </svg></span>
                            <span class="text">Contact</span>

                        </a>
                    </li><br><br><br><br><br>
                    <li>
                        <a>
                            <button id="logoutBtn"
                                style="background:#303030;width:100%;left: 40px; height: 100%;text-align:left;color:white;">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-box-arrow-left"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                                        <path fill-rule="evenodd"
                                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                                    </svg></span>
                                Logout</button></button>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>


    <div class="dark-mode-toggle">
        <input type="checkbox" id="darkModeToggle">
        <label for="darkModeToggle"></label>
    </div>


    <!--<img class="img1" src="https://wallpapercave.com/wp/wp3165125.jpg" alt="background" class="background_image">
        <img class="img2" src="https://th.bing.com/th/id/OIP.vvmpWt0qBu3LeBgZuUfmGAHaFt?rs=1&pid=ImgDetMain" alt="profile" class="profile_image">
        <span class="name">Ceva</span>
        <span class="Age">Age:21</span>
        <span class="Lvl">Lvl:1</span>
        <span class="Gender">Gender:Something</span>
        <input class="buton" type="submit" value="Change background/image">
-->
    <div class="row py-5 px-4">
        <div class="col-md-5 mx-auto"> <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3"><img
                                src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#"
                                class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                        <div class="media-body mb-5 text-white">
                            @php echo "<h4 class='mt-0 mb-0'> $email </h4>"@endphp


                            @php echo "<p class='small mb-4'> <i class='fas fa-map-marker-alt mr-2'></i> $location </p>"@endphp
                        </div>
                    </div>
                </div>
                <div class=" p-4 d-flex justify-content-end text-center">

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5 style="color:black" class="font-weight-bold mb-0 d-block">20</h5><small
                                class="text-muted"> <i class="fas fa-image mr-1"></i>Videos</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color:black" class="font-weight-bold mb-0 d-block">215</h5><small
                                class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color:black" class="font-weight-bold mb-0 d-block">745</h5><small
                                class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color:black" class="font-weight-bold mb-0 d-block">340</h5><small
                                class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                        </li>
                    </ul>
                </div>
            </div>

            <h5>About</h5>


            @php             echo "<p class='font-italic mb-0'> $var </p>

            <br>
            <p class='font-italic mb-0'>$gender</p>
            <br>
            <p class='font-italic mb-0'>$default_level</p>
            <br>
            <p class='font-italic mb-0'>$more_details</p>"; @endphp

            <br>
            <br>

            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-2 pr-lg-1"><img
                        src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                        alt="" class="img-fluid rounded shadow-sm"></div>

                <div class="col-lg-6 mb-2 pl-lg-1"><img
                        src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                        alt="" class="img-fluid rounded shadow-sm"></div>
                <div class="col-lg-6 pr-lg-1 mb-2"><img
                        src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                        alt="" class="img-fluid rounded shadow-sm"></div>
                <div class="col-lg-6 pl-lg-1"><img
                        src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                        alt="" class="img-fluid rounded shadow-sm"></div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>


    </div>
    </div>
    </form>

    <script>
        document.getElementById('logoutBtn').addEventListener('click', function() {

            var newUrl = {{ route('logout') }};
            history.replaceState(null, null, newUrl);

            window.location.href = newUrl;
        });
    </script>
    <script type="text/javascript" src="{{ asset('scripts/black.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/pagination_for_main.js') }}"></script>

</body>

</html>
