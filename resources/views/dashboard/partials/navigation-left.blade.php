        <nav class="navbar-default navbar-static-side" role="navigation">
            <aside>
                <ul class="sky-mega-menu sky-mega-menu-pos-left sky-mega-menu-anim-scale sky-mega-menu-response-to-switcher">
                    @if(Auth::user()->profile)
                    <li>  
                        <a href="#" class="text-center py-5">
                            @foreach(Auth::user()->profile->imageables as $image)
                            @if($image->imageable_type === 'profiles' && $image->imageable_id === Auth::id())
                            <img height="80" class="img-circle thumbnail-admin"  src="{{URL::to('/images/' . $image->slug) }}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" />
                            <br />
                            @endif
                            @endforeach
                            {{Auth::user()->name}}
                        </a>
                        <div class="grid-container3">
                            <ul>
                                <li><a href="{{route('profiles.show', Auth::user()->profile->slug)}}">Profile</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    @else
                    <li>
                        <i class="text-center fa fa-user-circle fa-4x"></i><br />
                        <h3>Kein Profile vorhanden</h3>
                    </li>
                    @endif
                    <!-- frontend -->
                    <li>
                        <a href="{{route('landing')}}"><i class="fa fa-home"></i>Startseite</a>
                    </li>
                    <!--/ dashboard -->
                      
                    <!-- dashboard -->
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <!--/ dashboard -->

                    <!-- profiles -->
                    <li aria-haspopup="true">
                        <a href="#"><i class="fa fa-group"></i>Profiles</a>
                        <div class="grid-container3">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-list"></i>Alle Profile</a>
                                    <div class="grid-container3">
                                        <ul>
                                            <li><a href=""><i class="fa fa-plus"></i>Neue hinzufügen</a></li>
                                            <li><a href=""><i class="fa fa-trash"></i>Im Papierkorb</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href=""><i class="fa fa-list"></i>Alle Administratoren</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--/ profiles -->
                </ul>
            </aside>
        </nav>