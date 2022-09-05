
        <div id="myCarousel" class="carousel slide slide-carouseo" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!--Slide show-->
            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img src="http://localhost/websitemvc12/public/anh/chay4.jpg" alt="anh 1" width="70%" height="370">

                </div>

                <div class="carousel-item">

                    <img src="http://localhost/websitemvc12/public/anh/chay5.jpg" alt="anh 2" width="70%" height="370">

                </div>

                <div class="carousel-item">

                    <img src="http://localhost/websitemvc12/public/anh/chay3.jpg" width="70%" height="370">

                </div>
            </div>

            <!--Button-->
            <button class="carousel-control-prev" style="margin-left: 70px;" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
            <button class="carousel-control-next" style="margin-right: 70px;" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"  aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
        </div>

	 <script>
        $(document).ready(function() {
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item1").click(function() {
                $("#myCarousel").carousel(0);
            });
            $(".item2").click(function() {
                $("#myCarousel").carousel(1);
            });
            $(".item3").click(function() {
                $("#myCarousel").carousel(2);
            });

            // Enable Carousel Controls
            $(".carousel-control-prev").click(function() {
                $("#myCarousel").carousel("prev");
            });
            $(".carousel-control-next").click(function() {
                $("#myCarousel").carousel("next");
            });
        });
    </script>