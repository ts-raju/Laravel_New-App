<!DOCTYPE html>
<html>
<head>
  
  <title>AdminLTE 3 | Dashboard</title>
  
  @include('backend.layout.styles')


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  @include('backend.layout.nevbar')
  

  
  @include('backend.layout.sidebar')

  
  <div class="content-wrapper">
  

    @include('backend.layout.header')
  

    <section class="content">
      <div class="container-fluid">
      	@yield('content')
      </div>
    </section>

      
 </div>


  @include('backend.layout.footer')

  
</div>
<!-- ./wrapper -->

@include('backend.layout.scripts')
</body>
</html>
