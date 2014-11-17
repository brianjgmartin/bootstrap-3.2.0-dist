<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap-select test page</title>

  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-select.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      padding-top: 70px;
    }
  </style>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script type="text/javascript" src="dist/js/bootstrap-select.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bootstrap-select usability tests</a>
    </div>
  </div>
</nav>

<div class="container">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">"Basic"</label>

      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
          <option>cow</option>
          <option>bull</option>
          <option class="get-class" disabled>ox</option>
          <optgroup label="test" data-subtext="another test">
            <option>ASD</option>
            <option selected>Bla</option>
            <option>Ble</option>
          </optgroup>
        </select>
      </div>
    </div>
  </form>
  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic2" class="col-lg-2 control-label">"Basic" #2 (multiple max-option=1)</label>

      <div class="col-lg-10">
        <select id="basic2" class="show-tick form-control" multiple>
          <option>cow</option>
          <option>bull</option>
          <option class="get-class" disabled>ox</option>
          <optgroup label="test" data-subtext="another test">
            <option>ASD</option>
            <option selected>Bla</option>
            <option>Ble</option>
          </optgroup>
        </select>
      </div>
    </div>
  </form>
  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="maxOption2" class="col-lg-2 control-label">multiple, show-menu-arrow, & max-option = 2</label>

      <div class="col-lg-10">
        <select id="maxOption2" class="selectpicker show-menu-arrow form-control" multiple data-max-options="2">
          <option>chicken</option>
          <option>turkey</option>
          <option disabled>duck</option>
          <option>goose</option>
        </select>
      </div>
    </div>
  </form>
  <hr>
  <form class="form-inline">
    <div class="form-group">
      <label class="col-md-1 control-label" for="lunch">Lunch: </label>
    </div>
    <div class="form-group">
      <select id="lunch" class="selectpicker" data-live-search="true" title="Please select a lunch ...">
        <option>Hot Dog, Fries and a Soda</option>
        <option>Burger, Shake and a Smile</option>
        <option>Sugar, Spice and all things nice</option>
        <option>Baby Back Ribs</option>
        <option>A really really long option made to illustrate an issue with the live search in an inline form</option>
      </select>
    </div>
  </form>
  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group form-group-lg">
      <label for="error" class="col-lg-2 control-label">error</label>

      <div class="col-lg-10 error">
        <select id="error" class="selectpicker show-tick form-control">
          <option>pen</option>
          <option>pencil</option>
          <option selected>brush</option>
        </select>
      </div>
    </div>
  </form>
  <hr>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <select class="selectpicker" multiple data-live-search="true" data-actions-box="true">
            <optgroup label="filter1">
              <option>option1</option>
              <option>option2</option>
              <option>option3</option>
              <option>option4</option>
            </optgroup>
            <optgroup label="filter2">
              <option>option1</option>
              <option>option2</option>
              <option>option3</option>
              <option>option4</option>
            </optgroup>
            <optgroup label="filter3">
              <option>option1</option>
              <option>option2</option>
              <option>option3</option>
              <option>option4</option>
            </optgroup>
          </select>
        </div>

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="q">

          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

    </div>
    <!-- .container-fluid -->
  </nav>
  <hr>
  <select id="first-disabled" class="selectpicker" data-hide-disabled="true" data-live-search="true">
    <optgroup disabled="disabled" label="disabled">
      <option>Hidden</option>
    </optgroup>
    <optgroup label="Fruit">
      <option>Apple</option>
      <option>Orange</option>
    </optgroup>
    <optgroup label="Vegetable">
      <option>Corn</option>
      <option>Carrot</option>
    </optgroup>
  </select>
  <hr>
  <select id="first-disabled2" class="selectpicker" multiple data-hide-disabled="true" data-size="5">
    <option><a href="home.php">Apple</option>
    <option>Banana</option>
    <option>Orange</option>
    <option>Pineapple</option>
    <option>Apple2</option>
    <option>Banana2</option>
    <option>Orange2</option>
    <option>Pineapple2</option>
    <option>Apple2</option>
    <option>Banana2</option>
    <option>Orange2</option>
    <option>Pineapple2</option>
  </select>
  <button id="special" class="btn btn-default">Hide selected by disabling</button>
  <p>Just select 1st element, click button and check list again</p>
  <script>
    $(document).ready(function () {ƒapp
      var mySelect = $('#first-disabled2');

      $('#special').on('click', function () {
        mySelect.find('option:selected').attr('disabled', 'disabled');
        mySelect.selectpicker('refresh');
      });

      var $basic2 = $('#basic2').selectpicker({
        liveSearch: true,
        maxOptions: 1
      });
    });
  </script>
</div>
</body>
</html>
