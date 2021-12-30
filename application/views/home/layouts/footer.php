    <footer class="text-white  mt-5">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <h5 id="about" class="text-uppercase">List of our Team (TI-03)</h5>
          <div class="col-sm-3">
              <small>- (0110xxxxxx) Name </small><br>
              <small>- (0110220078) Ahmad Noval Fahmi </small><br>
              <small>- (0110220087) Chika Aulia Zahwa </small>
          </div>
          <div class="col-sm">
              <small>- (0110220123) Gunawan</small><br>
              <small>- (0110220170) Muhammad Ismail</small><br>
              <small>- (0110xxxxxx) Name </small>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="">
          Mahasiswa STT Terpadu Nurul Fikri © 2020 
        </div>
      </div>
      <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        const readMoreBtn = document.querySelector(".read-more-btn");
        const text = document.querySelector(".text");

        readMoreBtn.addEventListener("click", (e) => {
          text.classList.toggle("show-more");
          if (readMoreBtn.innerHTML === "Lihat Deskripsi") {
              readMoreBtn.innerHTML = "Tutup";
          } else {
              readMoreBtn.innerHTML = "Lihat Deskripsi";
          }
        });
    </script>
  </body>
</html>