<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RumahJakarta</title>
  </head>
  <body>

    @include('partials.navbar')
    
    

        @yield('container')
    
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      
      function submitForm() {
          body = {
              'area' : document.getElementById("area").value ,
              'category' : parseInt(document.getElementById("category").value) ,
              'hmax' : parseInt(document.getElementById("hmax").value) ,
              'hmin' : parseInt(document.getElementById("hmin").value) ,
              'ltmin' : parseInt(document.getElementById("ltmin").value) ,
              'ltmax' : parseInt(document.getElementById("ltmax").value) ,
              'lbmin' : parseInt(document.getElementById("lbmin").value) ,
              'lbmax' : parseInt(document.getElementById("lbmax").value) ,
              'jkmrtidur' : parseInt(document.getElementById("jkmrtidur").value) ,
              'jkmrmandi' : parseInt(document.getElementById("jkmrmandi").value)
          }/* ini bagian json yg mo dikirim ke python lewat ajax yg dikirim ke fast api method post dengan link..*/
          
          /* console.log(JSON.stringify(body)) */
          /* alert(JSON.stringify(body)) */
          
          let slugg = null

          $.ajax({ /* INI AJAX NYA WKWKWKWK */
              type: "POST", 
              url: "http://127.0.0.1:8000/items", /* ini link fastapinya */
              data: JSON.stringify(body),
              headers: {'Access-Control-Allow-Origin': '*'},
              dataType: "json",
              processData: false,
              contentType: "application/json",
              success: function(response) { 
                  console.log(response); /* ini tempat nerima hasil rekomendasinya, si response */
                  
                  alert("Rekomendasi telah ditampilkan, silahkan tutup fitur rekomendasi")
                  $('test1').html(response[5])
                  /* if (response.status == "success") {
                      alert(JSON.stringify(response) + "SUKSES");
                  }
                  else {
                    alert(JSON.stringify(response) + "GAGAL");
                  } */
                  rekomendasi = "REKOMENDASI"
                  $('#tesrekomendasi').text(rekomendasi)
                  title = response[4]
                  $('#testtitle').text(title)
                  daeare = response[8] + ", " + response[7]
                  $('#testdaeare').text(daeare)
                  harga = "Rp. " + response[6]
                  $('#testharga').text(harga)
                  luastanah = "Luas Tanah : " + response[9]
                  $('#testlt').text(luastanah)
                  luasbangunan = "Luas Bangunan : " + response[10]
                  $('#testlb').text(luasbangunan)
                  jktidur = "Kamar Tidur : " + response[11]
                  $('#testjktidur').text(jktidur)
                  jkmandi = "Kamar Mandi : " + response[12]
                  $('#testjkmandi').text(jkmandi)
              }
              /* response = null; */
          });
          
          /* $.ajax({
              type: "GET",
              url: "/api/status",
              success: function(getResponse) {
                  resp = getResponse;
              }
          }); */
     
      }

      function submitSlugg(){
         slugg
      }
    </script>
  </body>
</html>