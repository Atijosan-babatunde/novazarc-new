<?php
error_reporting(0);
session_start();
include("../cpanel/link.php");
if (empty($_SESSION['LOGIN_STATE'])) {
  echo '<script> location.href="login";</script>';
  exit();
}


$_SESSION['US_mail'];
$_SESSION['US_fn'];
$_SESSION['US_ln'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties | Admin - Dashboard </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <?php include("../links/jsStyles.php"); ?>



</head>
<style>
  .btn-to {
    font-size: 20px;
    font-weight: 600;

  }

  .modal-header {
    background-color: #faa603;
    color: #ffffff;
    font-weight: 600;
  }
</style>

<style>
  .btn-to {
    font-size: 20px;
    font-weight: 600;

  }

  .modal-header {
    background-color: #faa603;
    color: #ffffff;
    font-weight: 600;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed" onload="searchdata()">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"> </i></a>
        </li>
      </ul>
    </nav>


    <?php include("../links/userLinks.php"); ?>
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style=" min-height: 550px;">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3 class="m-0" style="font-weight:600; ">Add Listing</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a class="px-4 py-2 mt-3" href="../" style="background-color: #dbae5f; color: var(--white); border-radius:3px">Home</a></li>

              </ol>
            </div>
          </div>
        </div>
      </div>


      <section class="content">
        <div class="container-fluid">
          <div class="card card-default">
            <div class="card-header"> </div>

            <div class="card-body">
              <form id="mydata" method="post" onSubmit="return false">


                <div id="part1">
                  <div class="d-flex" style="justify-content: space-between">
                    <p style="font-size:10px; color:red"> Note: Fields with astericks are compulsory </p>
                    <button type="button" class="btn btn-slow mb-2" data-toggle="modal" data-target="#myModal" style=" background-color: rgba(61,184,58,.2); border-radius: 4px; padding: 5px; color: #3db83a; margin-bottom: 10px; margin-top: -5px; cursor: pointer;"><i class="fa-solid fa-circle-info mr-1"></i>Guides</button>

                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">


                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Add Listing Guide</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                          </div>
                          <div class="modal-body">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-to" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Property Description
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="card-body">
                                    Whatever you'd like to say about your apartment, say it. Describe the category and area where it's located
                                    and state all the pros and cons. Convince buyers that this place is
                                    worth seeing and ultimately moving in to, also specify the purpose either for rent or for sale. The primary purpose is to
                                    gain attention and entice people.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-to collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Location
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    Click on the country selection box, to describe the country and the area where its located.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-to collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Property Address
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                  <div class="card-body">
                                    Help buyers to understand better the space and overall size of your apartment. Do you offer parking spaces? The number of rooms, The exact address,
                                    square meters usually are the main criteria for filtering suitable options.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-to collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Property Status
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    Is your apartment furnished? What is the condition of your apartment? Specify whether the place is newly
                                    built or had previously been occupied so buyers could see the full picture.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-to collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                      Interior Facilities
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    Select how many bathrooms, Toilets and Bedrooms. Be specific enough to convince the customer.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-to collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                      Pricing & Negotiation
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    What's the cost? Specify your last price or click on 'Negotiable' to let buyers know that you're ready to bargain.
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>


                  <div class="row" id="moree">
                    <h3 class="card-title mb-4">PROPERTY DESCRIPTION</h3>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Category * </label>
                        <select class="form-control" id="category" name="category" style="width: 100%;">
                          <option Value="" selected="selected">Select</option>
                          <option value="apartment">Apartments</option>
                          <option value="house">Houses</option>
                          <option value="hostel">Hostel</option>
                          <option value="lands">Lands</option>
                          <option value="shortlet">Shortlet</option>
                          <option value="shop">Shops</option>
                          <option value="office">Offices</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>purpose * </label>
                        <select name="purpose" class="nice-select form-control" id="purpose" onChange="changeRentAndSale()">
                          <option Value="" selected="selected">Select</option>
                          <option value="1">For rent</option>
                          <option value="2">For sale</option>
                        </select>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Description * </label>
                        <textarea class="form-control" name="description" id="description" rows="4" style="width: 100%;" placeholder="Description here"></textarea>
                      </div>

                    </div>

                  </div>

                  <br>
                  <h5 class="mb-4">LOCATION</h5>
                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Country * </label>
                        <select class="form-control" name="country" id="country" onChange="Change_country()">
                          <option value="" selected="selected">Select</option>
                          <?php
                          $mo = mysqli_query($link, "SELECT * FROM country
                                  ORDER BY cname ASC
                                  ");
                          while ($row = mysqli_fetch_array($mo)) {
                          ?>
                            <option><?php echo $row['cname']; ?> </option>
                          <?php

                          }

                          ?>
                        </select>
                      </div>
                    </div>
                    <div style="display:none" id="agent" class="col-md-12">
                      <div class="col-md-4" id="agency">
                        <div class="form-group">
                          <label>Agency fee</label>
                          <input type="text" class="form-control" name="agent_fee" id="agent_fee" placeholder="Agency fee">
                        </div>
                      </div>
                      <div class="col-md-4" id="commission">
                        <div class="form-group">
                          <label>Commission fee</label>
                          <input type="text" class="form-control" name="commission_fee" id="commission_fee" placeholder="Commission fee">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Legal and agreement fee</label>
                          <input type="text" class="form-control" name="agreement_fee" id="agreement_fee" placeholder="Legal and agreement fee">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <!-- /.form-group -->
                      <div class="form-group" id="localset1" style="display:none">
                        <label>State * </label>
                        <select class="form-control" name="state" id="state" onChange="Change_state()">
                          <option value="" selected="selected">Select</option>
                          <?php
                          $mo = mysqli_query($link, "SELECT * FROM states
                                  ORDER BY state ASC
                                  ");
                          while ($row = mysqli_fetch_array($mo)) {

                          ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['state']; ?> </option>
                          <?php

                          }

                          ?>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group" id="localset2" style="display:none">
                        <label>L. G. A.</label>
                        <select class="form-control" name="lga" id="lga">
                          <option value="" selected="selected">Select</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-md-4">
                      <!-- /.form-group -->
                      <div class="form-group" id="nonset1" style="display:none">
                        <label>State</label>
                        <input type="text" class="form-control" name="state" id="state" style="width: 100%;">

                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group" id="nonset2" style="display:none">
                        <label>L. G. A.</label>
                        <input type="text" class="form-control" name="lga" id="lga" style="width: 100%;">

                      </div>
                    </div>

                  </div>
                  <br>
                  <h5 class="mb-4">PROPERTY ADDRESS </h5>
                  <div class="row">

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Address * </label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Property address">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Estate name</label>
                        <input type="text" class="form-control" name="estname" id="estname" placeholder="Estate name">
                      </div>

                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Property dimension (Sqm)</label>
                        <input type="text" class="form-control" name="psize" id="psize" placeholder="E.g. 123 X 134">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Parking space</label>
                        <select type="text" class="form-control" name="pspace" id="pspace">
                          <option value="" selected="Selected">Select </option>
                          <option value="1">Yes </option>
                          <option value="2"> No</option>
                        </select>
                      </div>

                    </div>
                  </div>

                  <h5 class="mb-4 mt-4"> PROPERTY STATUS</h5>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Property type </label>
                        <select class="form-control" name="ptype" id="ptype" style="width: 100%;">
                          <option value="" selected="selected">Select</option>
                          <option value="condo">Condo</option>
                          <option value="bungalow">Bungalow</option>
                          <option value="duplex">Duplex</option>
                          <option value="detached">detached</option>
                          <option value="farm house">Farmhouse</option>
                          <option value="pent house">Penthouse</option>
                          <option value="studio">Studio</option>
                          <option value="mini flat">Miniflat</option>
                          <option value="villa">Villa</option>
                          <option value="mansion">Mansion</option>
                          <option value="castle">Castle</option>
                          <option value="room and parlor">Room & Parlor</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">

                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Condition * </label>
                        <select name="condition" class="nice-select form-control" id="condition">
                          <option Value="" selected="selected">Select</option>
                          <option value="Fairly Used">Faily Used</option>
                          <option value="Newly Built">Newly Built</option>
                          <option value="Used">Used</option>
                        </select>
                      </div>

                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Furnishing </label>
                        <select name="furnishing" class="nice-select form-control" id="furnishing">
                          <option Value="" selected="selected">Select</option>
                          <option value="Semi Furnishing">Semi Furnishing</option>
                          <option value="Furnished">Furnished</option>
                          <option value="Not Furnished">Not Furnished</option>
                        </select>
                      </div>

                    </div>
                  </div>

                  <h5 class="mb-4 mt-4"> INTERIOR FACILITIES</h5>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Bedrooms</label>
                        <input type="text" class="form-control" name="broom" id="broom" placeholder="1 - 200 ">

                      </div>
                    </div>

                    <div class="col-md-4">

                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Bathrooms</label>
                        <input type="text" class="form-control" name="batroom" id="batroom" placeholder="1 - 200 ">
                      </div>

                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Toilets</label>
                        <input type="text" class="form-control" name="toilet" id="toilet" placeholder="1 - 200 ">
                      </div>

                    </div>
                  </div>

                  <h5 class="mb-4 mt-4"> PRICING / NEGOTIATION</h5>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Price * </label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="text-decoration: line-through"><del>N</del></span>
                        </div>

                        <input type="number" class="form-control" name="price" id="price" placeholder="Price in figure">
                      </div>
                    </div>
                    <div class=" col-md-4">
                      <label>Time period:</label>
                      <div class="input-item  input-item-name ">
                        <select name="tperiod" class="nice-select form-control" id="tperiod">
                          <option Value="" selected="selected">Select</option>
                          <option value="monthly">Monthly</option>
                          <option value="annually">Annually</option>
                          <option value="one off">One Off</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">

                      <div class="form-group">
                        <label>Negotiable * </label>
                        <select type="text" class="form-control" name="negotiate" id="negotiate">
                          <option value="" selected="Selected">Select </option>
                          <option value="1">Negotiable </option>
                          <option value="2"> Non Negotiable</option>
                        </select>
                      </div>

                    </div>
                  </div>
                  <h5 class="mb-4 mt-4">Others</h5>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Pet </label>
                        <select type="text" class="form-control" name="pet" id="pet">
                          <option value="" selected="Selected">Select </option>
                          <option value="Yes">Yes </option>
                          <option value="No"> No</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">

                      <div class="form-group">
                        <label>Smoking </label>
                        <select type="text" class="form-control" name="smoking" id="smoking">
                          <option value="" selected="Selected">Select </option>
                          <option value="Allowed">Allowed </option>
                          <option value="Not Allowed"> Not Allowed</option>
                        </select>
                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">
                        <label>Party </label>
                        <select type="text" class="form-control" name="party" id="party">
                          <option value="" selected="Selected">Select </option>
                          <option value="Allowed">Allowed </option>
                          <option value="Not Allowed"> Not Allowed</option>
                        </select>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Population </label>
                        <input type="text" class="form-control" name="population" id="toilet" placeholder="1 - 100 ">
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <input type="submit" onClick="Hide()" class="btn px-5 py-2 ft-2 fs-12 fw-600" style="background-color: #dbae5f; color: var(--white);" value="Next">
                      </div>

                    </div>
                  </div>


                </div>
                <br>

                <div id="part2" style="display: none">
                  <h4>Facilities</h4>

                  <hr>

                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> 24 Hours Electricity</label> <br>
                        <input type="checkbox" name="electricity" id="electricity" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Air Conditioning</label> <br>
                        <input type="checkbox" name="aircondition" id="aircondition" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Apartment</label> <br>
                        <input type="checkbox" name="apartment" id="apartment" value="yes">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Balcony</label> <br>
                        <input type="checkbox" name="balcony" id="balcony" value="yes">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Chandelier</label> <br>
                        <input type="checkbox" name="chandelier" id="chandelier" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Dinning Areas </label> <br>
                        <input type="checkbox" name="dinningarea" id="dinningarea" value="yes">

                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Dishwasher</label> <br>
                        <input type="checkbox" name="dishwasher" id="dishwasher" value="yes">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Hot Water</label> <br>
                        <input type="checkbox" name="hotwater" id="hotwater" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Kitchen Cabinet</label> <br>
                        <input type="checkbox" name="kitchencabinet" id="kitchencabinet" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Microwave</label> <br>
                        <input type="checkbox" name="microwave" id="microwave" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Pop Ceiling</label> <br>
                        <input type="checkbox" name="popceiling" id="popceiling" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Pre paid Meter </label> <br>
                        <input type="checkbox" name="prepaidmeter" id="prepaidmeter" value="yes">

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Refrigerator</label> <br>
                        <input type="checkbox" name="refrigerator" id="refrigerator" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Tiled Floor</label> <br>
                        <input type="checkbox" name="tilefloor" id="tilefloor" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> TV</label> <br>
                        <input type="checkbox" name="tv" id="tv" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Wardrobe</label> <br>
                        <input type="checkbox" name="wardrobe" id="wardrobe" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Kitchen Shelf </label> <br>
                        <input type="checkbox" name="kitchenshelf" id="kitchenshelf" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Internet </label> <br>
                        <input type="checkbox" name="internet" id="internet" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Changing room </label> <br>
                        <input type="checkbox" name="changingroom" id="changingroom" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Table </label> <br>
                        <input type="checkbox" name="table" id="table" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Chair </label> <br>
                        <input type="checkbox" name="chair" id="chair" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Projector </label> <br>
                        <input type="checkbox" name="projector" id="projector" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Power Generator </label> <br>
                        <input type="checkbox" name="powergenerator" id="powergenerator" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Sectional </label> <br>
                        <input type="checkbox" name="sectional" id="sectional" value="yes">

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <input type="submit" onClick=" Show()" class="btn px-5 py-2 ft-2 fs-12 fw-600" style="background-color: #dbae5f; color: var(--white);" value="Previous">
                      </div>

                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <input type="submit" onClick="Postings()" id="btnsave" class="btn px-5 py-2 ft-2 fs-12 fw-600" style="background-color: #dbae5f; color: var(--white);" value="Add listing">
                      </div>

                    </div>
                  </div>

                </div>

                <div id="lres" class="text-center"></div>


              </form>

              <!-- </div>
            <div class="card-footer fw-bold"> Product listing </div>
          </div> -->

              <div class="card card-default" id="imagesload" style="display: none; min-height: 350px;">
                <div class="card-header"> Upload images</div>

                <div class="card-body">
                <p style="font-size:10px; color:red"> Note: Minimum upload of 5 images. </p>
                  <form method='post' id="myformdata" action='' onSubmit="return false;">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <p>
                            <input type="file" name="myfiles[]" id="myfiles" multiple>
                          </p>
                        </div>
                        <p id="wke"> </p>

                        <!--<div class="form-group">-->
                        <!--  <br>-->
                        <!--  <input type="submit" onClick="Doneall()" id="btnsave" class="btn btn-primary" value="Done">-->
                        <!--</div>-->


                        <!-- PROMOTION MODAL -->
                        <div class="form-group">
                          <br>
                          <button type="button" onClick="validateImage()" class="btn px-5 py-2 ft-2 fs-12 fw-600" style="background-color: #dbae5f; color: var(--white)" data-toggle="modal" data-target="#myModal2" id="done-btn" disabled>Done</button>
                        </div>

                        <div id="myModal2" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Promotion</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                              </div>
                              <div class="modal-body justify-content-center text-center">
                                <p>Get your advert on the top of the page so it doesn't get lost behind thousands of others! Choose any of our category
                                  and get it promoted on our Home page.

                                <p class="mt-5 ">Promote ADS by clicking Continue.</p>
                                </p>
                              </div>
                              <div class="modal-footer d-flex">
                                <input type="submit" onClick="Doneall()" id="btnsave" class="btn px-5 py-2 ft-2 fs-12 fw-600" style="background-color: #dbae5f; color: var(--white);" value="Not interested">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onClick="DoneAds()">Proceed</button>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </div>

            </div>
      </section>

    </div>



    <?php include("../links/footer.php"); ?>
  </div>


  <script src="../plugins/jquery/jquery.min.js"></script>


  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../dist/js/pages/dashboard.js"></script>

  <script>
    function Postings() {

      var fd = new FormData($("#mydata")[0]);

      $('#btnsave').attr('disabled', true);
      $('#lres').html("<span style='padding:5px;color: green; font-size: 25px;'> Please wait... uploading your data. </span>")
      $.ajax({
        url: '../assets/',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(data) {
          $('#lres').html(data);

          if (data.includes("Good")) {

            document.getElementById("part2").style.display = 'none';
            document.getElementById("lres").style.display = 'none';
            document.getElementById("moree").style.display = 'none';
            document.getElementById("imagesload").style.display = 'block';


          } else {
            $('#btnsave').attr('disabled', false);
            document.getElementById("part2").style.display = 'block';
            document.getElementById("lres").style.display = 'block';
            document.getElementById("imagesload").style.display = 'none';
            document.getElementById("moree").style.display = 'block';
          }
        }
      });



    }

    function Change_country() {
      var country = document.getElementById("country").value

      if (country == "") {
        document.getElementById("localset1").style.display = 'none';
        document.getElementById("localset2").style.display = 'none';
        document.getElementById("nonset1").style.display = 'none';
        document.getElementById("nonset2").style.display = 'none';


      } else if (country == "Nigeria") {
        document.getElementById("localset1").style.display = 'block';
        document.getElementById("localset2").style.display = 'block';
        document.getElementById("nonset1").style.display = 'none';
        document.getElementById("nonset2").style.display = 'none';
      } else {
        document.getElementById("localset1").style.display = 'none';
        document.getElementById("localset2").style.display = 'none';
        document.getElementById("nonset1").style.display = 'block';
        document.getElementById("nonset2").style.display = 'block';
      }
    }

    function changeRentAndSale() {
      var purpose = document.getElementById("purpose").value
      var agent = document.getElementById("agency");
      var commission = document.getElementById("commission");

      if (purpose == "1") {
        document.getElementById("agent").style.display = 'block'
        agent.style.display = 'block';
        commission.style.display = 'none'
      } else if (purpose == "2") {
        document.getElementById("agent").style.display = 'block'
        agent.style.display = 'none';
        commission.style.display = 'block'
      }
    }

    function Change_state() {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.open("GET", "nichcall.php?viewme=" + document.getElementById("state").value, false);
      xmlhttp.send(null);
      document.getElementById("lga").innerHTML = xmlhttp.responseText;
    }

    function Hide() {

      var cate = $('#category').val();
      var description = $('#description').val();
      var price = $('#price').val();
      var address = $('#address').val();
      var country = $('#country').val();
      var state = $('#state').val();
      var condition = $('#condition').val();
      var purpose = $('#purpose').val();
      var negotiate = $('#negotiate').val();

      if (cate != "" && description != "" && price != "" && address != "" && condition != "" && purpose != "" && negotiate != "") {

        document.getElementById("part1").style.display = 'none';
        document.getElementById("part2").style.display = 'block';


      } else {
        $('#lres').html("<span style='padding:5px;color:#f00'> Fields with asterisks are required </span>")
        $(this).delay(4000).queue(function() {
          $('#lres').html("<span style='padding:5px;color:#fff'></span>")
          $(this).dequeue();
        });
      }





    }

    function Show() {

      document.getElementById("part1").style.display = 'block';
      document.getElementById("part2").style.display = 'none';

    }
  </script>
  <script>
    $(document).ready(function() {
      $('#myfiles').change(function() {
        //alert("Ok");
        var fd = new FormData($("#myformdata")[0]);

        // done button
        const btn = document.getElementById("done-btn");

        // image length
        const imageLength = document.getElementById("myfiles").files.length;
        console.log("FORMDATA LENGTH", imageLength)
        if (imageLength === 0) {
          $('#wke').html("<span style='padding:5px;color:#f00'> Image upload required. </span>")
        } else if (imageLength < 5) {
          $('#wke').html("<span style='padding:5px;color:#f00'> Image should not be less than 5. </span>")
        } else {
          btn.disabled = false;
          $('#wke').html("<span style='padding:5px;color: green; font-size: 25px;'> Please wait... uploading your image. </span>")
          $.ajax({
            url: '../assets/image.php',
            method: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(data) {

              if (data.includes("Network")) {

                $('#wke').html('Bad network. Image could not be uploaded.');
              } else if (data.includes("Done")) {
                $('#wke').html('Image uploaded. You can upload more images');
                $(this).delay(10).queue(function() {
                  $(this).dequeue();
                });
                searchdata();
              }


            }
          });
        }

      });

    });


    function searchdata() {
      var typ = 'searchdata';

      $.ajax({
        url: "fetchfeatures.php",
        data: {
          typ: typ
        },
        type: "POST",
        success: function(result) {
          $("#wke").html(result);
        }
      });
    }

    function Doneall() {
      location.href = "../";
    }

    // function validateImage() {

    //   const imageLength = document.getElementById("myfiles").files.length;
    //     console.log("FORMDATA LENGTH", imageLength)
    //     if (imageLength === 0) {
    //       alert("No images selected")
    //     } else if (imageLength < 5) {
    //       alert("images should not be less than 5")
    //     } else {}
    // }

    function DoneAds() {
      location.href = "../users/ads";
    }
  </script>
</body>

</html>