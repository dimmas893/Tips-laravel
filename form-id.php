<a class="dropdown-item has-icon text-danger" href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout_id').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout
                </a>
                        <form method="POST" id="logout_id" action="{{ route('logout') }}" style="display:none;">
                            @csrf

                        </form>
