<?php
$routeName = Request::route()->getName();
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.firmimg" ? "nav-active" : ''}}" href="{{ route('admin.firmimg') }}">
          <i class="bi bi-star-fill"></i>
          <span>Firm Image</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.iconsetting" ? "nav-active" : ''}}" href="{{ route('admin.iconsetting') }}">
          <i class="bi bi-star-fill"></i>
          <span>Icon Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.firmdetails" ? "nav-active" : ''}}" href="{{ route('admin.firmdetails') }}">
          <i class="bi bi-star-fill"></i>
          <span>Firm Details</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.maindetail" ? "nav-active" : ''}}" href="{{ route('admin.maindetail') }}">
          <i class="bi bi-grid"></i>
          <span>Main Details</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.category" ? "nav-active" : ''}}" href="{{ route('admin.category') }}">
          <i class="bi bi-bookmark"></i>
          <span>Law Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.advocate" ? "nav-active" : ''}}" href="{{ route('admin.advocate') }}">
          <i class="bi bi-person"></i>
          <span>Advocate</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.about" ? "nav-active" : ''}}" href="{{ route('admin.about') }}">
          <i class="bi bi-file-person-fill"></i>
          <span>About</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.review" ? "nav-active" : ''}}" href="{{ route('admin.review') }}">
          <i class="bi bi-star-fill"></i>
          <span>Reviews</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.qr" ? "nav-active" : ''}}" href="{{ route('admin.qr') }}">
          <i class="bi bi-star-fill"></i>
          <span>QR Code</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.address" ? "nav-active" : ''}}" href="{{ route('admin.address') }}">
          <i class="bi bi-star-fill"></i>
          <span>Address</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $routeName == "admin.socialmedia" ? "nav-active" : ''}}" href="{{ route('admin.socialmedia') }}">
          <i class="bi bi-star-fill"></i>
          <span>Social Media Links</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->
