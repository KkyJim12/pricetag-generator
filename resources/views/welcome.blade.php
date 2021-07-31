<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    @include('components.Navbar')
    <div class="container">
        <form method="post" action="/pdf" enctype="multipart/form-data">
            <div class="row justify-content-center pt-5">
                <div class="col-12 mb-5">
                    <h1 class="text-center">Homeshow Pricetag Generator Ver.1.0.0</h1>
                    <h5 class="text-center">(แถว1.ชื่อสินค้า แถว2.ราคา แถว3.หน่วย แถว4.เลขบาร์โค๊ด)</h5>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="brand">รูปแบรนด์</label>
                        <input type="file" class="form-control" id="brand" name="brand">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="excel"> ข้อมูล excel</label>
                        <input type="file" class="form-control" id="excel" name="excel">
                    </div>
                </div>
                <div class="col-12 mt-2">
                    @csrf
                    <button type="submit" class="btn btn-success form-control">ยืนยัน</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>