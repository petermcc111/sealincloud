<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sealincloud" />
    <meta name="author" content="Peter Chau" />
    <title>Case Registration | Sealincloud – Help Complainants find their NEXT solution</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="vendor/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="home/header.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    .form-group {
        margin-top:1rem;
    }
    .red {
        margin-left: 0.5rem;
        color:red;
    }
    .casetype label {
        margin-top:10px;
    }
    </style>
</head>
<body id="page-top">
    <!-- Navigation-->
<? include("../home/header.php"); ?>
    <!-- Header-->
    <header class="text-black" style="">
        <div class="container text-center">
            <h2>Case Registration</h2>
        </div>
    </header>
    <!-- About form field-->
    <section id="formfield">
        <div class="container px-4">
            <form action="submit.php" method="post" target="_self" class="needs-validation" novalidate="novalidate">
                <div class="mb-3">
                    <div class="casetype form-group">
                        <div class="form-group">Type of Case</div>
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked="checked" />
                        <label class="btn btn-outline-primary" for="option1">Accident</label>
                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option2">Real Estate</label>
                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option3">Education</label>
                        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option4">Family</label>
                        <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option5">Finance</label>
                        <input type="radio" class="btn-check" name="options" id="option6" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option6">Scam</label>
                        <input type="radio" class="btn-check" name="options" id="option7" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option7">Unfair Deal</label>
                        <input type="radio" class="btn-check" name="options" id="option8" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option8">Employment Dispute</label>
                        <input type="radio" class="btn-check" name="options" id="option9" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option9">Food Safety</label>
                        <input type="radio" class="btn-check" name="options" id="option10" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option10">Public Traffics</label>
                        <input type="radio" class="btn-check" name="options" id="option11" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option11">Natural Disaster</label>
                        <input type="radio" class="btn-check" name="options" id="option12" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option12">Environmental Pollution</label>
                        <input type="radio" class="btn-check" name="options" id="option13" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option13">Medical Assistance</label>
                        <input type="radio" class="btn-check" name="options" id="option14" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option14">Missing person/property</label>
                        <input type="radio" class="btn-check" name="options" id="option15" autocomplete="off" />
                        <label class="btn btn-outline-primary" for="option15">Others</label>
                    </div>

                    <div class="form-group">
                        <label for="request" class="form-label">What is your request?<span class="red">*</span></label>
                        <textarea class="form-control" id="request" rows="3" required="required"></textarea>
                        <div class="invalid-feedback">Request missing</div>
                    </div>

                    <div class="form-group">
                        <label for="problem" class="form-label">What is your problem?<span class="red">*</span></label>
                        <textarea class="form-control" id="problem" rows="3" required="required"></textarea>
                        <div class="invalid-feedback">Problem missing</div>
                    </div>

                    <div class="form-group">
                        <label for="evidenceimg">Image of Evidence</label>
                        <br/>
                        <input type="file" class="form-control-file form-control" id="evidenceimg" style="" />
                    </div>

                    <div class="form-group">
                        <label for="casedate" class="form-label">Date of Incident<span class="red">*</span></label>
                        <input type="date" class="form-control" id="casedate" aria-describedby="emailHelp"  required="required" />
                        <div class="invalid-feedback">Date missing</div>
                    </div>
                    <div class="form-group">
                        <label for="caseamount" class="form-label">Amount of Concerns<span class="red">*</span></label>
                        <input type="text" class="form-control" id="caseamount" aria-describedby="emailHelp" required="required" value="0" />
                        <div class="form-text">Enter "0" if the amount is not applicable.</div>
                        <div class="invalid-feedback">Amount missing</div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="form-label">Location of Incident<span class="red">*</span></label>
                        <input type="text" class="form-control" id="location" aria-describedby="emailHelp" required="required" />
                        <div class="invalid-feedback">Location missing</div>
                    </div>
                    <div class="form-group">
                        <label for="Email1" class="form-label">Email address<span class="red">*</span></label>
                        <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" required="required" />
                        <div class="form-text">We'll never share your contact detail with anyone else.</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 form-group">
                            <label for="contactno" class="form-label">Contact No.<span class="red">*</span></label>
                            <input type="tel" class="form-control" id="contactno" aria-label="" aria-describedby="button-addon2" required="required" />
                            
                            <div class="form-text">We'll never share your contact detail with anyone else.</div>
                            <div class="invalid-feedback">Contact missing</div>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="pin" class="form-label">Verification Code<span class="red">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="pin" aria-label="" aria-describedby="button-addon2" required="required" />
                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Get Validation Code</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required" />
                    <label class="form-check-label" for="exampleCheck1">I acknowledge that I have read and agreed with the <a href="terms.html" target="_blank">Terms and Conditions</a> for use of Sealincloud services.</label>
                    <div id="warn" class="invalid-feedback">You must check the box prior to submission.</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </section>

    <!-- Footer-->
<? include("../home/footer.php"); ?>
    <!-- Bootstrap core JS-->
    <script type="text/javascript" src="vendor/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script type="text/javascript" src="vendor/js/scripts.js"></script>
    <script type="text/javascript">
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation');

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add('was-validated');
          }, false);
        });
    </script>
</body>
</html>
