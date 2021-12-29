    <footer my-4>
      <p class="copyright">Copyright © 2021, WalkingLibrary</p>
      <div class="nakel">
      <!--
      <p>1. 0110220101 - Ahmad Luthfi Taqiyuddin</p>
      <p>2. 0110220078 - Ahmad Noval Fahmi</p>
      <p>3. 0110220087 - Chika Aulia Zahwa</p>
      <p>4. 0110220123 - Gunawan</p>
      <p>5. 0110220170 - Muhammad Ismail</p>
      <p>6. 0110220180 - Saffanah Jannati Azizah</p>
      </div>
      -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const readMoreBtn = document.querySelector(".read-more-btn");
        const text = document.querySelector(".text");

        readMoreBtn.addEventListener("click", (e) => {
        text.classList.toggle("show-more");
        if (readMoreBtn.innerHTML === "Baca Selengkapnya") {
            readMoreBtn.innerHTML = "Lebih sedikit";
        } else {
            readMoreBtn.innerHTML = "Baca Selengkapnya";
        }
        });
    </script>
  </body>
</html>