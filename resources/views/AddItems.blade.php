<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-validation/jquery.validate.js') }}"> </script>
</head>

<body>

    <div class="container">
        <!-- Content here -->

        <form class="row g-3" method="post" action="/additems" id="item_form">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="itemName">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Client Name</label>
                <input type="text" class="form-control" id="inputPassword4" name="clientName">
            </div>
            <div class="col-md-2">
                <label for="inputAddress" class="form-label">Karate</label>
                <input type="text" class="form-control" id="inputAddress" name="karat">
            </div>
            <div class="col-md-2">
                <label for="inputAddress2" class="form-label">Purity</label>
                <input type="text" class="form-control" id="inputAddress2" name="purity">
            </div>
            <div class="col-md-2">
                <label for="inputCity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="inputCity" name="quantity">
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>

    </div>
    <script>
        //Submit Form
        $("#item_form").validate({
            errorElement: 'span',
            rules: {
                itemName: {
                    required: true,
                    maxlength: 40,
                },
                quantity: {
                    required: true,
                    maxlength: 6,
                    digits: true,
                },
            },
            messages: {
                // quantity: {
                //     required: "quy",
                // },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>