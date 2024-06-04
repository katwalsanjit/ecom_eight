  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{ auth()->user()->name}}
          @if(auth()->user()->userInfo != null && auth()->user()->userInfo->image != null && file_exists(public_path().'/uploads/user/'.auth()->user()->userInfo->image))
          <img src="{{ asset('uploads/user.'.auth()->user()->userInfo->image)}}" alt="image">
          @else
            <img src="{{ asset('assets/admin/dist/img/avatar.png')}}"  width="30"/>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logoutform').submit()" class="dropdown-item"><i class="fa fa-power-off"></i>
            Logout</a>
            {{ Form::open(['url' => route('logout'), 'id' => 'logoutform'])}}
            {{ Form::close() }}
          <div class="dropdown-divider"></div>

          <a href="javascript:;" class="edit-profile dropdown-item">
            <i class="fa fa-user"></i>
            Profile</a>
          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">
            <i class="fa fa-key"></i>
            Change Password
          </a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<!-- Model for user -->
<div class="modal" tabindex="-1" id="editProfile" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update User Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      {{ Form::open(['url' => route('update-profile', auth()->user()->id), 'files'=>true]) }}
            <div class="modal-body">
                  <div class="form-group row">
                    {{ Form::label('name', 'Name: ', ['class' => 'col-sm-3'])}}
                    <div class="col-sm-9">
                      {{ Form::text('name', auth()->user()->name, ['class' => 'form-control form-control-sm', 'required'=>true, 'id'=>'name', 'placeholder'=>'Enter Your Name']) }}
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    {{ Form::label('phone', 'Phone: ', ['class' => 'col-sm-3'])}}
                    <div class="col-sm-9">
                      {{ Form::tel('phone', (auth()->user()->userInfo != null) ? auth()->user()->userInfo->phone : null, ['class' => 'form-control form-control-sm', 'required'=>false, 'id'=>'phone', 'placeholder'=>'Enter Your Phone']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    {{ Form::label('address', 'Address: ', ['class' => 'col-sm-3'])}}
                    <div class="col-sm-9">
                      {{ Form::textarea('address', (auth()->user()->userInfo != null) ? auth()->user()->userInfo->address : null, ['class' => 'form-control form-control-sm', 'required'=>false, 'id'=>'address', 'placeholder'=>'Enter Your Address', 'style' => 'resize:none', 'rows'=>5]) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    {{ Form::label('image', 'Image: ', ['class' => 'col-sm-3'])}}
                    <div class="col-sm-3">
                      {{ Form::file('image', ['class' => 'form-control form-control-sm','required'=>false, 'id'=>'image']) }}
                    </div>
                    <div class="col-sm-2">
                      @if(auth()->user()->userInfo != null && auth()->user()->userInfo->image != null && file_exists(public_path().'/uploads/user/'.auth()->user()->userInfo->image))
                      <img src="{{ asset('uploads/user.'.auth()->user()->userInfo->image)}}" alt="image" class="img img-fluid img-circle">
                      @else
                        <img src="{{ asset('assets/admin/dist/img/avatar.png')}}"  width="30" class="img img-fluid img-circle"/>
                      @endif
                    </div>
                  </div>


            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal">
                <i class="fa fa-redo"></i>
                Reset
              </button>
              <button type="submit" class="btn btn-success">
                <fa class="fa-paper-plane"></fa>
                Save changes
              </button>
            </div>
          
        {{ Form::close() }}  

    </div>
  </div>
</div>