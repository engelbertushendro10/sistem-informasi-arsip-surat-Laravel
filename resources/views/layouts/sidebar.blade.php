<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="{{ url('/home') }}" class="waves-effect"><i class="fa fa-home m-r-10"
                            aria-hidden="true"></i>Dashboard</a>
                </li>
                @if (request()->user()->hak=='admin')
                <li>
                    <a href="{{ url('/user') }}" class="waves-effect"><i class="fa fa-user m-r-10"
                            aria-hidden="true"></i>Pengguna</a>
                </li>
                @endif 
                <li>
                    <a href="{{ url('/surat') }}" class="waves-effect"><i class="fa fa-envelope-o m-r-10"
                            aria-hidden="true"></i>Surat Masuk</a>
                </li>
                <li>
                    <a href="{{ url('/suratkeluar') }}" class="waves-effect"><i class="fa fa-envelope-o m-r-10"
                            aria-hidden="true"></i>Surat Keluar</a>
                </li>
                <li>
                    <a href="{{ url('/disposisi') }}" class="waves-effect"><i class="fa fa-tasks m-r-10"
                            aria-hidden="true"></i>Disposisi</a>
                </li>
                <li>
                    <a href="{{ url('/agenda') }}" class="waves-effect"><i class="fa fa-calendar m-r-10"
                            aria-hidden="true"></i>Agenda</a>
                </li>
                
                <li>
                <a href="#laporan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-paste m-r-10"
                            aria-hidden="true"></i>Laporan</a>
                <ul class="collapse list-unstyled" id="laporan">
                <li>
                    <a href="{{ url('/surat/laporan') }}" class="waves-effect"><i class="fa fa-paste m-r-10"
                            aria-hidden="true"></i>Surat Masuk</a>
                </li>
                <li>
                <a href="{{ url('/suratkeluar/laporan') }}" class="waves-effect"><i class="fa fa-paste m-r-10"
                            aria-hidden="true"></i>Surat Keluar</a>
                </li>
                </ul>
            </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>