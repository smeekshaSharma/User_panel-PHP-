<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=McLaren&display=swap" rel="stylesheet">
    <title>CRUD</title>
  </head>
  <body style="background-color:#EB984E;padding:20px;">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-4">
              <div class="card" style="width:400px;height:500px;background-color:white;">
                <center><img src="1.png" style="width:150px;height:150px;border-radius:50%;margin:30px;"/></center>
                <form id="frm" method="post" style="padding:10px;">
                <input type="text" id="name" class="form-control inp" name="name" placeholder="enter name"/><br>
                <input type="email" id="email" class="form-control inp" name="email" placeholder="enter email id"/><br>
                <input type="text" id="company" class="form-control inp" name="company" placeholder="enter company name"/><br>
                <input type="submit" id="inpsub" name="detailssub" class="btn btn-danger"/>
                </form>
                </div>
              </div>
              <div class="col-md-8">
              <div class="card" style="width:100%;height:500px;background-color:white;padding:20px;">
              <div style="width:100%;height:120px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:20px;">
                <div class="row">
                  <div class="col-md-2">
                  <center><img src="1.png" style="width:80px;height:80px;border-radius:50%;margin:20px;"/></center>
                  </div>
                  <div class="col-md-10">
                    <div style="margin:10px;">
                    <h4><b>Name - </b>Amit Kumar</h4>
                    <h6><b>Email - </b>amitkumar99@gmail.com</h6>
                    <h6><b>Company Name - </b>Royals Deck</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  <script>
    var frm=(document).querySelector("#frm");
    frm.addEventListener('submit',function(e){
      e.preventDefault();
      adddata();
    });

    function adddata() {
          var name=document.getElementById("name").value;
          var email=document.getElementById("email").value;
          var company=document.getElementById("company").value;
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              swal({
                  title: "Good job!",
                  text: this.responseText,
                  icon: "success",
                  button: "Aww yiss!",
                });
            }
          };
          xhttp.open("POST", "function.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("name="+name+"&email="+email+"&company="+company+"&detailssub=detailssub");
        }

</script>
</html>