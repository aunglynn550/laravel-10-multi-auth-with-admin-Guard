<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{asset('admin/assets/modules/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('admin/assets/modules/fontawesome/css/all.min.css')}}>

  <!-- CSS Libraries -->
  <link rel="stylesheet" href={{asset('admin/assets/modules/jqvmap/dist/jqvmap.min.css')}}>
  <link rel="stylesheet" href={{asset('admin/assets/modules/summernote/summernote-bs4.css')}}>
  <link rel="stylesheet" href={{asset('admin/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}>
  <link rel="stylesheet" href={{asset('admin/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}>

  <!-- Template CSS -->
  <link rel="stylesheet" href={{asset('admin/assets/css/style.css')}}>
  <link rel="stylesheet" href={{asset('admin/assets/css/components.css')}}>
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    @include('admin.layouts.sidebar')
      <!-- Main Content -->
      <div class="main-content">
       @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src={{asset('admin/assets/modules/jquery.min.js')}}></script>
  <script src={{asset('admin/assets/modules/popper.js')}}></script>
  <script src={{asset('admin/assets/modules/tooltip.js')}}></script>
  <script src={{asset('admin/assets/modules/bootstrap/js/bootstrap.min.js')}}></script>
  <script src={{asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}></script>
  <script src={{asset('admin/assets/modules/moment.min.js')}}></script>
  <script src={{asset('admin/assets/js/stisla.js')}}></script>
  
  <!-- JS Libraies -->
  <script src={{asset('admin/assets/modules/jquery.sparkline.min.js')}}></script>
  <script src={{asset('admin/assets/modules/chart.min.js')}}></script>
  <script src={{asset('admin/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}></script>
  <script src={{asset('admin/assets/modules/summernote/summernote-bs4.js')}}></script>
  <script src={{asset('admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}></script>
  <script src="assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>

  <!-- Page Specific JS File -->
  <script src={{asset('admin/assets/js/page/index.js')}}></script>

  <!-- Sweet Alert Js -->
  @include('sweetalert::alert')
  
  <!-- Template JS File -->
  <script src={{asset('admin/assets/js/scripts.js')}}></script>
  <script src={{asset('admin/assets/js/custom.js')}}></script>

  <script>
    $.uploadPreview({
      input_field: "#image-upload",   // Default: .image-upload
      preview_box: "#image-preview",  // Default: .image-preview
      label_field: "#image-label",    // Default: .image-label
      label_default: "Choose File",   // Default: Choose File
      label_selected: "Change File",  // Default: Change File
      no_label: false,                // Default: false
      success_callback: null          // Default: null
    });
  </script>

  @stack('scripts')

</body>
</html>