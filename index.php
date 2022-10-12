


<!DOCTYPE html>
<html>
<head>
    
	<meta charset="UTF-8">
	<title>Nạp thẻ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8" style="float:none;margin:0 auto;">
					<div class="form-group">
					 <label>Loại thẻ:</label>
                        <select class="form-control" id="card_type">
                            <option value="">Chọn loại thẻ</option>
                            <option value="VIETTEL">Viettel</option>
                            <option value="MOBIFONE">Mobifone</option>
                            <option value="VINAPHONE">Vinaphone</option>
                            <option value="VIETNAMOBILE">Vietnamobile</option>
                             <option value="ZING">Zing</option>
                        </select>
					</div>
					<div class="form-group">
						<label>Mệnh giá:</label>
						<select class="form-control" id="card_amount">
							<option value="">Chọn mệnh giá</option>
							<option value="20000">20.000</option>
							<option value="50000">50.000</option>
							<option value="100000">100.000</option>
							<option value="200000">200.000</option>
							<option value="500000">500.000</option>
						    <option value="1000000">1.000.000</option>
						</select>
					</div>
					<div class="form-group">
					 <label>Số seri:</label>
                        <input type="text" class="form-control" id="serial" placeholder="Nhập số seri trên thẻ" />
                    </div>
                    <div class="form-group">
                        <label>Mã thẻ:</label>
                        <input type="text" class="form-control" id="pin" placeholder="Nhập Mã Thẻ In Sau Lớp Bạc Mỏng " />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block" onclick="napthe(this)">Gửi Thẻ</button>
                 	</div>
				</form>
</br>
   <script>
                                    function napthe() {
                                        var card_type = $("#card_type").val();
                                        var card_amount = $("#card_amount").val();
                                        var serial = $("#serial").val();
                                        var pin = $("#pin").val();
                                        if (!card_type || !card_amount || !serial || !pin) {
                                            swal("lỗi", "Thiếu Thông Tin", "error");
                                        } else {
                                            $.ajax({
                                                type: "POST",
                                                url: "napthe.php",
                                                data: {
                                                    card_type,
                                                    card_amount,
                                                    serial,
                                                    pin,
                                                },
                                                dataType: "json",
                                                success: function (res) {
                                                    if (res.success) {
                                                        swal("Thành công", res.success, "success");
                                                    } else {
                                                        swal("Lỗi", res.error, "error");
                                                    }
                                                },
                                                error: function (err) {
                                                    console.log(err);
                                                },
                                            });
                                        }
                                    }
                                  </script>
	</button>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        </span>
      </div>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js"></script>

</script>
						</body>
</html>