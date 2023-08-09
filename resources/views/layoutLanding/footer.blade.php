    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">
                Copyright &copy; 2023 - Indominco Mandiri - General Affairs
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('../js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
      // Tambahkan class "loaded" saat halaman dimuat
      window.addEventListener('load', function() {
        document.body.classList.add('loaded');
      });
    </script>
    <script>
      // Tambahkan class "loaded" saat halaman dimuat dan atur waktu delay
      window.addEventListener('load', function() {
        setTimeout(function() {
          document.querySelectorAll('.tabel-manis').forEach(function(element) {
            element.classList.add('loaded');
          });
        }, 500); // Ubah nilai 500 sesuai dengan waktu delay yang diinginkan (dalam milidetik)
      });
    </script>
    <script>
      getPagination("#table-id");
      function getPagination(table) {
          var lastPage = 1;
          $("#maxRows")
              .on("change", function(evt) {
                  //$('.paginationprev').html('');                      // reset pagination
                  lastPage = 1;
                  $(".pagination").find("li").slice(1, -1).remove();
                  var trnum = 0; // reset tr counter
                  var maxRows = parseInt($(this).val()); // get Max Rows from select option
                  if (maxRows == 5000) {
                      $(".pagination").hide();
                  } else {
                      $(".pagination").show();
                  }
                  var totalRows = $(table + " tbody tr").length; // numbers of rows
                  $(table + " tr:gt(0)").each(function() {
                      // each TR in  table and not the header
                      trnum++; // Start Counter
                      if (trnum > maxRows) {
                          // if tr number gt maxRows
                          $(this).hide(); // fade it out
                      }
                      if (trnum <= maxRows) {
                          $(this).show();
                      } // else fade in Important in case if it ..
                  }); //  was fade out to fade it in
                  if (totalRows > maxRows) {
                      // if tr total rows gt max rows option
                      var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                      //  numbers of pages
                      for (var i = 1; i <= pagenum;) {
                          // for each page append pagination li
                          $(".pagination #prev")
                              .before(
                                  '<li data-page="' +
                                  i +
                                  '">\
                                        <span>' +
                                  i++ +
                                  '<span class="sr-only">(current)</span></span>\
                                      </li>'
                              )
                              .show();
                      } // end for i
                  } // end if row count > max rows
                  $('.pagination [data-page="1"]').addClass("active"); // add active class to the first li
                  $(".pagination li").on("click", function(evt) {
                      // on click each page
                      evt.stopImmediatePropagation();
                      evt.preventDefault();
                      var pageNum = $(this).attr("data-page"); // get it's number
      
                      var maxRows = parseInt($("#maxRows").val()); // get Max Rows from select option
      
                      if (pageNum == "prev") {
                          if (lastPage == 1) {
                              return;
                          }
                          pageNum = --lastPage;
                      }
                      if (pageNum == "next") {
                          if (lastPage == $(".pagination li").length - 2) {
                              return;
                          }
                          pageNum = ++lastPage;
                      }
      
                      lastPage = pageNum;
                      var trIndex = 0; // reset tr counter
                      $(".pagination li").removeClass("active"); // remove active class from all li
                      $('.pagination [data-page="' + lastPage + '"]').addClass(
                      "active"); // add active class to the clicked
                      // $(this).addClass('active');                  // add active class to the clicked
                      limitPagging();
                      $(table + " tr:gt(0)").each(function() {
                          // each tr in table not the header
                          trIndex++; // tr index counter
                          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                          if (
                              trIndex > maxRows * pageNum ||
                              trIndex <= maxRows * pageNum - maxRows
                          ) {
                              $(this).hide();
                          } else {
                              $(this).show();
                          } //else fade in
                      }); // end of for each tr in table
                  }); // end of on click pagination list
                  limitPagging();
              })
              .val(5)
              .change();
      
          // end of on select change
      
          // END OF PAGINATION
      }
      
      function limitPagging() {
          // alert($('.pagination li').length)
      
          if ($(".pagination li").length > 7) {
              if ($(".pagination li.active").attr("data-page") <= 3) {
                  $(".pagination li:gt(5)").hide();
                  $(".pagination li:lt(5)").show();
                  $('.pagination [data-page="next"]').show();
              }
              if ($(".pagination li.active").attr("data-page") > 3) {
                  $(".pagination li:gt(0)").hide();
                  $('.pagination [data-page="next"]').show();
                  for (
                      let i = parseInt($(".pagination li.active").attr("data-page")) - 2; i <= parseInt($(
                          ".pagination li.active").attr("data-page")) + 2; i++
                  ) {
                      $('.pagination [data-page="' + i + '"]').show();
                  }
              }
          }
      }
      
      $(function() {
          // Just to append id number for each row
          $("table tr:eq(0)").prepend("<th> ID </th>");
      
          var id = 0;
      
          $("table tr:gt(0)").each(function() {
              id++;
              $(this).prepend("<td>" + id + "</td>");
          });
      });
      </script>
