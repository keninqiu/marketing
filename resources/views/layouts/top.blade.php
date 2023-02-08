<div class="d-flex justify-content-between">
    <div class="d-flex text-muted">
    <button class="bg-black border-none d-block d-md-none" type="button" data-bs-toggle="modal" data-bs-target="#sidebarModal">
      <span class="navbar-toggler-icon"></span>
    </button>


        <div class="mx-3">Home Page</div>
        <div class="mx-3">How to Guide</div>
        <div class="mx-3">Be Affiliate</div>
    </div>
    <div>
        <img class="avatar rounded-circle" src="/images/avatar.png">
    </div>
</div>
<script>
    function togglerSideBar() {
       const sidebar = document.getElementById("sidebar");
       if(sidebar.classList.contains('d-none')) {
        sidebar.classList.remove("d-none");
        sidebar.classList.add("float-start");
       } else {
        sidebar.classList.add("d-none");
       }
    }
</script>