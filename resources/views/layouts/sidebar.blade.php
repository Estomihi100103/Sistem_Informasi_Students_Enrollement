<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">My Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">


                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/') ? 'active' : '' }}"
                        aria-current="page" href="/">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('user_s*') ? 'active' : '' }}"
                        href="/user_s">
                        <svg class="bi">
                            <use xlink:href="#circle-half" />
                        </svg>
                        <span>Biodata</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('user_s*') ? 'active' : '' }}"
                        href="/getCourses">
                        <svg class="bi">
                            <use xlink:href="#check2" />
                        </svg>
                        Courses
                    </a>
                </li>


                @can('admin')
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('students*') ? 'active' : '' }}"
                            href="/students">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Daftar Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('students*') ? 'active' : '' }}"
                            href="/courses">
                            <svg class="bi">
                                <use xlink:href="#moon-stars-fill" />
                            </svg>
                            Daftar Mata Kuliah
                        </a>
                    </li>
                @endcan

                
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2"><i
                                class="bi bi-box-arrow-right bg-dark"></i>Log
                            out</button>
                    </form>
                </li>
            </ul>

            {{-- @can('admin') --}}
            {{-- berfungsi sebagai gerbang, code yang di bawah ini akan di akses jika user adalah seorang yang sebagi administartor --}}

            {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>ADMINISTRATOR</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                            href="/dashboard/categories">
                            <span data-feather="grid"></span>
                            Post Category
                        </a>
                    </li>
                </ul> --}}
            {{-- @endcan --}}

        </div>
    </div>
</div>
