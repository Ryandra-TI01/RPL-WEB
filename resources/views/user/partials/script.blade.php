 <!-- build:admin assets/vendor/js/core.js -->

 <script src="{{asset('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
 <script src="{{asset('admin/assets/vendor/libs/popper/popper.js')}}"></script>
 <script src="{{asset('admin/assets/vendor/js/bootstrap.js')}}"></script>
 <script src="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
 <script src="{{asset('admin/assets/vendor/js/menu.js')}}"></script>

 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="{{asset('admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

 <!-- Main JS -->
 <script src="{{asset('admin/assets/js/main.js')}}"></script>

 <!-- Page JS -->
 <script src="{{asset('admin/assets/js/dashboards-analytics.js')}}"></script>

 <!-- Place this tag before closing body tag for github widget button. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
  </script>