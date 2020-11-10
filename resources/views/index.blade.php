@extends('layouts.default')
@section('content')
<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  @include('header')
  <!-- Header end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content">
   <!-- Secondary Navigation
    ============================================= -->
   @include('category_navigation')
    <!-- Secondary Navigation end -->
    
   @include('Category.MobileRecharge')
    <!-- Secondary Navigation
    ============================================= -->
    
    <!-- Tabs
    ============================================= -->
    @include('aboutus')
    <!--============================================= -->
   
    
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  @include('footer')
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 
@endsection

